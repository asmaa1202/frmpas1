<?php $__env->startSection('content'); ?>
<div class="row g-2">
    <div class="col-lg-4 col-xl-3">
        <div class="sticky-sidebar top-navbar-height">
            <div class="card">
                <div class="card-body">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-6 col-lg-12 text-center">
                            <img class="img-fluid rounded-2" src=<?php echo e($plongeur->image); ?> alt="" />
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="row row-cols-1 g-0">
                                <div class="col text-center">
                                    <h4>
                                        <?php if($plongeur->genre == 'Homme'): ?>
                                        <?php echo e('M.' . ' ' . $plongeur->nom . ' ' . $plongeur->prenom); ?>

                                        <?php elseif($plongeur->genre == 'Femme'): ?>
                                        <?php echo e('M.' . ' ' . $plongeur->nom . ' ' . $plongeur->prenom); ?>

                                        <?php elseif($plongeur->genre == 'Enfant'): ?>
                                        <?php echo e($plongeur->nom . ' ' . $plongeur->prenom); ?>

                                        <?php endif; ?>
                                    </h4>
                                    <h5 class="mb-1 text-800 fs-0">N° <?php echo e($plongeur->n_licence); ?> |
                                        <?php echo e($plongeur->niveau->label); ?></h5>
                                    <p class="mb-0 fs--1"><?php echo e($plongeur->email); ?></p>
                                </div>

                                <div class="col mt-4 mt-md-5 mt-lg-4">
                                    <div class="row text-center">
                                        <div class="col-6 border-end-sm border-300"><img class="mb-2"
                                                src="<?php echo e(asset("images/icons/user-plus.svg")); ?>" width="30" alt="" />
                                            <h4 class="text-700" data-countup='{"endValue":79563}'><?php echo e($count_formations); ?></h4>
                                            <h6 class="fw-normal mb-0">Formations</h6>
                                        </div>
                                        <div class="col-6"><img class="mb-2" src="../../assets/img/icons/users.svg"
                                                width="30" alt="" />
                                            <h4 class="text-700" data-countup='{"endValue":120302}'><?php echo e($count_carnets_de_plongee); ?></h4>
                                            <h6 class="fw-normal mb-0">Carnets de plongée</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xl-9">
        <div class="row g-2">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <h6 class="mb-0">Information principales</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless fs--1 fw-medium mb-0">
                            <tbody>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Adresse courriel</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->adresse); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Date de visite médicale</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->date_visite_medicale); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Jour d'entraînement</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->jour_entrainement); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Enseignement</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->enseignement); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Qualifications</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->qualifications); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 35%;">Code postal</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->code_postal); ?>

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
                                    <td class="p-1" style="width: 35%;">Date de naissance</td>
                                    <td class="p-1 text-600">: <?php echo e($plongeur->date_de_naissance); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3" style="min-height: 250px;">
                    <div class="card-header bg-light">
                        <h6 class="mb-0">Vous</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless fs--1 fw-medium mb-0">
                            <tbody>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Profession</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->profession); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Téléphone fixe</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->telephone_fixe); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Diffusable aux autres membres</td>
                                    <td class="p-1 text-600">:
                                        <?php echo e($plongeur->telephone_fixe_diffusable == 1 ? 'Oui' : 'Non'); ?></td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Téléphone portable</td>
                                    <td class="p-1 text-600">: <?php echo e($plongeur->telephone_portable); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Diffusable aux autres membres</td>
                                    <td class="p-1 text-600">:
                                        <?php echo e($plongeur->telephone_portable_diffusable == 1 ? 'Oui' : 'Non'); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card mb-3" style="min-height: 250px;">
                    <div class="card-header bg-light">
                        <h6 class="mb-0">
                            Personne à contacter en cas d'urgence
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless fs--1 fw-medium mb-0">
                            <tbody>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Nom</td>
                                    <td class="p-1">
                                        :
                                        <?php echo e($plongeur->nom_persone_cas_urgence . ' ' . $plongeur->prenom_persone_cas_urgence); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Adresse E-mail</td>
                                    <td class="p-1">
                                        : <?php echo e($plongeur->email_persone_cas_urgence); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Téléphone fixe</td>
                                    <td class="p-1 text-600">:
                                        <?php echo e($plongeur->telephone_fixe_persone_cas_urgence); ?></td>
                                </tr>
                                <tr>
                                    <td class="p-1" style="width: 45%;">Téléphone portable</td>
                                    <td class="p-1 text-600">: <?php echo e($plongeur->telephone_portable_persone_cas_urgence); ?>

                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-1" style="width: 45%;">Lien de parenté</td>
                                    <td class="p-1 text-600">:
                                        <?php echo e($plongeur->lien_parente_persone_cas_urgence); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plongeurDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\frmpas\resources\views/plongeurDash/pages/mon-compte.blade.php ENDPATH**/ ?>