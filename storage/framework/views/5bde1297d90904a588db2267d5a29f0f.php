<?php $__env->startSection('title'); ?>
<title>FRMPAS - Ajouter plongeur</title>
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
                <h3>Ajouter un plongeur</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" role="button" onclick="addplongeur()" id="liveToastBtn">
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
                        <img src=<?php echo e(asset('/dashboard/img/team/avatar.png')); ?> width="200" alt=""
                            data-dz-thumbnail="data-dz-thumbnail" id="image_card" />
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
                    <h6 class="fw-bold">Genre <span class="text-danger">*</span></h6>
                     
                    <div class="ps-2 mt-0">
                        <div class="row mx-2">
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Homme" name="genre" id="homme" />
                                <label class="form-check-label mb-0" for="homme">Homme</label>
                            </div>
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Femme" name="genre" id="femme" checked="checked" />
                                <label class="form-check-label mb-0" for="femme">Femme</label>
                            </div>
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input genre" type="radio" value="Enfant" name="genre" id="enfant" />
                                <label class="form-check-label mb-0" for="enfant">Enfant</label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Champs supplémentaires -->
                    <div id="extra-fields" style="display: none;" class="mt-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="titulaire_enfant" class="form-label">Titulaire <span class="text-danger">*</span></label>
                                <input type="text" id="titulaire_enfant" class="form-control"  />
                            </div>
                            <div class="col-lg-6">
                                <label for="act_naissance_document" class="form-label">Act de naissance <span class="text-danger">*</span></label>
                                <input type="file" id="act_naissance_document" class="form-control" placeholder="Type de document" />
                            </div>
                            <div class="col-lg-6">
                                <label for="engagement_document" class="form-label">Engagement <span class="text-danger">*</span></label>
                                <input type="file" id="engagement_document" class="form-control" placeholder="Type de document" />
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        // Sélectionner tous les inputs de type radio avec le nom "genre"
                        const genreInputs = document.querySelectorAll('input[name="genre"]');
                        const extraFields = document.getElementById('extra-fields');
                    
                        // Ajouter un écouteur d'événements à chaque input radio
                        genreInputs.forEach(input => {
                            input.addEventListener('change', () => {
                                // Vérifier si "Enfant" est sélectionné
                                if (input.value === "Enfant" && input.checked) {
                                    extraFields.style.display = "block";
                                } else {
                                    extraFields.style.display = "none";
                                }
                            });
                        });
                    </script>

                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom <span class="text-danger">*</span></label>
                        <input class="form-control" id="nom" type="text" required/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom">Prénom <span class="text-danger">*</span></label>
                        <input class="form-control" id="prenom" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="cin">CIN <span class="text-danger">*</span></label>
                        <input class="form-control" id="cin" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="cin_document">CIN Document <span class="text-danger">*</span></label>
                        <input class="form-control" id="cin_document" type="file" />
                    </div>
                    <div class="col-sm-6">
                        <label for="email-plongeur-club">Adresse courriel <span class="text-danger">*</span></label>
                        <input class="form-control" id="email-plongeur-club" data-input-mask='{"mask":"/^\S*@?\S*$/"}'
                            placeholder="XXXX@XXX.XXX" type="email"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="password">Mot de passe <span class="text-danger">*</span></label>
                        <input class="form-control" id="password" type="password" autocomplete="new-password" />
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
                        <label class="form-label" for="date_naissance">Date de naissance <span class="text-danger">*</span></label>
                        <input class="form-control datetimepicker" id="date_naissance" type="text"
                            placeholder="d/m/yy" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="profession">Profession</label>
                        <input class="form-control" id="profession" type="text" />
                    </div>
                    <div class="col-sm-6">
                        <label for="usPhoneInputmask">Téléphone fixe</label>
                        <input class="form-control" id="phone_fix" placeholder="+212 XXX-XXX-XXX" type="tel" />
                    </div>
                    <div class="col-sm-6">
                        <label for="usPhoneInputmask">Téléphone portable <span class="text-danger">*</span></label>
                        <input class="form-control" id="phone_portable" placeholder="+212 XXX-XXX-XXX" type="tel" />
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="phone_fixe_diffusable" type="checkbox" />
                            <label class="form-check-label" for="phone_fixe_diffusable">Diffusable aux autres membres
                                de FRMPAS</label>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" id="phone_portable_diffusable" type="checkbox" />
                            <label class="form-check-label" for="phone_portable_diffusable">Diffusable aux autres
                                membres de FRMPAS
                            </label>
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
                        <label class="form-label" for="nom_personne">Nom <span class="text-danger">*</span></label>
                        <input class="form-control" id="nom_personne" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom_personne">Prénom <span class="text-danger">*</span></label>
                        <input class="form-control" id="prenom_personne" type="text" />
                    </div>
                    <div class="col-sm-6">
                        <label for="email_personne">Adresse courriel <span class="text-danger">*</span></label>
                        <input class="form-control" id="email_personne" data-input-mask='{"mask":"/^\S*@?\S*$/"}'
                            placeholder="XXXX@XXX.XXX" type="email" />
                    </div>
                    <div class="col-sm-6">
                        <label for="phone_fixe_personne">Téléphone fixe</label>
                        <input class="form-control" id="phone_fixe_personne"
                            data-input-mask='{"mask":"+212 999-999-999"}' placeholder="+212 XXX-XXX-XXX" type="tel" />
                    </div>
                    <div class="col-sm-6">
                        <label for="phone_portable_personne">Téléphone portable <span class="text-danger">*</span></label>
                        <input class="form-control" id="phone_portable_personne"
                            data-input-mask='{"mask":"+212 999-999-999"}' placeholder="+212 XXX-XXX-XXX" type="tel" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="lien_parente_personne">Lien de parenté <span class="text-danger">*</span></label>
                        <input class="form-control" id="lien_parente_personne" type="text" />
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
                        <label class="form-label" for="adresse">Adresse <span class="text-danger">*</span></label>
                        <input class="form-control" id="adresse" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="code_postal">Code postal <span class="text-danger">*</span></label>
                        <input class="form-control" id="code_postal" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="ville">Ville <span class="text-danger">*</span></label>
                        <input class="form-control" id="ville" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="pays">Pays <span class="text-danger">*</span></label>
                        <input class="form-control" id="pays" type="text" />
                    </div>
                </div>

            </div>
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Informations de plongeur</h5>
                </div>
                <div class="card-body bg-light">

                    
                    <div class="mb-2">
                        <label class="form-label" for="date_visite_medicale">Date de visite médicale <span class="text-danger">*</span></label>
                        <input class="form-control datetimepicker" id="date_visite_medicale" type="text"
                            placeholder="yy/m/d" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="document_medicale">Visite médicale document <span class="text-danger">*</span></label>
                        <input class="form-control" id="document_medicale" type="file" >
                    </div>
                    <div class="mb-2">
                        <label for="niveaux">Niveaux <span class="text-danger">*</span></label>
                        <select class="form-select js-choice" id="niveaux" size="1" name="niveaux"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez le niveau</option>
                            <?php $__currentLoopData = $niveaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($item->id); ?>><?php echo e($item->label); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="jour_entrainement">Jour d'entraînement</label>
                        <select class="form-select js-choice" id="jour_entrainement" size="1" name="jour_entrainement"
                            multiple="multiple"
                            ata-optionsd='{"removeItemButton":true,"placeholder":true, "delimiter": "," }'>
                            <option value="">Choisissez le niveau</option>
                            <option>Lundi</option>
                            <option>Mardi</option>
                            <option>Mercredi</option>
                            <option>Jeudi</option>
                            <option>Vendredi</option>
                            <option>Samedi</option>
                            <option>Dimanche</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="enseignement">Enseignement</label>
                        <input class="form-control" id="enseignement" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="qualifications">Qualifications</label>
                        <input class="form-control" id="qualifications" type="text" required/>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src=<?php echo e(asset('dashboard/vendors/inputmask/inputmask.min.js')); ?>></script>
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
        async function addplongeur() {
            try {
                const requiredFields = [
                    "nom", "prenom", "cin", "email-plongeur-club", "password",
                    "date_naissance", "phone_portable", "nom_personne", "prenom_personne",
                    "email_personne", "phone_portable_personne", "lien_parente_personne", "adresse", "code_postal", "ville", "pays", "date_visite_medicale", "niveaux"
                ];
                let isValid = true;

                requiredFields.forEach((fieldId) => {
                    const field = document.getElementById(fieldId);
                    if (!field.value.trim()) {
                        field.classList.add("is-invalid"); // Ajouter un style pour indiquer l'erreur
                        isValid = false;
                    } else {
                        field.classList.remove("is-invalid");
                    }
                });
                
                image_card.src = 'http://localhost:8000/dashboard/img/team/avatar.png';

                let formData = new FormData();
                formData.append("image", file);
                formData.append("nom", document.getElementById("nom").value);
                formData.append("genre", document.querySelector(".genre:checked").value);
                formData.append("prenom", document.getElementById("prenom").value);
                formData.append("email", document.getElementById("email-plongeur-club").value);
                formData.append("cin", document.getElementById("cin").value);
                formData.append("profession", document.getElementById("profession").value);
                formData.append("date_naissance", document.getElementById("date_naissance").value);
                formData.append("phone_fix", document.getElementById("phone_fix").value);
                formData.append("adresse", document.getElementById("adresse").value);
                formData.append("code_postal", document.getElementById("code_postal").value);
                formData.append("ville", document.getElementById("ville").value);
                formData.append("pays", document.getElementById("pays").value);
                formData.append("phone_portable", document.getElementById("phone_portable").value);
                formData.append("phone_fixe_diffusable", document.getElementById("phone_fixe_diffusable").checked);
                formData.append("phone_portable_diffusable", document.getElementById("phone_portable_diffusable").checked);
                formData.append("nom_personne", document.getElementById("nom_personne").value);
                formData.append("prenom_personne", document.getElementById("prenom_personne").value);
                formData.append("email_personne", document.getElementById("email_personne").value);
                formData.append("phone_fixe_personne", document.getElementById("phone_fixe_personne").value);
                formData.append("phone_portable_personne", document.getElementById("phone_portable_personne").value);
                formData.append("lien_parente_personne", document.getElementById("lien_parente_personne").value);
                // formData.append("n_licence", document.getElementById("n_licence").value);
                formData.append("date_visite_medicale", document.getElementById("date_visite_medicale").value);
                formData.append("niveaux", document.getElementById("niveaux").value);
                formData.append("jour_entrainement", document.getElementById("jour_entrainement").innerText.split(/(?=[A-Z])/).toString());
                formData.append("enseignement", document.getElementById("enseignement").value);
                formData.append("qualifications", document.getElementById("qualifications").value);
                formData.append("password", document.getElementById("password").value);

                
                formData.append("titulaire_enfant", document.getElementById("titulaire_enfant").value);

                const act_naissance_document = document.getElementById("act_naissance_document").files[0];
                if (act_naissance_document) {
                    // alert(act_naissance_document);
                    formData.append("act_naissance_document", act_naissance_document);
                }
               
                const engagement_document = document.getElementById("engagement_document").files[0];
                if (engagement_document) {
                    // alert(engagement_document);
                    formData.append("engagement_document", engagement_document);
                }
               
                const document_medicale = document.getElementById("document_medicale").files[0];
                if (document_medicale) {
                    // alert(document_medicale);
                    formData.append("document_medicale", document_medicale);
                }
               
                const cin_document = document.getElementById("cin_document").files[0];
                if (cin_document) {
                    // alert(cin_document);
                    formData.append("cin_document", cin_document);
                }

                const res = await axios.post('/club/plongeurs', formData, {
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
                                    <strong class="me-auto">FRMPAS</strong>
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
                    image_card.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
                    document.getElementById("nom").value = "";
                    document.getElementById("prenom").value = "";
                    document.getElementById("email-plongeur-club").value = "";
                    document.getElementById("cin").value = "";
                    document.getElementById("profession").value = "";
                    document.getElementById("date_naissance").value = "";
                    document.getElementById("phone_fix").value = "";
                    document.getElementById("adresse").value = "";
                    document.getElementById("code_postal").value = "";
                    document.getElementById("ville").value = "";
                    document.getElementById("pays").value = "";
                    document.getElementById("jour_entrainement").value = "";
                    document.getElementById("phone_portable").value = "";
                    document.getElementById("phone_fixe_diffusable").value = "";
                    document.getElementById("phone_portable_diffusable").value = "";
                    document.getElementById("nom_personne").value = "";
                    document.getElementById("prenom_personne").value = "";
                    document.getElementById("email_personne").value = "";
                    document.getElementById("phone_fixe_personne").value = "";
                    document.getElementById("phone_portable_personne").value = "";
                    document.getElementById("lien_parente_personne").value = "";
                    // document.getElementById("n_licence").value = "";
                    document.getElementById("date_visite_medicale").value = "";
                    document.getElementById("niveaux").value = "";
                    document.getElementById("enseignement").value = "";
                    document.getElementById("qualifications").value = "";
                    
                    document.getElementById("titulaire_enfant").value = "";
                    document.getElementById("act_naissance_document").value = "";
                    document.getElementById("engagement_document").value = "";
                    document.getElementById("document_medicale").value = "";
                    document.getElementById("cin_document").value = "";


                }

            } catch (err) {
                const notif =
                    `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">FRMPAS</strong>
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
<?php echo $__env->make('clubDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/clubDash/pages/plongeur/ajouter.blade.php ENDPATH**/ ?>