<?php $__env->startSection('title'); ?>
<title>FRMPAS - Tableau de bord</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-body d-flex">
        <div>
            <img class="rounded" src="<?php echo e($me->image); ?>" alt="" width="100">
        </div>
        <div class="ps-3">
            <h3 class="text-primary">Bonjour </h3>
            <span class="lead d-block"><?php echo e($me->nom . ' ' . $me->prenom); ?></span>
            <span><?php echo e($me->email); ?></span>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-1.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Club Actif</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning">
                                    <?php echo e($clubsActifs); ?>

                                </div><a class="fw-semi-bold fs--1 text-nowrap"
                                    href="../app/e-commerce/customers.html">Voir tout<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-2.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Club Inactif</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info">
                                    <?php echo e($clubsInactifs); ?>

                                </div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-5.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Nombre de plongeurs</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info">
                                    <?php echo e($nombrePlongeurs); ?>

                                </div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-v-right ms-1" data-fa-transform="down-1"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-7.png')); ?>);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Nombre d'athlètes</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info">
                                    <?php echo e($nombreAthletes); ?>

                                </div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Niveaux</h6>
                        <div class="row fs--2 mt-3">
                            <div class="col-6">
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span
                                            class="fw-semi-bold">Niveau 1 (<?php echo e($countNiveau1Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau1Plongeur); ?></div>
                                    <input id="countNiveau1Plongeur" hidden="true" value="<?php echo e($countNiveau1Plongeur); ?>">
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-info"></span><span
                                            class="fw-semi-bold">Niveau 2 (<?php echo e($countNiveau2Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau2Plongeur); ?></div>
                                    <input id="countNiveau2Plongeur" hidden="true" value="<?php echo e($countNiveau2Plongeur); ?>">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-400"></span><span
                                            class="fw-semi-bold">Niveau 3 (<?php echo e($countNiveau3Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau3Plongeur); ?></div>
                                    <input id="countNiveau3Plongeur" hidden="true" value="<?php echo e($countNiveau3Plongeur); ?>">
                                </div>
                                <div class="d-flex flex-between-center mb-1">
                                    <div class="d-flex align-items-center"><span class="dot bg-success"></span><span
                                            class="fw-semi-bold">Niveau 4 (<?php echo e($countNiveau4Plongeur); ?>)</span></div>
                                    <div class="d-xxl-none"><?php echo e($countNiveau4Plongeur); ?></div>
                                    <input id="countNiveau4Plongeur" hidden="true" value="<?php echo e($countNiveau4Plongeur); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body d-flex flex-column justify-content-end">
                <h6 class="mb-0 mt-2">Total de plongeurs</h6>
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">
                            <?php echo e($countEnfantPlongeur +$countFemmePlongeur+$countHommePlongeur); ?></div>

                    </div>
                    <div class="col-auto ps-0 mt-n4">
                        <div class="echart-default-total-order"
                            data-echarts="{&quot;tooltip&quot;:{&quot;trigger&quot;:&quot;axis&quot;,&quot;formatter&quot;:&quot;{b0} : {c0}&quot;},&quot;xAxis&quot;:{&quot;data&quot;:[&quot;Week 4&quot;,&quot;Week 5&quot;,&quot;Week 6&quot;,&quot;Week 7&quot;]},&quot;series&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:[20,40,100,120],&quot;smooth&quot;:true,&quot;lineStyle&quot;:{&quot;width&quot;:3}}],&quot;grid&quot;:{&quot;bottom&quot;:&quot;2%&quot;,&quot;top&quot;:&quot;2%&quot;,&quot;right&quot;:&quot;10px&quot;,&quot;left&quot;:&quot;10px&quot;}}"
                            data-echart-responsive="true" style="user-select: none; position: relative;"
                            _echarts_instance_="ec_1687540493040">
                            <div
                                style="position: relative; width: 138px; height: 90px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 138px; height: 90px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="138" height="90"></canvas>
                            </div>
                            <div class=""
                                style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px Microsoft YaHei; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(-38px, 26px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;">
                                Week 4 : 20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-body">
                <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                        <h6 class="mt-1">Genre plongeur</h6>
                        <div class="fs--2 mt-3">
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span
                                        class="fw-semi-bold">Homme (<?php echo e($countHommePlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countHommePlongeur); ?></div>
                                <input id="countHommePlongeur" hidden="true" value="<?php echo e($countHommePlongeur); ?>">
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-info"></span><span
                                        class="fw-semi-bold">Femme (<?php echo e($countFemmePlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countFemmePlongeur); ?></div>
                                <input id="countFemmePlongeur" hidden="true" value="<?php echo e($countFemmePlongeur); ?>">
                            </div>
                            <div class="d-flex flex-between-center mb-1">
                                <div class="d-flex align-items-center"><span class="dot bg-300"></span><span
                                        class="fw-semi-bold">Enfant (<?php echo e($countEnfantPlongeur); ?>)</span></div>
                                <div class="d-xxl-none"><?php echo e($countEnfantPlongeur); ?></div>
                                <input id="countEnfantPlongeur" hidden="true" value="<?php echo e($countEnfantPlongeur); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto position-relative">
                        <div class="echart-market-share" style="user-select: none; position: relative;"
                            _echarts_instance_="ec_1687540493036">
                            <div
                                style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px;">
                                <canvas
                                    style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                    data-zr-dom-id="zr_0" width="106" height="106"></canvas>
                            </div>
                            <div class=""></div>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">
                            <?php echo e($countEnfantPlongeur +$countFemmePlongeur+$countHommePlongeur); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card h-md-100">
            <div class="card-header d-flex flex-between-center pb-0">
                <h6 class="mb-0">Météo</h6>
            </div>
            <div class="card-body pt-2">
                <div class="row g-0 h-100 align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center"><img class="me-3"
                                src=<?php echo e(asset("dashboard/img/icons/weather-icon.png")); ?> alt="" height="60">
                            <div>
                                <h6 class="mb-2">Casablanca</h6>
                                <div class="fs--2 fw-semi-bold">
                                    <div class="text-warning">Ensoleillée</div>Precipitation: 50%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto text-center ps-2">
                        <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31°</div>
                        <div class="fs--1 text-800">32° / 25°</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\frmpas\resources\views/dashboard/pages/home.blade.php ENDPATH**/ ?>