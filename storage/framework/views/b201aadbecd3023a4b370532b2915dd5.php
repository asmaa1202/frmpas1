<?php $__env->startSection('title'); ?>
<title>FRMPAS - Modifier Club</title>
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
                <h3>Modifier club <?php echo e($club->nom); ?></h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" role="button" onclick="editclub(<?php echo e($club->id); ?>)" id="liveToastBtn">
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
                        style="background-image:url(/images/a-female-scuba-diver-watches-a-hawksbill-turtle-swim-lazily-above-a-reef-in-the-cayman-islands--e1634535880681.jpg);">
                    </div>
                </div>
                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                        <img src=<?php echo e($club->image ? $club->image : asset('/dashboard/img/team/avatar.png')); ?> width="200" alt=""
                            data-dz-thumbnail="data-dz-thumbnail" id="image" />
                        <input class="d-none" id="image_club" type="file" onchange="handleChageImage()"
                            accept="image/png, image/gif, image/jpeg" />
                        <label class="mb-0 overlay-icon d-flex flex-center" for="image_club"><span
                                class="bg-holder overlay overlay-0"></span><span
                                class="z-1 text-white dark__text-white text-center fs--1"><span
                                    class="fas fa-camera"></span><span class="d-block">Ajouter</span></span></label>
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
                
                    <div class="col-lg-12">
                        <label class="form-label" for="nom_club">Nom du club</label>
                        <input class="form-control" id="nom_club" type="text" name="nom_club" value="<?php echo e($club->nom); ?>"/>
                    </div>
                   
                    <div class="col-lg-12">
                        <label class="form-label" for="date_creation">Date de création</label>
                        <input class="form-control" id="date_creation" type="date" value="<?php echo e($club->date_creation); ?>"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email_club">Adresse courriel</label>
                        <input class="form-control" id="email_club" type="text" name="email_club" value="<?php echo e($club->email); ?>" placeholder="XXXX@XXX.XXX"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tel_club">Téléphone</label>
                        <input class="form-control" id="tel_club" type="tel" value="<?php echo e($club->tel); ?>"/>
                    </div>
                    <h6 class="fw-bold">Type</h6>
                    <div class="ps-2 mt-0">
                        <div class="row mx-2">
                            
                            <?php $__currentLoopData = $type_sportifs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check mb-0 lh-1 col-2">
                                    <input 
                                        class="form-check-input types" 
                                        type="checkbox" 
                                        value="<?php echo e($type->type); ?>" 
                                        name="types[]" 
                                        id="type_sportifs" 
                                        <?php echo e(in_array($type->type, json_decode($club->types ?? '[]', true)) ? 'checked' : ''); ?>

                                    />
                                    <label class="form-check-label mb-0" for="<?php echo e($type->type); ?>"><?php echo e($type->type); ?></label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="form-check mb-0 lh-1 col-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="is_federal" type="checkbox" <?php echo e($club->is_federal ? 'checked' : ''); ?>/>
                                    <label class="form-check-label" for="is_federal">Fédéral</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2" style="margin-bottom:15px;">
        <div class="sticky-sidebar">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Coordonnées</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="mb-2">
                        <label class="form-label" for="adresse_club">Adresse</label>
                        <input class="form-control" id="adresse_club" type="text" value="<?php echo e($club->adresse); ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="code_postal">Code postal</label>
                        <input class="form-control" id="code_postal" type="text" value="<?php echo e($club->cp); ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="ville_club">Ville</label>
                        <input class="form-control" id="ville_club" type="text" value="<?php echo e($club->ville); ?>"/>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="region">Region</label>
                        <input class="form-control" id="region" type="text" value="<?php echo e($club->region); ?>"/>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information personnels</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                
                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom</label>
                        <input class="form-control" id="nom" type="text" name="nom" value="<?php echo e($user->nom); ?>"/>
                    </div>
                   <div class="col-sm-6">
                        <label class="form-label" for="prenom">Prénom</label>
                        <input class="form-control" id="prenom" type="text" value="<?php echo e($user->prenom); ?>"/>
                    </div>
                    
                 
                    
                   <div class="col-lg-6">
                        <label class="form-label" for="email_personnel">Adresse courriel</label>
                        <input class="form-control" id="email_personnel" type="email" name="email_personnel" value="<?php echo e($user->email); ?>" placeholder="XXXX@XXX.XXX"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Mot de passe</label>
                        <input class="form-control" id="password" type="text"/>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary me-3" onclick="editclub(<?php echo e($club->id); ?>)" id="liveToastBtn">
                            <i class="far fa-save me-1"></i>
                            Enregistrer
                        </button>
                    </div>
                </div>
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
        const image = document.getElementById("image");

        function handleChageImage() {

            file = document.querySelector('input[type=file]').files[0];
            // FileReader support
            if (file) {
                var fr = new FileReader();
                fr.onload = function() {
                    image.src = fr.result;
                }
                fr.readAsDataURL(file);
            }
        }
        async function editclub(id) {
            try {
                // image.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
// alert(document.getElementById("is_federal").checked);
                let formData = new FormData();
                formData.append("image_club", file);
                formData.append("nom_club", document.getElementById("nom_club").value);
                formData.append("date_creation", document.getElementById("date_creation").value);
                formData.append("email_club", document.getElementById("email_club").value);
                formData.append("tel_club", document.getElementById("tel_club").value);
                formData.append("adresse_club", document.getElementById("adresse_club").value);
                formData.append("code_postal", document.getElementById("code_postal").value);
                formData.append("ville_club", document.getElementById("ville_club").value);
                formData.append("region", document.getElementById("region").value);

                formData.append("nom", document.getElementById("nom").value);
                formData.append("prenom", document.getElementById("prenom").value);
                // formData.append("cin", document.getElementById("cin").value);
                // formData.append("date_naissance", document.getElementById("date_naissance").value);
                // formData.append("tel_portable", document.getElementById("tel_portable").value);
                // formData.append("tel_fixe", document.getElementById("tel_fixe").value);
                formData.append("email_personnel", document.getElementById("email_personnel").value);
                formData.append("password", document.getElementById("password").value);
                formData.append("is_federal", document.getElementById("is_federal").checked);
                const checkedValuesTypes = Array.from(document.querySelectorAll(".types:checked")).map(el => el.value);
                formData.append("types", JSON.stringify(checkedValuesTypes));

                //     const email_club = document.getElementById("email_club").value;
                //    alert(email_club);
                const res = await axios.post(`/dashboard/clubs/modifier/${id}`, formData, {
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
                    image_club.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
                  
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
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/dashboard/pages/clubs/edit.blade.php ENDPATH**/ ?>