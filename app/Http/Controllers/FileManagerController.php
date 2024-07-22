<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
    private $totalUsedSpaceMB;
    private $maxStorage;
    public function calculateUsedSpace()
    {
        $userId = Auth::id();
        $this->maxStorage = Auth::user()->max_size_storage;
        $directory = 'filemanager/' . $userId;
        $sharedFolder = $directory . '/Shared Folder';
    
        $fileCounts = [
            'images' => ['count' => 0, 'total_size' => 0],
            'videos' => ['count' => 0, 'total_size' => 0],
            'music' => ['count' => 0, 'total_size' => 0],
            'documents' => ['count' => 0, 'total_size' => 0],
            'compressed' => ['count' => 0, 'total_size' => 0], // New category for compressed files
            'others' => ['count' => 0, 'total_size' => 0],
        ];
        $totalSize = 0;
    
        if (Storage::disk('local')->exists($directory)) {
            $files = Storage::disk('local')->allFiles($directory);
    
            $files = array_filter($files, function ($file) use ($directory, $sharedFolder) {
                return $file !== $directory . '/filemanager.json' && strpos($file, $sharedFolder) !== 0;
            });
    
            foreach ($files as $file) {
                $fileType = $this->getFileCategory($file);
                $fileSize = Storage::disk('local')->size($file);
    
                $fileCounts[$fileType]['count']++;
                $fileCounts[$fileType]['total_size'] += $fileSize / (1024 * 1024);
    
                $totalSize += $fileSize;
            }
        }
    
        $this->totalUsedSpaceMB = $totalSize / (1024 * 1024);
        $this->maxStorage = Auth::user()->max_size_storage;
    
        return response()->json([
            'total_used_space_mb' => $this->totalUsedSpaceMB,
            'userid' => $userId,
            'max_storage' => $this->maxStorage,
            'storage_summary' => $fileCounts,
        ]);
    }
    
    private function getFileCategory($file)
    {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
        $videoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'wmv'];
        $musicExtensions = ['mp3', 'wav', 'ogg', 'flac', 'aac'];
        $documentExtensions = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf'];
        $compressedExtensions = ['zip', 'rar', '7z', 'tar', 'gz']; // Add more compressed file extensions as needed

        if (in_array($extension, $imageExtensions)) {
            return 'images';
        } elseif (in_array($extension, $videoExtensions)) {
            return 'videos';
        } elseif (in_array($extension, $musicExtensions)) {
            return 'music';
        } elseif (in_array($extension, $documentExtensions)) {
            return 'documents';
        } elseif (in_array($extension, $compressedExtensions)) {
            return 'compressed';
        } else {
            return 'others';
        }
    }
    public function fileManager(Request $request)
    {
        $command = $request->input('command');
        $arguments = $request->input('arguments');
        $chunk = $request->file('chunk');
        if ($chunk) {
            $chunk = $chunk->get();
        } else {
        }

        $config = [
            'allowDownload' => true,
            'tempDirectory' => storage_path('app/temp'),
        ];

        switch ($command) {
            case 'GetDirContents':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->getDirectoryContents($directory, $arguments);
                break;
            case 'UploadChunk':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->uploadFile($directory, $arguments, $chunk);
                break;
            case 'AbortUpload':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->abortUpload($arguments);
                break;
            case 'CreateDir':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->createDirectory($directory, $arguments);
                break;
            case 'Rename':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->rename($directory, $arguments);
                break;
            case 'Remove':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->remove($directory, $arguments);
                break;
            case 'Move':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->move($directory, $arguments);
                break;
            case 'Copy':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->copy($directory, $arguments);
                break;
            case 'Download':
                $directory = 'filemanager/' . Auth::id();
                $result = $this->download($directory, $arguments);
                return $result;
                break;
            default:
                $result = ['success' => false, 'error' => 'Unsupported command', 'errorText' => 'Forbidden'];
                break;
        }

        return response()->json($result);
    }

    private function getDirectoryContents($directory, $arguments)
    {
        $pathInfo = json_decode($arguments, true);
        $lastPath = end($pathInfo['pathInfo']);
        if (isset($lastPath['name'])) {
            $directory = $lastPath['key'];
        }
        if (!Storage::disk('local')->exists($directory)) {
            Storage::disk('local')->makeDirectory($directory, 0755, true);
            // Storage::disk('local')->makeDirectory($directory . '/Shared Folder', 0755, true);
        }

        $files = Storage::disk('local')->files($directory);
        $directories = Storage::disk('local')->directories($directory);

        $files = array_filter($files, function ($file) use ($directory) {
            return $file !== $directory . '/filemanager.json';
        });
        $userId1 = Auth::id();
        $directory1 = 'filemanager/' . $userId1;
        $files1 = Storage::disk('local')->allFiles($directory1);
        $directories1 = Storage::disk('local')->allDirectories($directory1);

        $files1 = array_filter($files1, function ($file) use ($directory1) {
            return $file !== $directory1 . '/filemanager.json';
        });
        $directories1 = array_filter($directories1, function ($dir) {
            return basename($dir) !== 'Shared Folder';
        });

        $jsonContent = [];
        $fileManagerPath = 'filemanager/' . $userId1 . '/filemanager.json';

        if (Storage::disk('local')->exists($fileManagerPath)) {
            $existingContent = json_decode(Storage::disk('local')->get($fileManagerPath), true);
            $jsonContent = [
                'files' => [],
                'folders' => []
            ];
            $jsonContent['updated_at'] = now();
            $jsonContent['created_at'] =$existingContent['created_at'] ?? null;
        } else {

            $jsonContent = [
                'files' => [],
                'folders' => []
            ];
            $jsonContent['created_at'] = now();
            $jsonContent['updated_at'] = now();

        }

        foreach ($files1 as $file) {
            $fileName = basename($file);
            $jsonContent['files'][$fileName] = [
                'shared_hrid' => [
                    'hrids' => []
                ]
            ];
        }

        foreach ($directories1 as $dir) {
            $folderName = basename($dir);
            $jsonContent['folders'][$folderName] = [
                'shared_hrid' => [
                    'hrids' => []
                ]
            ];
        }

        if (isset($existingContent['files'])) {
            foreach ($existingContent['files'] as $fileName => $fileData) {
                if (isset($jsonContent['files'][$fileName])) {
                    $jsonContent['files'][$fileName]['shared_hrid'] = $fileData['shared_hrid'];
                }
            }
        }
        if (isset($existingContent['folders'])) {
            foreach ($existingContent['folders'] as $folderName => $folderData) {
                if (isset($jsonContent['folders'][$folderName])) {
                    $jsonContent['folders'][$folderName]['shared_hrid'] = $folderData['shared_hrid'];
                }
            }
        }

        Storage::disk('local')->put($fileManagerPath, json_encode($jsonContent, JSON_PRETTY_PRINT));

        $result = [];
        foreach ($directories as $dir) {
            $result[] = [
                'key' => $dir,
                'name' => basename($dir),
                'dateModified' => date('Y-m-d\TH:i:s', Storage::disk('local')->lastModified($dir)) . '.000Z',
                'isDirectory' => true,
                'size' => 1000,
                'hasSubDirectories' => count(Storage::disk('local')->directories($dir)) > 0,
                'file_extension' => "Folder",
            ];
        }
        foreach ($files as $file) {
            $fileInfo = pathinfo($file);
            $fileData = [
                'key' => $file,
                'name' => $fileInfo['basename'],
                'dateModified' => date('Y-m-d\TH:i:s', Storage::disk('local')->lastModified($file)) . '.000Z',
                'isDirectory' => false,
                'size' => Storage::disk('local')->size($file),
                'hasSubDirectories' => false,
                'file_extension' => isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '', // Extract file extension
            ];

            // Check if the file is an image (you can extend this check for other image formats)
            if (in_array(strtolower($fileInfo['extension']), ['jpg', 'jpeg', 'png', 'gif'])) {
                $imageData = base64_encode(file_get_contents(storage_path('app/' . $file)));
                $fileData['base64Data'] = 'data:image/' . $fileInfo['extension'] . ';base64,' . $imageData;
            }

            $result[] = $fileData;
        }

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => $result,
        ];
    }

    private function uploadFile($directory, $arguments, $chunk)
    {
        $chunkMetadata = json_decode($arguments, true)['chunkMetadata'];
        $chunkMetadata = json_decode($chunkMetadata, true);
        $uploadID = $chunkMetadata['UploadId'];

        $pathInfo = json_decode($arguments, true);
        $lastPath = end($pathInfo['destinationPathInfo']);
        if (isset($lastPath['name'])) {
            $directory = $lastPath['key'];
        }
        if ($directory == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to upload inside this folder',
                'result' => null,
            ];
        }
        $totalSize = 0;

        if (Storage::disk('local')->exists($directory)) {
            $files = Storage::disk('local')->allFiles($directory);

            foreach ($files as $file) {
                $fileSize = Storage::disk('local')->size($file);
                $totalSize += $fileSize;
            }
        }
        $totalUsedSpace = $totalSize;
        $maxSizeStorage = Auth::user()->max_size_storage * 1024 * 1024;

        $fileSize = $chunkMetadata['FileSize'];
        $totalFileSize = $fileSize + $totalUsedSpace;

        if ($totalFileSize > $maxSizeStorage) {
            return [
                'success' => false,
                'errorCode' => 'FileSizeExceedsLimit',
                'errorText' => 'Total file size exceeds the maximum storage limit',
                'result' => null,
                'id' => $uploadID,
                'used_storage' => $totalUsedSpace,
                'max_storage' => $maxSizeStorage
            ];
        }

        $tempDir = 'temp';
        $fileName = $uploadID . '_' . $chunkMetadata['FileName'];
        $tempFilePath = "{$tempDir}/{$fileName}";

        if (!Storage::exists($tempFilePath)) {
            Storage::put($tempFilePath, $chunk);
        } else {
            $existingContent = Storage::get($tempFilePath);
            $newContent = $existingContent . $chunk;
            Storage::put($tempFilePath, $newContent);
        }

        if ($chunkMetadata['Index'] == $chunkMetadata['TotalCount'] - 1) {
            $finalDir = $directory;
            $destinationFilePath = "{$finalDir}/{$chunkMetadata['FileName']}";

            $originalDestinationFilePath = $destinationFilePath;
            $counter = 2;
            while (Storage::exists($destinationFilePath)) {
                $fileNameParts = pathinfo($originalDestinationFilePath);
                $destinationFilePath = $fileNameParts['dirname'] . '/' . $fileNameParts['filename'] . "($counter)." . $fileNameParts['extension'];
                $counter++;
            }

            if (Storage::move($tempFilePath, $destinationFilePath)) {
                return [
                    'success' => true,
                    'errorCode' => null,
                    'errorText' => '',
                    'result' => null,
                    'id' => $uploadID
                ];
            } else {
                return [
                    'success' => false,
                    'errorCode' => 'FileMoveError',
                    'errorText' => 'Failed to move file to destination directory',
                    'result' => null,
                    'id' => $uploadID
                ];
            }
        } else {
            return [
                'success' => true,
                'errorCode' => null,
                'errorText' => '',
                'result' => null,
                'id' => $uploadID
            ];
        }
    }
    private function createDirectory($directory, $arguments)
    {
        $directoryName = json_decode($arguments, true)['name'];
        $pathInfo = json_decode($arguments, true);
        $lastPath = end($pathInfo['pathInfo']);
        if (isset($lastPath['name'])) {
            $directory = $lastPath['key'];
        }

        if ($directory == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to create a directory inside the shared folder',
                'result' => null,
            ];
        }
        if (!Storage::disk('local')->exists($directory)) {
            Storage::disk('local')->makeDirectory($directory);
        }

        $newDirectoryPath = $directory . '/' . $directoryName;

        if (!Storage::disk('local')->exists($newDirectoryPath)) {
            Storage::disk('local')->makeDirectory($newDirectoryPath);
        } else {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'A file or directory with the specified name already exists',
                'result' => null,
            ];
        }
        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
        ];
    }
    private function rename($directory, $arguments)
    {
        $newName = json_decode($arguments, true)['name'];
        $isDirectory = json_decode($arguments, true)['isDirectory'];
        $pathInfo = json_decode($arguments, true);
        $lastPath = end($pathInfo['pathInfo']);
        $oldName = "";
        if (isset($lastPath['name'])) {
            $directory = $lastPath['key'];
            $oldName = $lastPath['name'];
        }
        if ($directory == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to rename this folder',
                'result' => null,
            ];
        }
        $userId = Auth::id();
        $fileManagerPath = 'filemanager/' . $userId . '/filemanager.json';

        if (!Storage::disk('local')->exists($directory)) {
            return [
                'success' => false,
                'errorCode' => 'ItemNotFound',
                'errorText' => 'The specified item was not found',
                'result' => null,
            ];
        }

        // Load and decode the filemanager.json
        $jsonContent = [];
        if (Storage::disk('local')->exists($fileManagerPath)) {
            $jsonContent = json_decode(Storage::disk('local')->get($fileManagerPath), true);
        }

        // Update the JSON content with the new name
        if ($isDirectory && isset($jsonContent['folders'][$oldName])) {
            // Update folder name
            $jsonContent['folders'][$newName] = $jsonContent['folders'][$oldName];
            unset($jsonContent['folders'][$oldName]);
        } elseif (!$isDirectory && isset($jsonContent['files'][$oldName])) {
            // Update file name
            $jsonContent['files'][$newName] = $jsonContent['files'][$oldName];
            unset($jsonContent['files'][$oldName]);
        }

        // Save the updated JSON back to filemanager.json
        Storage::disk('local')->put($fileManagerPath, json_encode($jsonContent, JSON_PRETTY_PRINT));

        // Rename the directory or file
        $newPath = dirname($directory) . '/' . $newName;
        Storage::disk('local')->move($directory, $newPath);

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
        ];
    }

    private function remove($directory, $arguments)
    {
        $pathInfo = json_decode($arguments, true);
        $lastPath = end($pathInfo['pathInfo']);
        if (isset($lastPath['name'])) {
            $directory = $lastPath['key'];
        }
        $firstPath = reset($pathInfo['pathInfo']);
        $directory1 = $firstPath['key'];
        $isDirectory = json_decode($arguments, true)['isDirectory'];
        if ($directory1 == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to delete this folder',
                'result' => null,
            ];
        }
        if (!Storage::disk('local')->exists($directory)) {
            return [
                'success' => false,
                'errorCode' => 'ItemNotFound',
                'errorText' => 'The specified item was not found',
                'result' => null,
            ];
        }

        if ($isDirectory) {
            Storage::disk('local')->deleteDirectory($directory);
        } else {
            Storage::disk('local')->delete($directory);
        }

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
        ];
    }
    private function move($directory, $arguments)
    {
        $destinationDirectory = 'filemanager/' . Auth::id();
        $sourcePathInfo = json_decode($arguments, true);
        $sourceLastPath = end($sourcePathInfo['sourcePathInfo']);
        if (isset($sourceLastPath['name'])) {
            $directory = $sourceLastPath['key'];
        }

        $destinationPathInfo = json_decode($arguments, true);
        $destinationLastPath = end($destinationPathInfo['destinationPathInfo']);
        $firstPath = reset($destinationPathInfo['destinationPathInfo']);
        $directory1 = $firstPath['key'];
        if (isset($destinationLastPath['name'])) {
            $destinationDirectory = $destinationLastPath['key'];
        }
        if ($directory == 'filemanager/' . Auth::id() . '/Shared Folder' ) {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to move this folder',
                'result' => null,
            ];
        }
        if ($destinationDirectory == 'filemanager/' . Auth::id() . '/Shared Folder' || $directory1 == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to move a file inside the shared folder',
                'result' => null,
            ];
        }
        $sourceIsDirectory = json_decode($arguments, true)['sourceIsDirectory'];

        if (!Storage::disk('local')->exists($directory)) {
            return [
                'success' => false,
                'errorCode' => 'SourceNotFound',
                'errorText' => 'The source item was not found',
                'result' => null,
            ];
        }

        if (!Storage::disk('local')->exists($destinationDirectory)) {
            return [
                'success' => false,
                'errorCode' => 'DestinationNotFound',
                'errorText' => 'The destination directory was not found',
                'result' => null,
            ];
        }

        if ($sourceIsDirectory) {
            Storage::disk('local')->move($directory, $destinationDirectory . '/' . basename($directory));
        } else {
            Storage::disk('local')->move($directory, $destinationDirectory . '/' . basename($directory));
        }

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
        ];
    }
    private function copy($directory, $arguments)
    {
        $destinationDirectory = 'filemanager/' . Auth::id();
        $sourcePathInfo = json_decode($arguments, true);
        $sourceLastPath = end($sourcePathInfo['sourcePathInfo']);
        if (isset($sourceLastPath['name'])) {
            $directory = $sourceLastPath['key'];
        }

        $destinationPathInfo = json_decode($arguments, true);
        $destinationLastPath = end($destinationPathInfo['destinationPathInfo']);
        if (isset($destinationLastPath['name'])) {
            $destinationDirectory = $destinationLastPath['key'];
            
        }
        $destinationLastPath1 = reset($destinationPathInfo['destinationPathInfo']);
        $destinationDirectory1 = $destinationLastPath1['key'];
        if ($destinationDirectory == 'filemanager/' . Auth::id() . '/Shared Folder' || $destinationDirectory1 == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to copy a file inside the shared folder',
                'result' => null,
            ];
        }
        if ($directory == 'filemanager/' . Auth::id() . '/Shared Folder') {
            return [
                'success' => false,
                'errorCode' => 'NameConflict',
                'errorText' => 'You are not allowed to copy this shared folder',
                'result' => null,
            ];
        }
        $sourceIsDirectory = json_decode($arguments, true)['sourceIsDirectory'];

        if (!Storage::disk('local')->exists($directory)) {
            return [
                'success' => false,
                'errorCode' => 'SourceNotFound',
                'errorText' => 'The source item was not found',
                'result' => null,
            ];
        }

        if (!Storage::disk('local')->exists($destinationDirectory)) {
            return [
                'success' => false,
                'errorCode' => 'DestinationNotFound',
                'errorText' => 'The destination directory was not found',
                'result' => null,
            ];
        }

        if ($sourceIsDirectory) {
            Storage::disk('local')->copy($directory, $destinationDirectory . '/' . basename($directory));
        } else {
            Storage::disk('local')->copy($directory, $destinationDirectory . '/' . basename($directory));
        }

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
        ];
    }
    public function download($directory, $arguments)
    {
        $pathInfoList = json_decode($arguments, true)['pathInfoList'][0];
        $lastPath = end($pathInfoList);

        if (isset($lastPath['key'])) {
            $directory = $lastPath['key'];
        }
        $filePath = $directory;

        if (Storage::exists($filePath)) {
            $fileContent = Storage::get($filePath);

            $headers = [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . basename($filePath) . '"',
            ];

            return response()->make($fileContent, 200, $headers);
        } else {
            abort(404, 'File not found');
        }
    }

    private function abortUpload($arguments)
    {
        $uploadID = json_decode($arguments, true)['uploadId']; // Extracting uploadId from the arguments
        $tempDir = 'temp'; // Path relative to storage/app
        $files = Storage::files($tempDir);

        foreach ($files as $file) {
            if (strpos($file, $uploadID . '_') !== false) {
                Storage::delete($file);
            }
        }

        return [
            'success' => true,
            'errorCode' => null,
            'errorText' => '',
            'result' => null,
            'id' => $uploadID
        ];
    }
}
