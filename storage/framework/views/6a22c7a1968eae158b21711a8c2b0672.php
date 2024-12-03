<?php $__env->startSection('title'); ?>
<title>FRMPAS - Clubs</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href=<?php echo e(asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.css')); ?> rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-4.png')); ?>);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Clubs</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-4.png')); ?>);">
    </div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="table-responsive">
            <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "<?php echo e(asset('dashboard/vendors/datatables.net/fr-FR.json')); ?>"
                    }}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th style="min-width: 20px;">ID</th>
                        <th style="min-width: 200px;">Nom</th>
                        <th style="min-width: 280px;">E-mail</th>
                        <th style="min-width: 180px;">Ville</th>
                        <th style="min-width: 180px;">Crée le</th>
                        <th style="width: 80px;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr id="row1">
                        <td class="align-middle text-center">1</td>
                        <td class="align-middle white-space-nowrap py-2">
                            <div class="d-flex d-flex align-items-center">
                                <div class="avatar avatar-xl me-2">
                                    <img class="rounded-circle" src=<?php echo e("https://asaam.ma/images/logo2.png"); ?>

                                        alt=<?php echo e("Asaam"); ?>>
                                </div>
                                <div class="flex-1">
                                    <p class="mb-0 fs--1">Association Sports Actions Aventures MAROC (ASAAM)</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">asaam@asaam.ma</td>
                        <td class="align-middle">Casablanca</td>
                        <td class="align-middle">2020-06-21</td>
                        <td class="py-2 align-middle white-space-nowrap text-center">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><svg
                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="order-dropdown-0">
                                    <div class="py-2">
                                        <a class="dropdown-item"
                                            href="">Modifier</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1">Supprimer</a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="staticBackdrop1" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                id="colseModal1" data-bs-dismiss="modal">Non</button>
                                            <button type="button" class="btn btn-primary" id="liveToastBtn"
                                                onclick="deleteUser(1)">Oui</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev">
                <span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
        </div>
    </div>
</div>
<div id="notification"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src=<?php echo e(asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js')); ?>></script>
<script src=<?php echo e(asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js')); ?>></script>
<script src=<?php echo e(asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js')); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\FRMPAS\resources\views/dashboard/pages/club.blade.php ENDPATH**/ ?>