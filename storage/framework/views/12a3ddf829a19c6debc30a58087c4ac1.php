

<?php $__env->startSection('title'); ?>
    <title>FRMPAS - Cours</title>
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
                    <h3>Carnets de plongée</h3>
                    <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
                </div>
                <div class="col-lg-4 d-flex justify-content-end align-items-center">
                    <a href="<?php echo e(route('carnet_plongee.create')); ?>" role="button" class="btn btn-outline-primary">
                        <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h5 class="mb-0">Details Carnet de plongée</h5>
                </div>

            </div>
        </div>
        <div class="card-body bg-light border-top">
            <div class="row">
                <div class="col-lg col-xxl-4">
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">N°</p>
                        </div>
                        <div class="col">: <?php echo e($carnet_plongee->id); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Lieu</p>
                        </div>
                        <div class="col">: <?php echo e($carnet_plongee->lieu); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Directeur</p>
                        </div>
                        <div class="col">:
                            <?php echo e($carnet_plongee->directeur->nom . ' ' . $carnet_plongee->directeur->prenom); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Instructeur</p>
                        </div>
                        <div class="col">:
                            <?php echo e($carnet_plongee->instructeur->nom . ' ' . $carnet_plongee->instructeur->prenom); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Site</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->site); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">T eau</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->t_eau); ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg col-xxl-4">
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Plongee</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->plongee); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Cree par</p>
                        </div>
                        <div class="col">: <?php echo e($carnet_plongee->createur->nom . ' ' . $carnet_plongee->createur->prenom); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Cree le</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->created_at); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Support</p>
                        </div>
                        <div class="col">: <?php echo e($carnet_plongee->support); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Table</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->table); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Profondeur</p>
                        </div>
                        <div class="col"> : <?php echo e($carnet_plongee->profondeur); ?></div>
                    </div>

                </div>
                <div class="col-lg col-xxl-4">

                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Courant</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->courant); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Temps</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->temps); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Visibilite</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->visibilite); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Mer</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->mer); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <p class="fw-semi-bold mb-1">Dt</p>
                        </div>
                        <div class="col">
                            : <?php echo e($carnet_plongee->dt); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <div class="card-header position-relative">
            <div class="d-flex justify-content-end align-items-center">
                <a role="button" class="btn btn-outline-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#modalPlongeur">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter un plongeur
                </a>
                <a role="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalEquipe">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter une equipe
                </a>
            </div>
            <div class="modal fade" id="modalEquipe" tabindex="-1" role="dialog" aria-labelledby="modalEquipe"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEquipe">
                                Ajouter une équipe
                            </h5>
                            <button type="button"
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label" for="nom_equipe">Equipe</label>
                                    <input class="form-control" id="nom_equipe" />
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label" for="secours_equipe">Secours</label>
                                    <input class="form-control" id="secours_equipe" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="colseModalEquipe"
                                data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary"
                                onclick="addEquipe(<?php echo e($carnet_plongee->id); ?>)" id="liveToastBtn">
                                <i class="far fa-save me-1"></i>Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-xl fade" id="modalPlongeur" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalPlongeur" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalPlongeur">
                                Ajouter un plongeur
                            </h5>
                            <button type="button"
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-lg-3">
                                    <label for="plongeur">Plongeur</label>
                                    <select class="form-select js-choice" id="plongeur" size="1" name="plongeur"
                                        data-options='{"removeItemButton":true,"placeholder":true}'>
                                        <option value="">Choisissez le plongeur</option>
                                        <?php $__currentLoopData = $plongeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plongeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($plongeur->id); ?>">
                                                <?php echo e($plongeur->nom . ' ' . $plongeur->prenom); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="directeur">Equipe</label>
                                    <select class="form-select js-choice" id="equipe" size="1" name="equipe"
                                        data-options='{"removeItemButton":true,"placeholder":true}'>
                                        <option value="">Choisissez l'équipe</option>
                                        <?php $__currentLoopData = $equipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($equipe->id); ?>">
                                                <?php echo e($equipe->nom); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="heure_depart">Heure départ</label>
                                    <input class="form-control datetimepicker" id="heure_depart" type="text"
                                        placeholder="H:i"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="heure_sortie">Heure sortie</label>
                                    <input class="form-control datetimepicker" id="heure_sortie" type="text"
                                        placeholder="H:i"
                                        data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="profondeur">Profondeur (m)</label>
                                    <input class="form-control" id="profondeur" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="dt">DT (mn)</label>
                                    <input class="form-control" id="dt" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="p_depart">P départ</label>
                                    <input class="form-control" id="p_depart" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="p_sortie">P sortie</label>
                                    <input class="form-control" id="p_sortie" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="paliers12">Paliers 12</label>
                                    <input class="form-control" id="paliers12" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="paliers9">Paliers 9</label>
                                    <input class="form-control" id="paliers9" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="paliers6">Paliers 6</label>
                                    <input class="form-control" id="paliers6" type="number" />
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="paliers_oxy">Paliers Oxy</label>
                                    <select class="form-select js-choice" id="paliers_oxy" size="1"
                                        name="paliers_oxy" data-options='{"removeItemButton":true,"placeholder":true}'>
                                        <option value="">Choisissez</option>
                                        <option value=<?php echo e('Oui'); ?>>Oui</option>
                                        <option value=<?php echo e('Non'); ?>>Non</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label" for="paliers3">Paliers 3</label>
                                    <input class="form-control" id="paliers3" type="number" />
                                </div>
                                <div class="col-lg-9">
                                    <label class="form-label" for="observation">Observation</label>
                                    <input class="form-control" id="observation" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="colseModalPlongeur"
                                data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary"
                                onclick="addPlongeur(<?php echo e($carnet_plongee->id); ?>)" id="liveToastBtn"> <i
                                    class="far fa-save me-1"></i>Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <div id="tableExample">
                <div class="table-responsive">
                    <table class="table table-bordered data-table table-striped fs--1 mb-1"
                        data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th style="width: 60px;">ID</th>
                                <th style="min-width: 160px;">Equipe</th>
                                <th style="min-width: 160px;">Plongeur</th>
                                <th style="min-width: 80px;">Heure départ</th>
                                <th style="min-width: 80px;">Heure sortie</th>
                                <th style="min-width: 80px;">Prof (m)</th>
                                <th style="min-width: 80px;">DT (mn)</th>
                                <th style="min-width: 80px;">P départ</th>
                                <th style="min-width: 80px;">P sortie</th>
                                <th style="min-width: 80px;">Pliers 12</th>
                                <th style="min-width: 80px;">Pliers 9</th>
                                <th style="min-width: 80px;">Pliers 6</th>
                                <th style="min-width: 80px;">Pliers Oxy</th>
                                <th style="min-width: 80px;">Pliers 3</th>
                                <th style="min-width: 80px;">Observation</th>
                                <th style="min-width: 80px;">Crée par</th>
                                <th style="width: 60px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="tablePlongeurs">
                            <?php $__currentLoopData = $equipePlongeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr id="row<?php echo e($item->id); ?>">
                                    <td class="text-center align-middle"><?php echo e($item->id); ?></td>
                                    <td class="align-middle"><?php echo e($item->equipe->nom); ?></td>
                                    <td class="align-middle"><?php echo e($item->plongeur->nom . ' ' . $item->plongeur->prenom); ?>

                                    </td>
                                    <td class="align-middle"><?php echo e($item->heure_depart); ?></td>
                                    <td class="align-middle"><?php echo e($item->heure_sortie); ?></td>
                                    <td class="align-middle"><?php echo e($item->prof_m); ?></td>
                                    <td class="align-middle"><?php echo e($item->dt_mn); ?></td>
                                    <td class="align-middle"><?php echo e($item->p_depart); ?></td>
                                    <td class="align-middle"><?php echo e($item->p_sortie); ?></td>
                                    <td class="align-middle"><?php echo e($item->paliere_12); ?></td>
                                    <td class="align-middle"><?php echo e($item->paliere_9); ?></td>
                                    <td class="align-middle"><?php echo e($item->paliere_6); ?></td>
                                    <td class="align-middle"><?php echo e($item->paliere_oxy); ?></td>
                                    <td class="align-middle"><?php echo e($item->paliere_3); ?></td>
                                    <td class="align-middle"><?php echo e($item->observation); ?></td>
                                    <td class="align-middle"><?php echo e($item->createur->nom . ' ' . $item->createur->prenom); ?>

                                    </td>
                                    <td class="align-middle">
                                        <div class="dropdown font-sans-serif position-static">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                                type="button" id="order-dropdown-0" data-bs-toggle="dropdown"
                                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg
                                                    class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="ellipsis-h"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-0"
                                                aria-labelledby="order-dropdown-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item text-danger" role="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop<?php echo e($item->id); ?>">Supprimer</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="staticBackdrop<?php echo e($item->id); ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                                            Vous voulez supprimer cette ligne
                                                        </h5>

                                                        <button type="button"
                                                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            id="colseModal<?php echo e($item->id); ?>"
                                                            data-bs-dismiss="modal">Non</button>
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="deletePlongeur(<?php echo e($item->id); ?>)"
                                                            id="btn-confirmation-delete">Oui</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="notification"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src=<?php echo e(asset('dashboard/vendors/choices/choices.min.js')); ?>></script>
    <script>
        async function addEquipe(id) {
            try {
                const btnClose = document.getElementById(`colseModalEquipe`);
                btnClose.click();
                const nom_equipe = document.getElementById("nom_equipe").value;
                const secours_equipe = document.getElementById("secours_equipe").value;
                const response = await axios.post(`/dashboard/carnet-plongee/${id}/equipes/ajouter`, {
                    nom: nom_equipe,
                    secours: secours_equipe
                });
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${response.data.message}
                                </div>
                            </div>
                        </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    location.reload();
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
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
                const toastTrigger = document.getElementById('liveToastBtn')
                const toastLiveExample = document.getElementById('liveToast')
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }
        };
        async function addPlongeur(id) {
            try {
                const btnClose = document.getElementById(`colseModalPlongeur`);
                btnClose.click();
                const plongeur = document.getElementById("plongeur").value;
                const equipe = document.getElementById("equipe").value;
                const heure_depart = document.getElementById("heure_depart").value;
                const heure_sortie = document.getElementById("heure_sortie").value;
                const profondeur = document.getElementById("profondeur").value;
                const dt = document.getElementById("dt").value;
                const p_depart = document.getElementById("p_depart").value;
                const p_sortie = document.getElementById("p_sortie").value;
                const paliers12 = document.getElementById("paliers12").value;
                const paliers9 = document.getElementById("paliers9").value;
                const paliers6 = document.getElementById("paliers6").value;
                const paliers_oxy = document.getElementById("paliers_oxy").value;
                const paliers3 = document.getElementById("paliers3").value;
                const observation = document.getElementById("observation").value;
                const response = await axios.post(`/dashboard/carnet-plongee/${id}/plongeur/ajouter`, {
                    plongeur,
                    equipe,
                    heure_depart,
                    heure_sortie,
                    profondeur,
                    dt,
                    p_depart,
                    p_sortie,
                    paliers12,
                    paliers9,
                    paliers6,
                    paliers_oxy,
                    paliers3,
                    observation
                });
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${response.data.message}
                                </div>
                            </div>
                        </div>`;
                    const notElement = document.getElementById("notification");
                    const tablePlongeurs = document.getElementById("tablePlongeurs");

                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    location.reload();
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
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
                const toastTrigger = document.getElementById('liveToastBtn')
                const toastLiveExample = document.getElementById('liveToast')
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }
        };
        async function deletePlongeur(id) {
            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/carnet-plongee/plongeur/${id}`);
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                   ${response.data.message}
                                </div>
                            </div>
                        </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('btn-confirmation-delete')
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                    const rowElement = document.getElementById(`row${id}`);
                    rowElement.remove();
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
                const toastTrigger = document.getElementById('btn-confirmation-delete');
                const toastLiveExample = document.getElementById('liveToast');
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/dashboard/pages/equipe/index.blade.php ENDPATH**/ ?>