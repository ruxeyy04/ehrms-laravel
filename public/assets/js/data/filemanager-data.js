const loadStorageSummary = () => {
    fetch(getFileInfo)
        .then((response) => response.json())
        .then((data) => {
            const totalUsedSpace = data.total_used_space_mb;
            const maxStorage = data.max_storage;
            let displayMaxStorage = maxStorage;
            let displayTotalUsedSpace = totalUsedSpace;

            if (maxStorage >= 1000) {
                displayMaxStorage = (maxStorage / 1024).toFixed(2) + " GB";
            } else {
                displayMaxStorage = maxStorage.toFixed(2) + " MB";
            }

            if (totalUsedSpace >= 1000) {
                displayTotalUsedSpace =
                    (totalUsedSpace / 1024).toFixed(2) + " GB";
            } else {
                displayTotalUsedSpace = totalUsedSpace.toFixed(2) + " MB";
            }

            const percentUsed = (totalUsedSpace / maxStorage) * 100;

            options.series = [percentUsed.toFixed(2)];

            chart.updateSeries(options.series);

            document.getElementById("max_storage").innerText =
                displayMaxStorage;
            document.getElementById("used-mb").innerText =
                displayTotalUsedSpace;
            document.getElementById("percent-used").innerText =
                percentUsed.toFixed(2);

            Object.keys(data.storage_summary).forEach((category) => {
                const count = data.storage_summary[category].count;
                const size = data.storage_summary[category].total_size;
                const sizeDisplay =
                    size >= 1000
                        ? (size / 1024).toFixed(2) + " GB"
                        : size.toFixed(2) + " MB";
                document.getElementById(
                    `${category}-count`
                ).innerText = `${count} ${count === 1 || count === 0 ? "File" : "Files"
                    }`;
                document.getElementById(`${category}-size`).innerText =
                    sizeDisplay;
            });
        })
        .catch((error) => console.error("Error:", error));
};
loadStorageSummary();
var options = {
    series: [0],
    chart: { height: 150, type: "radialBar", sparkline: { enabled: !0 } },
    colors: ["#038edc"],
    plotOptions: {
        radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: { background: "#e7e7e7", strokeWidth: "97%", margin: 5 },
            hollow: { size: "60%" },
            dataLabels: {
                name: { show: !1 },
                value: { offsetY: -2, fontSize: "16px" },
            },
        },
    },
    grid: { padding: { top: -10 } },
    labels: ["Storage"],
},
    chart = new ApexCharts(
        document.querySelector("#file-storage-graph"),
        options
    );
chart.render();

