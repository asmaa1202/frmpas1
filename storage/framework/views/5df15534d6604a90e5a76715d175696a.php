

<?php $__env->startSection('title'); ?>
    <title>FRMPAS - Formations plongeur</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
             style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Formations de <?php echo e($plongeur->nom); ?> <?php echo e($plongeur->prenom); ?></h3>
                    <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
                </div>
                <div class="col-lg-3 justify-content-end align-items-center">
                    <select class="form-select js-choice" id="niveau" size="1" name="niveau"
                            data-options='{"removeItemButton":true,"placeholder":true}' onchange="handleChangeNiveau(<?php echo e($plongeur->id); ?>)">
                        <option value="">Choisissez niveau</option>
                        <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($niveau->id); ?>

                                    <?php echo e($niveau->id == request()->id_niveau ? 'selected' : ''); ?>>
                                <?php echo e($niveau->label); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id="notification"></div>

    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
             style="background-image:url(<?php echo e(asset('img/icons/spot-illustrations/corner-4.png')); ?>);">
        </div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <div class="card-body tab-pane p-0 active show" id="tickets" role="tabpanel" aria-labelledby="contact-tickets-tab">
                <div class="bg-light d-flex flex-column gap-3 p-x1">
                    <?php $__currentLoopData = $exercices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exercice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm d-md-flex d-xl-inline-block d-xxl-flex align-items-center">
                        <div>
                            <div style="display: flex;align-items: center;">
                                <?php if($exercice->obligatoire === 1): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#04731b" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                </svg>
                                <?php endif; ?>
                            <span class="fs-1 fw-semi-bold ps-1" style="color: #2c7be5;"><?php echo e($exercice->label); ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-3 text-800" ><?php echo e($exercice->cree_le); ?></h6>
                                <?php if($exercice->validee === 1): ?>
                                    <small class="badge rounded badge-subtle-success false">Validée</small>
                                <?php elseif($exercice->validee === 0): ?>
                                    <small class="badge rounded badge-subtle-danger false">Refusée</small>
                                <?php else: ?>
                                    <small class="badge rounded badge-subtle-secondary false">En cours de validation ...</small>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="border-bottom mt-4 mb-x1"></div>
                        <div class="ms-auto">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex gap-2 ms-md-4 ms-xl-0 ms-xxl-4 flex-column">
                                <h6 class="fw-normal">Encadré par
                                   <span style="font-weight: 600"><?php echo e($exercice->encadrant); ?></span>
                                </h6>
                                <?php if($exercice->validee ===1): ?>
                                    <div>
                                        <h6 class="fw-normal">Validé par
                                            <span style="font-weight: 600"><?php echo e($exercice->validateur); ?></span>
                                        </h6>
                                    </div>
                                <?php endif; ?>
                                    <?php if($exercice->validee ===0): ?>
                                        <div>
                                            <h6 class="fw-normal">Refusé par
                                                <span style="font-weight: 600"><?php echo e($exercice->validateur); ?></span>
                                            </h6>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($exercice->validee !== 1 && $exercice->validee !== 0): ?>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#modalValidate<?php echo e($exercice->id); ?><?php echo e($exercice->id_calendrier); ?>" >Valider</button>
                                    <div class="modal fade" id="modalValidate<?php echo e($exercice->id); ?><?php echo e($exercice->id_calendrier); ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        Vous souhaitez valider cette formation ?
                                                    </h5>

                                                    <button type="button"
                                                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Non</button>
                                                    <button type="button" class="btn btn-primary" onclick="handleValidate(<?php echo e($exercice->id); ?>, <?php echo e(request()->id_plongeur); ?>, <?php echo e($exercice->id_calendrier); ?>)">Oui</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalRejecte<?php echo e($exercice->id); ?><?php echo e($exercice->id_calendrier); ?>">Refuser</button>
                                    <div class="modal fade" id="modalRejecte<?php echo e($exercice->id); ?><?php echo e($exercice->id_calendrier); ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        Vous souhaitez refuser cette formation ?
                                                    </h5>
                                                    <button type="button"
                                                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                             data-bs-dismiss="modal">Non</button>
                                                    <button type="button" class="btn btn-primary" onclick="handleReject(<?php echo e($exercice->id); ?>, <?php echo e(request()->id_plongeur); ?>, <?php echo e($exercice->id_calendrier); ?>)">Oui</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src=<?php echo e(asset('dashboard/vendors/choices/choices.min.js')); ?>></script>

    <script>
        const handleChangeNiveau = (id_plongeur) => {
            const niveau = document.getElementById("niveau").value;
            if(niveau == 1) {
                window.location = `/dashboard/plongeurs/${id_plongeur}/formations/niveau/1`;
            } else if(niveau == 2) {
                window.location = `/dashboard/plongeurs/${id_plongeur}/formations/niveau/2`;
            } else if(niveau == 3) {
                window.location = `/dashboard/plongeurs/${id_plongeur}/formations/niveau/3`;
            } else if(niveau == 4) {
                window.location = `/dashboard/plongeurs/${id_plongeur}/formations/niveau/4`;
            }
        }

        const handleValidate = async (exercice, plongeur, calendrier) => {
            try {
                await axios.post(`/dashboard/plongeurs/${plongeur}/formations/validate`,
                    {exercice, plongeur, calendrier});
                document.location.reload();
            } catch (err) {
                console.log(err);
            }
        }
        const handleReject = async (exercice, plongeur, calendrier) => {
            try {
                await axios.post(`/dashboard/plongeurs/${plongeur}/formations/reject`,
                    { exercice, plongeur, calendrier });
                document.location.reload();
            } catch(err) {
                console.log(err);
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/dashboard/pages/plongeur/formations.blade.php ENDPATH**/ ?>