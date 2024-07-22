<x-app-layout>
    <pop-notify hidden>

    </pop-notify>
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.2.5/css/dx.material.blue.light.css">
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <div class="d-xl-flex">
        <div class="w-100">
            <div class="demo-container fx-card">
                <div id="file-manager" style="height: 100%"></div>
                <div id="photo-popup"></div>
            </div>
        </div>

        <div class="fx-card filemanager-sidebar ms-lg-3 p-3">
            <div class="fx-content">
                <div class="text-center">
                    <h5 class="font-size-15 mb-4">Storage</h5>
                    <div class="apex-charts" id="file-storage-graph"></div>

                    <p class="text-muted mt-4"><span id="used-mb"></span> (<span id="percent-used"></span>%) of
                        <span id="max_storage"></span> used
                    </p>
                </div>

                <div class="mt-4">
                    <div class="fx-card  mb-2">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-success font-size-18">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Images</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="images-count"></span></p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="images-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->

                    <div class="fx-card mb-2">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-danger font-size-18">
                                            <i class="far fa-play-circle"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Video</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="videos-count"></span></p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="videos-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->

                    <div class="fx-card mb-2">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-info font-size-18">
                                            <i class="fas fa-music"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Music</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="music-count"></span></p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="music-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->

                    <div class="fx-card mb-2">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-primary font-size-18">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Document</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="documents-count"></span>
                                        </p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="documents-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->
                    <div class="fx-card mb-2">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-danger font-size-18">
                                            <span class="material-symbols-outlined">
                                                folder_zip
                                            </span>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Compressed File</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="compressed-count"></span>
                                        </p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="compressed-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->
                    <div class="fx-card ">
                        <a href="javascript: void(0);" class="text-body">
                            <div class="p-2">
                                <div class="d-flex">
                                    <div class="avatar-sm align-self-center me-2">
                                        <div class="avatar-title rounded bg-transparent text-warning font-size-18">
                                            <i class="fas fa-folder"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-hidden me-auto">
                                        <h5 class="font-size-13 text-truncate mb-1">Others</h5>
                                        <p class="text-muted text-truncate mb-0"><span id="others-count"></span></p>
                                    </div>

                                    <div class="ms-2">
                                        <p class="text-muted"><span id="others-size"></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div><!-- end card -->
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addFileModal" tabindex="-1" aria-labelledby="addFileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addFileModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="file-upload-contain">
                                    <input id="multiplefileupload" type="file" multiple />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="shareModalLabel">Share a File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Share to:</label>
                    <select class="form-select" id="persons" data-placeholder="Choose a Person" multiple>
                        @foreach ($hruserinfos as $hruserinfo)
                            <option value="{{ $hruserinfo->hrid }}">
                                {{ $hruserinfo->first_name }} {{ $hruserinfo->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="sharefile_btn" class="btn btn-primary">Share</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
