

<?php $__env->startSection('title'); ?>
<title>FRMPAS - Suivi-prepa</title>
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
        <h3>Fiche de suivi prépa de <?php echo e($plongeur->nom); ?> <?php echo e($plongeur->prenom); ?> pour Niveau 1
        </h3>
        <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
      </div>
      <div class="col-lg-4 d-flex justify-content-end align-items-center">
        
        <a href="<?php echo e(route('plongeurs.index')); ?>" role="button" class="btn btn-outline-primary">
          <span class="pe-1">Retour</span>
          <span class="fas fa-arrow-right" data-fa-transform="shrink-3"></span>
        </a>
      </div>
    </div>
  </div>
</div>
<form method="POST" action="<?php echo e(route('suiviPrepa.store')); ?>">
  <?php echo csrf_field(); ?>
  <div class="card mb-3 btn-reveal-trigger">
    <div class="card-header">
      <div class="row">
        <div class="col-2">
          <label class="form-label" for="saison">Saison</label>
          <input class="form-control" id="saison" name="saison" type="text"
            value="<?php echo e($suiviPrepa->first() && $suiviPrepa->first()->saison ? $suiviPrepa->first()->saison: ""); ?>" />
        </div>
        <div class="col-3">
          <label class="form-label" for="encadrant">Encadrant</label>
          <select class="form-select js-choice" id="encadrant" size="1" name="encadrant"
            data-options='{"removeItemButton":true,"placeholder":true}'>
            <option value="">Choisissez l'encadrant</option>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value=<?php echo e($user->id); ?>

              <?php echo e($suiviPrepa->first() && $user->id == $suiviPrepa->first()->id_encadrant ? 'selected' : ''); ?>>
              <?php echo e($user->nom . ' ' . $user->prenom); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <div class="col-3">
          <label class="form-label" for="niveau">Niveau</label>
          <select class="form-select js-choice" id="niveau" size="1" name="niveau"
            data-options='{"removeItemButton":true,"placeholder":true}'
            onchange="handleChangeNiveau(<?php echo e($plongeur->id); ?>)">
            <option value="">Choisissez niveau</option>
            <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $niveau): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value=<?php echo e($niveau->id); ?> <?php echo e($niveau->id == 1 ? 'selected' : ''); ?>>
              <?php echo e($niveau->label); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>
        <input type="text" id="plongeur" name="plongeur" value="<?php echo e($plongeur->id); ?>" hidden>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <div>
            <p class="m-0" style="font-size: 15px;">R : à revoir, P : en progrés, B : bien</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="border p-2 mt-3">
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Date</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="date_un" name="date_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->un : ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_deux" name="date_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_trois" name="date_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_quatre" name="date_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_cinq" name="date_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_six" name="date_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_sept" name="date_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_huit" name="date_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_neuf" name="date_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="date_dix" name="date_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',1) ? $suiviPrepa->firstWhere('id',1)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Encadrant(e)</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="encadrant_un" name="encadrant_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_deux" name="encadrant_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_trois" name="encadrant_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_quatre" name="encadrant_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_cinq" name="encadrant_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_six" name="encadrant_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_sept" name="encadrant_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_huit" name="encadrant_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_neuf" name="encadrant_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="encadrant_dix" name="encadrant_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',2) ? $suiviPrepa->firstWhere('id',2)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Profondeur d'exercice</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="profondeur_un" name="profondeur_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_deux" name="profondeur_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_trois" name="profondeur_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_quatre" name="profondeur_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_cinq" name="profondeur_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_six" name="profondeur_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_sept" name="profondeur_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_huit" name="profondeur_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_neuf" name="profondeur_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="profondeur_dix" name="profondeur_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',3) ? $suiviPrepa->firstWhere('id',3)->dix: ""); ?>" />
            </div>
          </div>
        </div>
      </div>
      <label class="mt-3">S'équiper et se déséquiper</label>
      <div class="border p-2">
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Lestage</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="lestage_un" name="lestage_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_deux" name="lestage_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_trois" name="lestage_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_quatre" name="lestage_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_cinq" name="lestage_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_six" name="lestage_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_sept" name="lestage_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_huit" name="lestage_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_neuf" name="lestage_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lestage_dix" name="lestage_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',4) ? $suiviPrepa->firstWhere('id',4)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Autonomie dans l'équipement</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="autonomie_un" name="autonomie_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_deux" name="autonomie_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_trois" name="autonomie_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_quatre" name="autonomie_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_cinq" name="autonomie_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_six" name="autonomie_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_sept" name="autonomie_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_huit" name="autonomie_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_neuf" name="autonomie_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="autonomie_dix" name="autonomie_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',5) ? $suiviPrepa->firstWhere('id',5)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Vérification de la pression</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="verification_un" name="verification_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_deux" name="verification_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_trois" name="verification_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_quatre" name="verification_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_cinq" name="verification_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_six" name="verification_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_sept" name="verification_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_huit" name="verification_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_neuf" name="verification_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="verification_dix" name="verification_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',6) ? $suiviPrepa->firstWhere('id',6)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Bon fonctionnement du matériel</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="fonctionnement_un" name="fonctionnement_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_deux" name="fonctionnement_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_trois" name="fonctionnement_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_quatre" name="fonctionnement_quatre"
                type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_cinq" name="fonctionnement_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_six" name="fonctionnement_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_sept" name="fonctionnement_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_huit" name="fonctionnement_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_neuf" name="fonctionnement_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fonctionnement_dix" name="fonctionnement_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',7) ? $suiviPrepa->firstWhere('id',7)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Purger et gonfler en surface</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="purger_un" name="purger_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_deux" name="purger_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_trois" name="purger_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_quatre" name="purger_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_cinq" name="purger_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_six" name="purger_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_sept" name="purger_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_huit" name="purger_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_neuf" name="purger_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="purger_dix" name="purger_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',8) ? $suiviPrepa->firstWhere('id',8)->dix: ""); ?>" />
            </div>
          </div>
        </div>
      </div>
      <label class="mt-3">Se mettre à l'eau et sortie de l'eau s'immerger *indiquez par D,B ou E en fonction du type de
        saut</label>
      <div class="border p-2">
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Saut Droit,*Bascule Arriére*, PMT 100 M</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="saut_droit_un" name="saut_droit_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_deux" name="saut_droit_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_trois" name="saut_droit_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_quatre" name="saut_droit_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_cinq" name="saut_droit_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_six" name="saut_droit_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_sept" name="saut_droit_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_huit" name="saut_droit_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_neuf" name="saut_droit_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="saut_droit_dix" name="saut_droit_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',9) ? $suiviPrepa->firstWhere('id',9)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Capelé 50 M</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="capele_un" name="capele_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_deux" name="capele_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_trois" name="capele_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_quatre" name="capele_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_cinq" name="capele_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_six" name="capele_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_sept" name="capele_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_huit" name="capele_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_neuf" name="capele_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capele_dix" name="capele_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',10)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Capelage - décapelage</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="capelage_un" name="capelage_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_deux" name="capelage_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_trois" name="capelage_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_quatre" name="capelage_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_cinq" name="capelage_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_six" name="capelage_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_sept" name="capelage_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_huit" name="capelage_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_neuf" name="capelage_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="capelage_dix" name="capelage_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',11) ? $suiviPrepa->firstWhere('id',11)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Palmage en surface dorsal, ventral et sustentation</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="palmage_en_surface_un" name="palmage_en_surface_un"
                type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_deux" name="palmage_en_surface_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_trois" name="palmage_en_surface_trois"
                type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_quatre" name="palmage_en_surface_quatre"
                type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_cinq" name="palmage_en_surface_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_six" name="palmage_en_surface_six"
                type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_sept" name="palmage_en_surface_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_huit" name="palmage_en_surface_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_neuf" name="palmage_en_surface_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_surface_dix" name="palmage_en_surface_dix"
                type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',12) ? $suiviPrepa->firstWhere('id',12)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Palmage en immersion</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_un" name="palmage_en_immersion_un"
                type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_deux" name="palmage_en_immersion_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_trois" name="palmage_en_immersion_trois"
                type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_quatre"
                name="palmage_en_immersion_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_cinq" name="palmage_en_immersion_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_six" name="palmage_en_immersion_six"
                type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_sept" name="palmage_en_immersion_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_huit" name="palmage_en_immersion_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_neuf" name="palmage_en_immersion_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="palmage_en_immersion_dix" name="palmage_en_immersion_dix"
                type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',13) ? $suiviPrepa->firstWhere('id',13)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Phoque/Canard</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="phoque_un" name="phoque_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_deux" name="phoque_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_trois" name="phoque_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_quatre" name="phoque_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_cinq" name="phoque_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_six" name="phoque_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_sept" name="phoque_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_huit" name="phoque_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_neuf" name="phoque_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="phoque_dix" name="phoque_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',14) ? $suiviPrepa->firstWhere('id',14)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Utilisation détendeur en surface</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_un" name="utilisation_detendeur_un"
                type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_deux" name="utilisation_detendeur_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_trois"
                name="utilisation_detendeur_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_quatre"
                name="utilisation_detendeur_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_cinq" name="utilisation_detendeur_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_six" name="utilisation_detendeur_six"
                type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_sept" name="utilisation_detendeur_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_huit" name="utilisation_detendeur_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_neuf" name="utilisation_detendeur_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="utilisation_detendeur_dix" name="utilisation_detendeur_dix"
                type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',15) ? $suiviPrepa->firstWhere('id',15)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Stabilisation palier</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="stabilisation_un" name="stabilisation_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_deux" name="stabilisation_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_trois" name="stabilisation_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_quatre" name="stabilisation_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_cinq" name="stabilisation_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_six" name="stabilisation_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_sept" name="stabilisation_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_huit" name="stabilisation_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_neuf" name="stabilisation_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="stabilisation_dix" name="stabilisation_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',16) ? $suiviPrepa->firstWhere('id',16)->dix: ""); ?>" />
            </div>
          </div>
        </div>
      </div>
      <label class="mt-3">Maitrise de la ventilation, s'équilibrer et retour en surface</label>
      <div class="border p-2">
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Ventilation en immersion</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="ventilation_immersion_un" name="ventilation_immersion_un"
                type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_deux" name="ventilation_immersion_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_trois"
                name="ventilation_immersion_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_quatre"
                name="ventilation_immersion_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_cinq" name="ventilation_immersion_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_six" name="ventilation_immersion_six"
                type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_sept" name="ventilation_immersion_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_huit" name="ventilation_immersion_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_neuf" name="ventilation_immersion_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_immersion_dix" name="ventilation_immersion_dix"
                type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',17) ? $suiviPrepa->firstWhere('id',17)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">REC 5m</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="rec_un" name="rec_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_deux" name="rec_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_trois" name="rec_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_quatre" name="rec_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_cinq" name="rec_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_six" name="rec_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_sept" name="rec_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_huit" name="rec_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_neuf" name="rec_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="rec_dix" name="rec_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',18) ? $suiviPrepa->firstWhere('id',18)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">LRE</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="lre_un" name="lre_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_deux" name="lre_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_trois" name="lre_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_quatre" name="lre_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_cinq" name="lre_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_six" name="lre_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_sept" name="lre_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_huit" name="lre_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_neuf" name="lre_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="lre_dix" name="lre_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',19) ? $suiviPrepa->firstWhere('id',19)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">VDM</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="vdm_un" name="vdm_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_deux" name="vdm_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_trois" name="vdm_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_quatre" name="vdm_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_cinq" name="vdm_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_six" name="vdm_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_sept" name="vdm_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_huit" name="vdm_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_neuf" name="vdm_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="vdm_dix" name="vdm_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',20) ? $suiviPrepa->firstWhere('id',20)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Ventilation sur tuba/Vidage du tuba</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="ventilation_tuba_un" name="ventilation_tuba_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_deux" name="ventilation_tuba_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_trois" name="ventilation_tuba_trois"
                type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_quatre" name="ventilation_tuba_quatre"
                type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_cinq" name="ventilation_tuba_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_six" name="ventilation_tuba_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_sept" name="ventilation_tuba_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_huit" name="ventilation_tuba_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_neuf" name="ventilation_tuba_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="ventilation_tuba_dix" name="ventilation_tuba_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',21) ? $suiviPrepa->firstWhere('id',21)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Poumon-ballast</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="poumon_ballast_un" name="poumon_ballast_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_deux" name="poumon_ballast_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_trois" name="poumon_ballast_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_quatre" name="poumon_ballast_quatre"
                type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_cinq" name="poumon_ballast_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_six" name="poumon_ballast_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_sept" name="poumon_ballast_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_huit" name="poumon_ballast_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_neuf" name="poumon_ballast_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="poumon_ballast_dix" name="poumon_ballast_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',22) ? $suiviPrepa->firstWhere('id',22)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Gestion du gilet en immersion/ gestion du gilet en surface</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="gestion_gilet_un" name="gestion_gilet_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_deux" name="gestion_gilet_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_trois" name="gestion_gilet_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_quatre" name="gestion_gilet_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_cinq" name="gestion_gilet_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_six" name="gestion_gilet_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_sept" name="gestion_gilet_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_huit" name="gestion_gilet_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_neuf" name="gestion_gilet_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="gestion_gilet_dix" name="gestion_gilet_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',23) ? $suiviPrepa->firstWhere('id',23)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Maitrise de la vitesse de remontée</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_un" name="maitrise_vitesse_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_deux" name="maitrise_vitesse_deux"
                type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_trois" name="maitrise_vitesse_trois"
                type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_quatre" name="maitrise_vitesse_quatre"
                type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_cinq" name="maitrise_vitesse_cinq"
                type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_six" name="maitrise_vitesse_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_sept" name="maitrise_vitesse_sept"
                type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_huit" name="maitrise_vitesse_huit"
                type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_neuf" name="maitrise_vitesse_neuf"
                type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="maitrise_vitesse_dix" name="maitrise_vitesse_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',24) ? $suiviPrepa->firstWhere('id',24)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Tenue d'un palier et pour tour d'horizon</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="tenue_palier_un" name="tenue_palier_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_deux" name="tenue_palier_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_trois" name="tenue_palier_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_quatre" name="tenue_palier_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_cinq" name="tenue_palier_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_six" name="tenue_palier_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_sept" name="tenue_palier_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_huit" name="tenue_palier_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_neuf" name="tenue_palier_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="tenue_palier_dix" name="tenue_palier_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',25) ? $suiviPrepa->firstWhere('id',25)->dix: ""); ?>" />
            </div>
          </div>
        </div>
      </div>
      <label class="mt-3">Communiquer « signes » et évoluer en sécurité</label>
      <div class="border p-2">
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Ça va/ ça ne va pas</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="cava_un" name="cava_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_deux" name="cava_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_trois" name="cava_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_quatre" name="cava_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_cinq" name="cava_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_six" name="cava_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_sept" name="cava_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_huit" name="cava_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_neuf" name="cava_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="cava_dix" name="cava_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',26) ? $suiviPrepa->firstWhere('id',26)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Surveiller et donner sa pression</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="surveiller_un" name="surveiller_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_deux" name="surveiller_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_trois" name="surveiller_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_quatre" name="surveiller_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_cinq" name="surveiller_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_six" name="surveiller_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_sept" name="surveiller_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_huit" name="surveiller_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_neuf" name="surveiller_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="surveiller_dix" name="surveiller_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',27) ? $suiviPrepa->firstWhere('id',27)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Echange d'embout/ Octopus</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="echange_un" name="echange_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_deux" name="echange_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_trois" name="echange_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_quatre" name="echange_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_cinq" name="echange_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_six" name="echange_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_sept" name="echange_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_huit" name="echange_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_neuf" name="echange_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="echange_dix" name="echange_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',28) ? $suiviPrepa->firstWhere('id',28)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Mi- pression</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="mi_un" name="mi_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_deux" name="mi_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_trois" name="mi_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_quatre" name="mi_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_cinq" name="mi_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_six" name="mi_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_sept" name="mi_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_huit" name="mi_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_neuf" name="mi_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="mi_dix" name="mi_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',29) ? $suiviPrepa->firstWhere('id',29)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Réserve</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="reserve_un" name="reserve_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_deux" name="reserve_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_trois" name="reserve_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_quatre" name="reserve_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_cinq" name="reserve_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_six" name="reserve_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_sept" name="reserve_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_huit" name="reserve_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_neuf" name="reserve_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="reserve_dix" name="reserve_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',30) ? $suiviPrepa->firstWhere('id',30)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Fin de plongée/ fin d'exercice</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="fin_plongee_un" name="fin_plongee_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_deux" name="fin_plongee_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_trois" name="fin_plongee_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_quatre" name="fin_plongee_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_cinq" name="fin_plongee_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_six" name="fin_plongee_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_sept" name="fin_plongee_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_huit" name="fin_plongee_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_neuf" name="fin_plongee_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="fin_plongee_dix" name="fin_plongee_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',31) ? $suiviPrepa->firstWhere('id',31)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Panne d'air/ Intervention en relais</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="panne_air_un" name="panne_air_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_deux" name="panne_air_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_trois" name="panne_air_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_quatre" name="panne_air_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_cinq" name="panne_air_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_six" name="panne_air_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_sept" name="panne_air_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_huit" name="panne_air_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_neuf" name="panne_air_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="panne_air_dix" name="panne_air_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',32) ? $suiviPrepa->firstWhere('id',32)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Froid</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="froid_un" name="froid_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_deux" name="froid_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_trois" name="froid_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_quatre" name="froid_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_cinq" name="froid_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_six" name="froid_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_sept" name="froid_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_huit" name="froid_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_neuf" name="froid_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="froid_dix" name="froid_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',33) ? $suiviPrepa->firstWhere('id',33)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Essoufflement</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="essoufflement_un" name="essoufflement_un" type="text"
                placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_deux" name="essoufflement_deux" type="text"
                placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_trois" name="essoufflement_trois" type="text"
                placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_quatre" name="essoufflement_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_cinq" name="essoufflement_cinq" type="text"
                placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_six" name="essoufflement_six" type="text"
                placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_sept" name="essoufflement_sept" type="text"
                placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_huit" name="essoufflement_huit" type="text"
                placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_neuf" name="essoufflement_neuf" type="text"
                placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="essoufflement_dix" name="essoufflement_dix" type="text"
                placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',34) ? $suiviPrepa->firstWhere('id',34)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Monter/descendre</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="monter_un" name="monter_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_deux" name="monter_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_trois" name="monter_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_quatre" name="monter_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_cinq" name="monter_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_six" name="monter_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_sept" name="monter_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_huit" name="monter_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_neuf" name="monter_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="monter_dix" name="monter_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',35) ? $suiviPrepa->firstWhere('id',35)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Savoir se positionner / GP</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="savoir_un" name="savoir_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_deux" name="savoir_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_trois" name="savoir_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_quatre" name="savoir_quatre" type="text"
                placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_cinq" name="savoir_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_six" name="savoir_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_sept" name="savoir_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_huit" name="savoir_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_neuf" name="savoir_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="savoir_dix" name="savoir_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',36) ? $suiviPrepa->firstWhere('id',36)->dix: ""); ?>" />
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-3 d-flex align-items-center">
            <label class="mb-0">Apnée expiratoire sur 5m à l'horizontale utilisation de l'Octopus du GP</label>
          </div>
          <div class="col-9 d-flex justify-content-between gap-3">
            <div>
              <input class="form-control text-center" id="apnee_un" name="apnee_un" type="text" placeholder="1"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->un: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_deux" name="apnee_deux" type="text" placeholder="2"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->deux: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_trois" name="apnee_trois" type="text" placeholder="3"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->trois: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_quatre" name="apnee_quatre" type="text" placeholder="4"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->quatre: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_cinq" name="apnee_cinq" type="text" placeholder="5"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->cinq: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_six" name="apnee_six" type="text" placeholder="6"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',10) ? $suiviPrepa->firstWhere('id',37)->six: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_sept" name="apnee_sept" type="text" placeholder="7"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->sept: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_huit" name="apnee_huit" type="text" placeholder="8"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->huit: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_neuf" name="apnee_neuf" type="text" placeholder="9"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->neuf: ""); ?>" />
            </div>
            <div>
              <input class="form-control text-center" id="apnee_dix" name="apnee_dix" type="text" placeholder="10"
                value="<?php echo e($suiviPrepa &&$suiviPrepa->firstWhere('id',37) ? $suiviPrepa->firstWhere('id',37)->dix: ""); ?>" />
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
          <button class="btn btn-primary me-3" onclick="addplongeur()" id="liveToastBtn">
            <i class="far fa-save me-1"></i>
            Enregistrer
          </button>
        </div>
      </div>
    </div>
  </div>
  <div id="notification"></div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src=<?php echo e(asset('dashboard/vendors/choices/choices.min.js')); ?>></script>
<script>
  const handleChangeNiveau = (id_plongeur) => {
    const niveau = document.getElementById("niveau").value;
    if(niveau == 1) {
      window.location = `/dashboard/plongeurs/${id_plongeur}/niveau/1/suivi-prepa`;
    } else if(niveau == 2) {
      window.location = `/dashboard/plongeurs/${id_plongeur}/niveau/2/suivi-prepa`;
    } else if(niveau == 3) {
      window.location = `/dashboard/plongeurs/${id_plongeur}/niveau/3/suivi-prepa`;
    } else if(niveau == 4) {
      window.location = `/dashboard/plongeurs/${id_plongeur}/niveau/4/suivi-prepa`;
    }
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/dashboard/pages/plongeur/suivi-prepa-niveau1.blade.php ENDPATH**/ ?>