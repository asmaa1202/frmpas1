function initLargeUpload(url, progressTarget) {
    var progressElement =
        '<div class="resumable-progress">\n' +
        "        <table>\n" +
        "            <tr>\n" +
        '                <td width="100%"><div class="progress-container"><div class="progress-bar"></div></div></td>\n' +
        '                <td class="progress-text" nowrap="nowrap"></td>\n' +
        '                <td class="progress-pause" nowrap="nowrap">\n' +
        '                    <a href="#" onclick="r.upload(); return(false);" class="progress-resume-link"><img src="/resume.png" title="Resume upload" /></a>\n' +
        '                    <a href="#" onclick="r.pause(); return(false);" class="progress-pause-link"><img src="/pause.png" title="Pause upload" /></a>\n' +
        "                </td>\n" +
        "            </tr>\n" +
        "        </table>\n" +
        "    </div>";
    progressTarget.append(progressElement);

    var r = new Resumable({
        target: url,
        query: {
            _token: (Math.random() + 1).toString(36).substring(7),
            nom: document.getElementById("nom").value,
            niveau: document.getElementById("niveau").value,
        },
        chunkSize: 10 * 1024 * 1024,
        simultaneousUploads: 4,
        testChunks: false,
        throttleProgressCallbacks: 1,
        method: "post",
        // testMethod: "post",
    });
    // Resumable.js isn't supported, fall back on a different method
    if (!r.support) {
        handleUploadError(500, "Your browser, unfortunately, is not supported");
        // $('.resumable-error').show();
    } else {
        // Show a place for dropping/selecting files
        $(".resumable-drop").show();
        r.assignDrop($(".resumable-drop")[0]);
        r.assignBrowse($(".resumable-browse")[0]);

        // Handle file add event
        r.on("fileAdded", function (file) {
            // Show progress pabr
            $(".resumable-progress, .resumable-list").show();
            // Show pause, hide resume
            $(".resumable-progress .progress-resume-link").hide();
            $(".resumable-progress .progress-pause-link").show();
            // Add the file to the list
            $(".resumable-list").append(
                '<li class="resumable-file-' +
                    file.uniqueIdentifier +
                    '">Uploading <span class="resumable-file-name"></span> <span class="resumable-file-progress"></span>'
            );
            $(
                ".resumable-file-" +
                    file.uniqueIdentifier +
                    " .resumable-file-name"
            ).html(file.fileName);
        });
        $("#liveToastBtn").click(function () {
            // Actually start the upload
            r.upload();
        });
        r.on("pause", function () {
            // Show resume, hide pause
            $(".resumable-progress .progress-resume-link").show();
            $(".resumable-progress .progress-pause-link").hide();
        });
        r.on("uploadStart", function () {
            // Show resume, hide pause
            $(".resumable-progress .progress-resume-link").hide();
            $(".resumable-progress .progress-pause-link").show();
        });
        r.on("complete", async function () {
            // Hide pause/resume when the upload has completed

            $(
                ".resumable-progress .progress-resume-link, .resumable-progress .progress-pause-link"
            ).hide();
        });
        r.on("fileSuccess", function (file, message) {
            // Reflect that the file upload has completed

            $(
                ".resumable-file-" +
                    file.uniqueIdentifier +
                    " .resumable-file-progress"
            ).html("(completed)");
            const notif = `<div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                    <strong class="me-auto">ASAAM</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Cours est ajouter aves success
                </div>
            </div>
        </div>`;
            const notElement = document.getElementById("notification");
            notElement.innerHTML = notif;
            const toastTrigger = document.getElementById("liveToastBtn");
            const toastLiveExample = document.getElementById("liveToast");
            if (toastTrigger) {
                const toastBootstrap =
                    bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
            }
            document.getElementById("nom").value = "";
            document.getElementById("niveau").value = "";
        });
        r.on("fileError", function (file, message) {
            // Reflect that the file upload has resulted in error
            $(
                ".resumable-file-" +
                    file.uniqueIdentifier +
                    " .resumable-file-progress"
            ).html("(file could not be uploaded: " + message + ")");
            const notif = `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">ASAAM</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur servenu
                        </div>
                    </div>
                </div>`;
            const notElement = document.getElementById("notification");
            notElement.innerHTML = notif;
            const toastTrigger = document.getElementById("liveToastBtn");
            const toastLiveExample = document.getElementById("liveToast");
            if (toastTrigger) {
                const toastBootstrap =
                    bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
            }
        });
        r.on("fileProgress", function (file) {
            console.log(file);
            // Handle progress for both the file and the overall upload
            var uploadedSize = file.progress() * file.size;
            if (uploadedSize > 1024 && uploadedSize < 1024 * 1024) {
                uploadedSize = (uploadedSize / 1024).toFixed(2) + "KB";
            } else if (
                uploadedSize > 1024 * 1024 &&
                uploadedSize < 1024 * 1024 * 1024
            )
                uploadedSize = (uploadedSize / (1024 * 1024)).toFixed(2) + "MB";
            else
                uploadedSize =
                    (uploadedSize / (1024 * 1024 * 1024)).toFixed(2) + "GB";
            $(
                ".resumable-file-" +
                    file.uniqueIdentifier +
                    " .resumable-file-progress"
            ).html(
                Math.floor(file.progress() * 100) +
                    "% UploadedSize : " +
                    uploadedSize
            );
            $(".progress-bar").css({
                width: Math.floor(r.progress() * 100) + "%",
            });
        });
    }
}

function handleUploadError(error, message) {
    Swal.fire(error, message, "error").then(() => {
        location.reload();
    });
}
