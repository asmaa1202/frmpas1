
<?php $__env->startSection('title'); ?>
    <title>FRMPAS - Ajouter exercice</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Ajouter une exercice</h3>
                    <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
                </div>
                <div class="col-lg-4 d-flex justify-content-end align-items-center">
                    <button class="btn btn-primary me-3" onclick="addFormations()" id="liveToastBtn">
                        <i class="far fa-save me-1"></i>
                        Enregistrer
                    </button>
                    <a href="<?php echo e(route('exercices.index')); ?>" role="button" class="btn btn-outline-primary">
                        <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row gx-2">
                        <label for="obligatoire">Obligatoire :</label>
                        <div class="ps-2 mt-0 mb-3 d-flex">
                            <div class="form-check mb-0 mr-3 lh-1 me-3">
                                <input class="form-check-input obligatoire" type="radio" value="Oui" name="obligatoire"
                                       id="oui" />
                                <label class="form-check-label mb-0" for="oui">Oui</label>
                            </div>
                            <div class="form-check mb-0 lh-1">
                                <input class="form-check-input obligatoire" type="radio" value="Non" name="obligatoire"
                                       id="non" checked="checked" />
                                <label class="form-check-label mb-0" for="non">Non</label>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label" for="label">Label :</label>
                            <input class="form-control" id="label" type="text" />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="niveau">Niveau :</label>
                            <select class="form-select js-choice" id="niveau" size="1" name="niveau"
                                data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                                <option value="">Choisissez le niveau</option>
                                <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($niveau->id); ?>"><?php echo e($niveau->label); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">Vous avez presque fini!</h5>
                </div>
                <div class="col-auto">
                    <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Annuler</button>
                    <button class="btn btn-primary me-3" onclick="addExercice()" id="liveToastBtn">
                        <i class="far fa-save me-1"></i>
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="notification"></div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('javascript'); ?>
    <script src=<?php echo e(asset('dashboard/vendors/choices/choices.min.js')); ?>></script>
    <script>
        async function addExercice() {
            try {
                const obligatoire = document.querySelector(".obligatoire:checked").value;
                const label = document.getElementById("label").value;
                const niveau = document.getElementById("niveau").value;

                const res = await axios.post('/dashboard/exercices', {
                    obligatoire: obligatoire === "Oui" ? 1 : 0,
                    label,
                    id_niveau: niveau
                });
                if (res.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${res.data.message}
                                </div>
                            </div>
                        </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                    document.querySelector(".obligatoire:checked").value = "Non";
                    document.getElementById("label").value = "";
                    document.getElementById("niveau").value = "";
                }

            } catch (err) {
                const notif =
                    `<div class="toast-container position-fixed bottom-0 end-0 p-3">
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
                const toastTrigger = document.getElementById('liveToastBtn');
                const toastLiveExample = document.getElementById('liveToast');
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/dashboard/pages/exercices/ajouter.blade.php ENDPATH**/ ?>