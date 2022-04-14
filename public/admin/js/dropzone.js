$(document).ready(function() {
    Dropzone.autoDiscover = false;
    Dropzone.options.dropzone = {
        maxFilesize: 10,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        uploadMultiple: true,
        timeout: 60000,
        paramName: "file",
        autoProcessQueue: false,
        init: function () {
            let myDropzone = this;
            /* 'submit-dropzone-btn' is the ID of the form submit button */
            document.getElementById("dropzone-btn-submit").addEventListener("click", function (e) {
                    // e.preventDefault();
                    // e.stopPropagation();
                    if (myDropzone.getQueuedFiles().length > 0) {
                        myDropzone.processQueue();
                    } else {
                        myDropzone.uploadFiles([
                            { name: "nofiles", upload: { filename: "nofiles" } },
                        ]); //send empty
                    }
                    //   myDropzone.processQueue();
                });
                const fileName = [];
            this.on("sending", function (file, xhr, formData) {
               console.log(file.fullPath);
                fileName.push(file.name);
                $('input[name="hidden_images[]"]').val(fileName);
                
                formData = new FormData(document.getElementById("dropzone"));
               // formData.append("file", file.name);
            });
        },
        success: function (file, response) {
            
            // console.log(response);
        },
        error: function (file, response) {
            return false;
        },
    };
    
});