$(() => {
    const toastAlert = (msg, icon, variant, header) => {
        customElements.whenDefined("pop-notify").then(() => {
            function popNotify() {
                return customElements.get("pop-notify");
            }

            popNotify().configure({
                iconTransformer: (icon) => {
                    return `<span class="material-symbols-outlined">${icon}</span>`;
                },
                placement: "bottom-left",
            });

            const options = {
                variant: variant,
                icon: icon,
            };

            if (header) {
                options.header = header;
            }

            popNotify().notify(msg, options);
        });
    };
    const displayError = (error) => {
        toastAlert(error, "error", "error");
    };
    var myModal = new bootstrap.Modal(document.getElementById("shareModal"));
    $('#persons').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        closeOnSelect: false,
    });
    const csrfToken = $('meta[name="csrf-token"]').attr("content");
    const provider = new DevExpress.fileManagement.RemoteFileSystemProvider({
        endpointUrl: getFiles,
        beforeAjaxSend: (options) => {
            options.formData._token = csrfToken;
        },
        beforeSubmit: (options) => {
            options.formData._token = csrfToken;
        },
    });

    const fileManager = $("#file-manager")
        .dxFileManager({
            name: "fileManager",
            fileSystemProvider: provider,
            height: "661.56",
            upload: {
                chunkSize: 500000,
                maxFileSize: getMaxUploadfile,
            },
            permissions: {
                create: true,
                copy: true,
                move: true,
                delete: true,
                rename: true,
                upload: true,
                download: true,
            },
            itemView: {
                details: {
                    columns: [
                        "thumbnail",
                        "name",
                        {
                            dataField: "file_extension",
                            caption: "Type",
                        },
                        "dateModified",
                        "size",
                    ],
                },
                showParentFolder: false,
            },
            toolbar: {
                items: [
                    {
                        name: "showNavPane",
                        visible: true,
                    },
                    "separator",
                    "create",
                    "upload",
                    "refresh",
                    {
                        name: "separator",
                        location: "after",
                    },
                    "switchView",
                ],
                fileSelectionItems: [
                    "download",
                    "separator",
                    "move",
                    "copy",
                    "rename",
                    "separator","delete",
                    // {
                    //     widget: "dxMenu",
                    //     options: {
                    //         items: [
                    //             {
                    //                 text: "Share",
                    //                 icon: "share",
                    //             },
                    //         ],
                    //         onItemClick,
                    //     },
                    //     location: "before",
                    // },
                    "refresh",
                    "clearSelection",
                ],
            },
            onFileUploaded: function (e) {
                loadStorageSummary();
            },
            onItemDeleted: function (e) {
                loadStorageSummary();
            },
            contextMenu: {
                items: [
                    "rename",
                    "move",
                    "copy",
                    "delete",

                    "refresh",
                    "download",
                ],
            },
            customizeDetailColumns: function (columns) {
                columns[1].width = 400;
                columns[3].width = 250;
                columns[3].dataType = "datetime";
                delete columns[4].width;
                columns[4].width = 150;
                columns[4].alignment = "left";
                return columns;
            },

            onSelectedFileOpened(e) {
                const imageFileExtensions = [
                    ".jpg",
                    ".jpeg",
                    ".png",
                    ".gif",
                    ".bmp",
                ];

                // Get the file extension
                const fileExtension =
                    e.file.dataItem.file_extension.toLowerCase();

                if (imageFileExtensions.includes(fileExtension)) {
                    const popup = $("#photo-popup").dxPopup("instance");
                    popup.option({
                        title: e.file.name,
                        contentTemplate: `<img src="${e.file.dataItem.base64Data}" class="photo-popup-image" />`,
                    });
                    popup.show();
                }
            },
            customizeThumbnail(fileSystemItem) {
                if (fileSystemItem.isDirectory) {
                    foldername = fileSystemItem.name.toLowerCase();
                    switch (foldername) {
                        case "shared folder":
                            return "/assets/img/thumbnails/shared_folder.png";
                        case "music":
                            return "/assets/img/thumbnails/music_folder.png";
                        case "image":
                        case "images":
                        case "pictures":
                        case "picture":
                            return "/assets/img/thumbnails/image_folder.png";
                        case "video":
                        case "videos":
                        case "movies":
                        case "movie":
                            return "/assets/img/thumbnails/video_folder.png";
                        case "document":
                        case "documents":
                            return "/assets/img/thumbnails/document_folder.png";
                        case "download":
                        case "downloads":
                            return "/assets/img/thumbnails/download_folder.png";
                        case "archive":
                        case "archives":
                            return "/assets/img/thumbnails/archive_folder.png";
                        case "favorite":
                        case "favorites":
                            return "/assets/img/thumbnails/favorite_folder.png";
                        case "backup":
                        case "backups":
                            return "/assets/img/thumbnails/backup_folder.png";
                        case "stuff":
                        case "stuffs":
                            return "/assets/img/thumbnails/stuff_folder.png";
                        case "font":
                        case "fonts":
                            return "/assets/img/thumbnails/font_folder.png";
                        case "porn":
                        case "porns":
                            return "/assets/img/thumbnails/porn_folder.png";
                        case "js":
                        case "api":
                        case "assets":
                        case "asset":
                        case "css":
                            return "/assets/img/thumbnails/code_folder.png";
                        case "htdocs":
                        case "website":
                        case "websites":
                        case "web programming":
                        case "collection web":
                        case "web":
                            return "/assets/img/thumbnails/website_folder.png";
                        default:
                            return "/assets/img/thumbnails/folder-608.svg";
                    }
                }

                const fileExtension = fileSystemItem
                    .getFileExtension()
                    .toLowerCase();

                switch (fileExtension) {
                    // Images
                    case ".jpg":
                    case ".jpeg":
                    case ".png":

                    case ".bmp":
                    case ".tif":
                    case ".tiff":
                        return "/assets/img/thumbnails/image.png";
                    case ".gif":
                        return "/assets/img/thumbnails/gif.png";
                    // Videos
                    case ".mp4":
                    case ".avi":
                    case ".mkv":
                    case ".mov":
                    case ".wmv":
                    case ".flv":
                    case ".webm":
                        return "/assets/img/thumbnails/video.png";

                    // Music
                    case ".mp3":
                    case ".wav":
                    case ".flac":
                    case ".aac":
                    case ".ogg":
                    case ".wma":
                    case ".m4a":
                        return "/assets/img/thumbnails/music.svg";

                    // Existing cases
                    case ".accdb":
                        return "/assets/img/thumbnails/accdb.svg";
                    case ".csv":
                        return "/assets/img/thumbnails/csv.svg";
                    case ".doc":
                    case ".docx":
                        return "/assets/img/thumbnails/docx.svg";
                    case ".potx":
                        return "/assets/img/thumbnails/potx.svg";
                    case ".ppsx":
                        return "/assets/img/thumbnails/ppsx.svg";
                    case ".pub":
                        return "/assets/img/thumbnails/pub.svg";
                    case ".xlsx":
                        return "/assets/img/thumbnails/xlsx.svg";
                    case ".txt":
                        return "/assets/img/thumbnails/txt.svg";
                    case ".rtf":
                        return "/assets/img/thumbnails/rtf.svg";
                    case ".pdf":
                        return "/assets/img/thumbnails/pdf.svg";
                    case ".ppt":
                    case ".pptx":
                        return "/assets/img/thumbnails/ppt.svg";
                    case ".sql":
                        return "/assets/img/thumbnails/sql.svg";
                    case ".xml":
                        return "/assets/img/thumbnails/xml.svg";
                    case ".zip":
                        return "/assets/img/thumbnails/zip.svg";
                    case ".rar":
                        return "/assets/img/thumbnails/rar.svg";
                    default:
                        return "/assets/img/thumbnails/unknown.svg";
                }
            },
            onDirectoryCreated(e) {
                loadStorageSummary();
            },
            onToolbarItemClick: function(e) {
                if(e.itemData == 'refresh') {
                    loadStorageSummary()
                }
            }
        })
        .dxFileManager("instance");
    $("#photo-popup").dxPopup({
        maxHeight: 600,
        hideOnOutsideClick: true,
        showCloseButton: true,
        onContentReady(e) {
            const $contentElement = e.component.content();
            $contentElement.addClass("photo-popup-content");
        },
    });
    function onItemClick(args) {
        const selectedItems = fileManager.getSelectedItems();
     
        const hasSharedFolder = selectedItems.some(item => 
            item.name === "Shared Folder" || item.path.includes("Shared Folder")
        );
        
        if (hasSharedFolder) {
            // Display error
            displayError("The 'Shared Folder' cannot be shared");
        } else {
            console.log(selectedItems);
            myModal.show();
        }
    }
    
    $('#sharefile_btn').on('click', function () {
        var selectedValues = $('#persons').val();

        console.log(selectedValues);
    
    })
});
