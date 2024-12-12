<?php $__env->startSection('title'); ?>
<title>FRMPAS - Modifier plongeur</title>
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
                <h3>Modifer <?php echo e($plongeur->nom . ' ' . $plongeur->prenom); ?></h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" role="button" onclick="modifierPlongeur(<?php echo e($plongeur->id); ?>)"
                    id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
                <a href="<?php echo e(route('plongeurs.index')); ?>" role="button" class="btn btn-outline-primary">
                    <span class="pe-1">Retour</span>
                    <span class="fas fa-arrow-right" data-fa-transform="shrink-3"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-3 btn-reveal-trigger">
            <div class="card-header position-relative min-vh-25 mb-8">
                <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0"
                        style="background-image:url(/images/federation.png);">
                    </div>
                </div>
                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                        <img src=<?php echo e($plongeur->image ? $plongeur->image : asset('/dashboard/img/team/avatar.png')); ?>

                            width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" id="image_card" />
                        <input class="d-none" id="image_profile" type="file" onchange="handleChageImage()"
                            accept="image/png, image/gif, image/jpeg" />
                        <label class="mb-0 overlay-icon d-flex flex-center" for="image_profile"><span
                                class="bg-holder overlay overlay-0"></span><span
                                class="z-1 text-white dark__text-white text-center fs--1"><span
                                    class="fas fa-camera"></span><span class="d-block">Modifier</span></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information principales</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                    <h6 class="fw-bold">Genre</h6>
                    <div class="ps-2 mt-0">
                        <div class="row mx-2">
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Homme" name="genre"
                                    <?php echo e($plongeur->genre == 'Homme' ? 'checked' : ''); ?> id="home" name="view-settings" />
                                <label class="form-check-label mb-0" for="home">Homme
                                </label>
                            </div>
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Femme" name="genre" id="femme"
                                    <?php echo e($plongeur->genre == 'Femme' ? 'checked' : ''); ?> name="view-settings" />
                                <label class="form-check-label mb-0" for="femme">Femme
                                </label>
                            </div>
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Enfant" name="genre"
                                    <?php echo e($plongeur->genre == 'Enfant' ? 'checked' : ''); ?> id="Enfant"
                                    name="view-settings" />
                                <label class="form-check-label mb-0" for="only-me">Enfant
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom</label>
                        <input class="form-control" value="<?php echo e($plongeur->nom); ?>" id="nom" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom">Prénom</label>
                        <input class="form-control" id="prenom" type="text" value="<?php echo e($plongeur->prenom); ?>" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="cin">CIN</label>
                        <input class="form-control" id="cin" value="<?php echo e($plongeur->cin); ?>" type="text" />
                    </div>
                    <div class="col-sm-3">
                        <label for="email_plongeur_edit">Adresse courriel</label>
                        <input class="form-control" id="email_plongeur_edit" data-input-mask='{"mask":"/^\S*@?\S*$/"}'
                            placeholder="XXXX@XXX.XXX" value="<?php echo e($plongeur->email); ?>" type="email" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="password">Mot de passe</label>
                        <input class="form-control" id="password" type="password" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Vous</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-2">
                    <div class="col-sm-6">
                        <label class="form-label" for="date_naissance">Date de naissance</label>
                        <input class="form-control datetimepicker" id="date_naissance" type="text" placeholder="d/m/yy"
                            value="<?php echo e($plongeur->date_de_naissance); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="profession">Profession</label>
                        <input class="form-control" id="profession" type="text" value="<?php echo e($plongeur->profession); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label for="usPhoneInputmask">Téléphone fixe</label>
                        <input class="form-control" id="phone_fix" data-input-mask='{"mask":"+212 999-999-999"}'
                            placeholder="+212 XXX-XXX-XXX" type="tel" value="<?php echo e($plongeur->telephone_fixe); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label for="usPhoneInputmask">Téléphone portable</label>
                        <input class="form-control" id="phone_portable" data-input-mask='{"mask":"+212 999-999-999"}'
                            placeholder="+212 XXX-XXX-XXX" type="tel" value="<?php echo e($plongeur->telephone_portable); ?>" />
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="telephone_fixe_diffusable" type="checkbox"
                                <?php echo e($plongeur->telephone_fixe_diffusable ? 'checked' : ''); ?> />
                            <label class="form-check-label" for="telephone_fixe_diffusable">Diffusable aux autres
                                membres de FRMPAS</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="telephone_portable_diffusable" type="checkbox"
                                <?php echo e($plongeur->telephone_portable_diffusable ? 'checked' : ''); ?> />
                            <label class="form-check-label" for="telephone_portable_diffusable">Diffusable aux autres
                                membres de FRMPAS</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 mb-lg-0">
            <div class="card-header">
                <h5 class="mb-0">Personne
                    à contacter en cas d'urgence</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">

                    <div class="col-lg-6">
                        <label class="form-label" for="nom_personne">Nom</label>
                        <input class="form-control" id="nom_personne"
                            value="<?php echo e($plongeur->nom_persone_cas_urgence); ?>" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom_personne">Prénom</label>
                        <input class="form-control" id="prenom_personne"
                            value="<?php echo e($plongeur->prenom_persone_cas_urgence); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label for="email_personne">Adresse courriel</label>
                        <input class="form-control" id="email_personne" data-input-mask='{"mask":"/^\S*@?\S*$/"}'
                            placeholder="XXXX@XXX.XXX" type="email"
                            value="<?php echo e($plongeur->email_persone_cas_urgence); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label for="phone_fixe_personne">Téléphone fixe</label>
                        <input class="form-control" id="phone_fixe_personne"
                            data-input-mask='{"mask":"+212 999-999-999"}' placeholder="+212 XXX-XXX-XXX" type="tel"
                            value="<?php echo e($plongeur->telephone_fixe_persone_cas_urgence); ?>" />
                    </div>
                    <div class="col-sm-6">
                        <label for="phone_portable_personne">Téléphone portable</label>
                        <input class="form-control" id="phone_portable_personne"
                            data-input-mask='{"mask":"+212 999-999-999"}' placeholder="+212 XXX-XXX-XXX" type="tel"
                            value="<?php echo e($plongeur->telephone_portable_persone_cas_urgence); ?>" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="lien_parente_personne">Lien de parenté</label>
                        <input class="form-control" id="lien_parente_personne" type="text"
                            value="<?php echo e($plongeur->lien_parente_persone_cas_urgence); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Coordonnées</h5>
                </div>
                <div class="card-body bg-light">

                    <div class="mb-2">
                        <label class="form-label" for="adresse">Adresse</label>
                        <input class="form-control" id="adresse" type="text" value="<?php echo e($plongeur->adresse); ?>" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="code_postal">Code postal</label>
                        <input class="form-control" id="code_postal" type="text" value="<?php echo e($plongeur->code_postal); ?>" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="ville">Ville</label>
                        <input class="form-control" id="ville" type="text" value="<?php echo e($plongeur->ville); ?>" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="pays">Pays</label>
                        <input class="form-control" id="pays" type="text" value="<?php echo e($plongeur->pays); ?>" />
                    </div>
                </div>

            </div>
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Informations de plongeur</h5>
                </div>
                <div class="card-body bg-light">

                    <div class="mb-2">
                        <label class="form-label" for="n_licence">N° de Licence</label>
                        <input class="form-control" id="n_licence" type="text" value="<?php echo e($licence->custom_id ?? ' '); ?>"  disabled />
                    </div>
                    <div class="mb-2">
                        <label for="club-plongeur">Club</label>
                        <select class="form-select js-choice" id="club-plongeur" size="1" name="club"
                        data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez le niveau</option>
                            <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($club->id); ?> <?php echo e($plongeur->club_id == $club->id ? 'selected' : ''); ?>><?php echo e($club->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="date_visite_medicale">Date de visite médicale</label>
                        <input class="form-control datetimepicker" id="date_visite_medicale" type="text"
                            value="<?php echo e($plongeur->date_visite_medicale); ?>" placeholder="yy/m/d" />
                    </div>
                    <div class="mb-2">
                        <label for="niveaux">Niveaux</label>
                        <select class="form-select js-choice" id="niveaux" size="1" name="niveaux"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez le niveau</option>
                            <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($item->id); ?> <?php echo e($plongeur->id_niveau == $item->id ? 'selected' : ''); ?>>
                                <?php echo e($item->label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="jour_entrainement">Jour d'entraînement</label>
                        <select class="form-select js-choice" id="jour_entrainement" size="1" name="jour_entrainement"
                            multiple="multiple"
                            data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                            <option value="">Choisissez le jour d'entraînement</option>
                            <option
                                <?php echo e(array_search('Lundi', explode(',', $plongeur->jour_entrainement)) ? '' : 'selected'); ?>>
                                Lundi</option>
                            <option
                                <?php echo e(array_search('Mardi', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Mardi</option>
                            <option
                                <?php echo e(array_search('Mercredi', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Mercredi</option>
                            <option
                                <?php echo e(array_search('Jeudi', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Jeudi</option>
                            <option
                                <?php echo e(array_search('Vendredi', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Vendredi</option>
                            <option
                                <?php echo e(array_search('Samedi', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Samedi</option>
                            <option
                                <?php echo e(array_search('Dimanch', explode(',', $plongeur->jour_entrainement)) == false ? '' : 'selected'); ?>>
                                Dimanch</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="enseignement">Enseignement</label>
                        <input class="form-control" id="enseignement" type="text"
                            value="<?php echo e($plongeur->enseignement); ?>" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="qualifications">Qualifications</label>
                        <input class="form-control" id="qualifications" type="text"
                            value="<?php echo e($plongeur->qualifications); ?>" />
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
                <button class="btn btn-primary me-3" onclick="modifierPlongeur(<?php echo e($plongeur->id); ?>)" id="liveToastBtn">
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
<script src=<?php echo e(asset('dashboard/vendors/inputmask/inputmask.min.js')); ?>></script>
<script src=<?php echo e(asset('dashboard/vendors/choices/choices.min.js')); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    let file;
        const image_card = document.getElementById("image_card");

        function handleChageImage() {

            file = document.querySelector('input[type=file]').files[0];
            // FileReader support
            if (file) {
                var fr = new FileReader();
                fr.onload = function() {
                    image_card.src = fr.result;
                }
                fr.readAsDataURL(file);
            }
        }
        async function modifierPlongeur(id) {
            try {
                let formData = new FormData();
                formData.append("image", file);
                formData.append("nom", document.getElementById("nom").value);
                formData.append("genre", document.querySelector(".genre:checked").value);
                formData.append("prenom", document.getElementById("prenom").value);
                formData.append("email", document.getElementById("email_plongeur_edit").value);
                formData.append("cin", document.getElementById("cin").value);
                formData.append("profession", document.getElementById("profession").value);
                formData.append("date_naissance", document.getElementById("date_naissance").value);
                formData.append("phone_fix", document.getElementById("phone_fix").value);
                formData.append("adresse", document.getElementById("adresse").value);
                formData.append("code_postal", document.getElementById("code_postal").value);
                formData.append("ville", document.getElementById("ville").value);
                formData.append("pays", document.getElementById("pays").value);
                formData.append("phone_portable", document.getElementById("phone_portable").value);
                formData.append("phone_fixe_diffusable", document.getElementById("telephone_fixe_diffusable").checked ? 1 : 0);
                formData.append("phone_portable_diffusable", document.getElementById("telephone_portable_diffusable")
                    .checked ? 1 : 0);
                formData.append("nom_personne", document.getElementById("nom_personne").value);
                formData.append("prenom_personne", document.getElementById("prenom_personne").value);
                formData.append("email_personne", document.getElementById("email_personne").value);
                formData.append("phone_fixe_personne", document.getElementById("phone_fixe_personne").value);
                formData.append("phone_portable_personne", document.getElementById("phone_portable_personne").value);
                formData.append("lien_parente_personne", document.getElementById("lien_parente_personne").value);
                formData.append("n_licence", document.getElementById("n_licence").value);
                formData.append("date_visite_medicale", document.getElementById("date_visite_medicale").value);
                formData.append("niveaux", document.getElementById("niveaux").value);
                formData.append("jour_entrainement", document.getElementById("jour_entrainement").innerText.split(/(?=[A-Z])/).toString().trim().slice(1));
                formData.append("enseignement", document.getElementById("enseignement").value);
                formData.append("qualifications", document.getElementById("qualifications").value);
                formData.append("club", document.getElementById("club-plongeur").value);

                const res = await axios.post(`/dashboard/plongeurs/modifier/${id}`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    }
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
                    file = "";
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
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/dashboard/pages/plongeur/modifier.blade.php ENDPATH**/ ?>