<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .remaining-days-warning {
        color: red;
        font-weight: bold;
        margin-top: 5px;
        animation: pulse 1s infinite;
    }
    .highlight {
        color: green;
        font-weight: bold;
    }
    @keyframes pulse {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.5;
            transform: scale(1.1);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    .dropzone .dz-preview-single .dz-preview-img {
        width: 50% !important;
    }

    .signal-button {
        animation: pulse-signal 1.5s infinite;
        border-width: 2px; /* Pour rendre le contour plus visible */
        font-weight: bold;
    }

    @keyframes pulse-signal {
        0% {
            transform: scale(1);
            box-shadow: 0 0 5px;
        }
        50% {
            transform: scale(1.1);
            box-shadow: 0 0 15px;
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 5px;
        }
    }

</style>
<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-4.png')); ?>);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="<?php echo e(isset($active_adhesion) ? 'col-lg-6' : 'col-lg-8'); ?>">
                <h3><?php echo e(Auth::user()->club->nom); ?></h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les
                    analyses sur cette page.</p>
            </div>
            
          
                <?php if(isset($active_adhesion)): ?>
                    <div class="col-lg-6 d-flex justify-content-end align-items-center flex-wrap">
                        
                        <a href="<?php echo e(route('autorisation.plonge', Auth::user()->club_id)); ?>" class="btn btn-primary" target="__blank"><i class="bi bi-file-earmark-arrow-down-fill"></i> Autorisation de plongée</a>
                        &nbsp;&nbsp;
                        <a href="<?php echo e(route('attestation.affiliation', Auth::user()->club_id)); ?>" class="btn btn-primary" target="__blank"><i class="bi bi-file-earmark-arrow-down-fill"></i> Attestation d'affiliation</a>
                    </div>
              
                <?php elseif(empty($active_adhesion)): ?>
                    <div class="col-lg-4 d-flex justify-content-end align-items-center flex-wrap">
                        <a class="btn btn-danger signal-button" data-bs-toggle="modal" data-bs-target="#adhesionModal">
                            Demande d'adhésion
                        </a>
                    </div>
            
                <?php endif; ?>
            
        </div>
    </div>
</div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row flex-between-center g-card">
                            <div class="col-auto">
                                <h6 class="mb-0">Report for this week</h6>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 me-3 shadow-none"
                                    id="echart-bar-report-for-this-week-option-1"> <span
                                        class="fas fa-circle text-primary fs--2 me-1"></span> <span class="text">This
                                        Week </span></div>
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none"
                                    id="echart-bar-report-for-this-week-option-2"> <span
                                        class="fas fa-circle text-300 fs--2 me-1"></span> <span class="text">Last
                                        Week</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/report-for-this-week.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-bar-report-for-this-week" data-echart-responsive="true"
                            data-chart="{&quot;option1&quot;:&quot;echart-bar-report-for-this-week-option-1&quot;,&quot;option2&quot;:&quot;echart-bar-report-for-this-week-option-2&quot;}"
                            style="user-select: none; position: relative;" _echarts_instance_="ec_1667649206497">
                            <div
                                style="position: relative; width: 818px; height: 295px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 818px; height: 295px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="1227" height="442"></canvas>
                            </div>
                            <div class=""></div>
                        </div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                            href="#!">Voir
                            tout projects
                            <span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Adhesion -->
<div class="modal fade" id="adhesionModal" tabindex="-1" aria-labelledby="adhesionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adhesionModalLabel">Formulaire de demande d'adhésion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulaire -->
               
                
                <form action="/upload" class="dropzone" id="my-dropzone">
                    <div class="dz-message">
                        Glissez-déposez ou cliquez pour télécharger l'attestation de paiement (PDF, image).
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="demandeAdhesion(<?php echo e(Auth::user()->club->id); ?>)">Envoyer</button>
            </div>
        </div>
    </div>
</div>

<div id="notification"></div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src=<?php echo e(asset('dashboard/vendors/inputmask/inputmask.min.js')); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

<script>
     // Configuration de Dropzone
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "/club/demande-adhesion",  // URL pour l'upload
        paramName: "file",  // Nom du paramètre pour l'envoi du fichier
        maxFilesize: 3,  // Taille max du fichier (en Mo)
        maxFiles: 1,  // Limiter à un seul fichier
        acceptedFiles: ".jpg,.jpeg,.png,.gif,.pdf",  // Types de fichiers acceptés
        addRemoveLinks: true,  // Permet d'ajouter des liens de suppression
    
        init: function () {
                this.on("maxfilesexceeded", function (file) {
                    this.removeAllFiles(); // Supprimer le fichier précédent
                    this.addFile(file); // Ajouter le nouveau fichier
                });

                this.on("thumbnail", function (file) {
                    if (!file.type.startsWith("image/")) {
                        // Remplacer l'aperçu par une icône ou une image de dossier
                        file.previewElement.querySelector("img").src = "<?php echo e(asset('assets/img/image-file-2.png')); ?>"; // Remplacez par le chemin de votre icône de dossier
                    }
                });

                this.on("removedfile", function (file) {
                    console.log("Fichier supprimé : ", file.name);
                    // Ajoutez ici une requête pour supprimer le fichier côté serveur si nécessaire
                });

                this.on("success", function (file, response) {
                    console.log("Fichier téléchargé avec succès : ", response);
                });

                this.on("error", function (file, errorMessage) {
                    console.error("Erreur lors du téléchargement : ", errorMessage);
                });
            }
    
    });

  // Supprimer tous les fichiers
  document.getElementById('remove-all-files').addEventListener('click', function() {
    myDropzone.removeAllFiles(true);  // true pour forcer la suppression du fichier du DOM
    console.log("Tous les fichiers ont été supprimés.");
  });


    async function demandeAdhesion(id) {
        try {
            const files = myDropzone.getAcceptedFiles();
            
            let formData = new FormData();
            formData.append("document", files[0]);

            const res = await axios.post(`/club/demande-adhesion/${id}`, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            });

            if (res.status === 200) {
                const notif = `
                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                <strong class="me-auto">FRMPAS</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                ${res.data.message}
                            </div>
                        </div>
                    </div>`;
                document.getElementById("notification").innerHTML = notif;

                const toastLiveExample = document.getElementById('liveToast');
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
            }
        } catch (err) {
            const notif = `
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur survenue lors de l'envoi de la demande.
                        </div>
                    </div>
                </div>`;
            document.getElementById("notification").innerHTML = notif;

            const toastLiveExample = document.getElementById('liveToast');
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('clubDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\frmpas\resources\views/clubDash/pages/home.blade.php ENDPATH**/ ?>