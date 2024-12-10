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
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/dashboard/pages/home.blade.php ENDPATH**/ ?>