<?php $__env->startSection('title'); ?>
    <title>FRMPAS - Détails plongeur</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href=<?php echo e(asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.css')); ?> rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3">
    <div class="card-body d-flex flex-wrap flex-between-center">
        <div>
            <h6 class="text-primary">Plongeur</h6>
            <h5 class="mb-0"><?php echo e($plongeur->prenom . ' ' . $plongeur->nom); ?> (<?php echo e($plongeur->niveau ? $plongeur->niveau->label : ""); ?>)</h5>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card font-sans-serif mb-3">
            <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center"><img class="rounded-3"
                    src="<?php echo e($plongeur->image); ?>" alt="" width="112" />
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Email</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"
                                    href="mailto:goodguy@nicemail.com">: <?php echo e($plongeur->email); ?></a><span
                                    class="badge rounded-pill badge-subtle-success d-none d-md-inline-block ms-2"><span>Vérifié</span><span
                                        class="fas fa-check ms-1" data-fa-transform="shrink-4"></span></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">CIN</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->cin); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 "> :
                                    <?php echo e($plongeur->telephone_portable); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Genre</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->genre); ?></td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body align-items-center">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Enseignement</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : <?php echo e($plongeur->enseignement); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Qualifications</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->qualifications); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Crée le</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->created_at); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Crée par</td>
                            <td class="p-1 text-600">:
                                <?php echo e($plongeur->createur->nom . " " . $plongeur->createur->prenom); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Adresse</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : <?php echo e($plongeur->adresse); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Code postal</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : <?php echo e($plongeur->code_postal); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Ville</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->code_postal); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Pays</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->pays); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Date de naissance:</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->date_de_naissance); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body align-items-center">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Profession</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : <?php echo e($plongeur->profession); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone portable</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : <?php echo e($plongeur->telephone_portable); ?></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone fixe</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->telephone_fixe); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">N° licence</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->n_licence); ?></td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Date de visite medicale</td>
                            <td class="p-1 text-600">: <?php echo e($plongeur->date_visite_medicale); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="row ">
    <div class="col-xxl-12 order-xxl-1 order-lg-2 order-2">
        <div class="card h-100" id="paymentHistoryTable"
            data-list='{"valueNames":["course","invoice","date","amount","status"],"page":5}'>
            <div class="card-header d-flex flex-between-center">
                <h5 class="mb-0 text-nowrap py-2 py-xl-0">Plongées</h5>
            </div>
            <div class="card-body" style="min-height: 300px;">
                <div class="table-responsive scrollbar">
                    <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "<?php echo e(asset('dashboard/vendors/datatables.net/fr-FR.json')); ?>"
                    }}'>
                        <thead class="bg-light text-900 font-sans-serif">
                            <tr>
                                <th>ID</th>
                                <th>Équipe</th>
                                <th>Heure de départ</th>
                                <th>Heure de sortie</th>
                                <th>Profondeur</th>
                                <th>DT_mn</th>
                                <th>P_départ</th>
                                <th>P_sortie</th>
                                <th>Paliere 12</th>
                                <th>Paliere 9</th>
                                <th>Paliere 6</th>
                                <th>Paliere 3</th>
                                <th>Paliere oxygéne</th>
                                <th>Observetion </th>
                                <th>Crée par</th>

                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $__currentLoopData = $plongeur->carnet_plongee_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="row<?php echo e($item->id); ?>" class="fw-semi-bold">
                                <td class="align-middle white-space-nowrap pe-6 py-3 date"><?php echo e($item->id); ?> </td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->equipe->nom); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->heure_depart); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->heure_sortie); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->prof_m); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->dt_mn); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->p_depart); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->p_sortie); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->paliere_12); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->paliere_9); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->paliere_6); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->paliere_3); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->paliere_oxy); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->observation); ?></td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    <?php echo e($item->createur->nom . " " . $item->createur->prenom); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src=<?php echo e(asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js')); ?>></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cdmasoluma/public_html/diver/resources/views/dashboard/pages/plongeur/details.blade.php ENDPATH**/ ?>