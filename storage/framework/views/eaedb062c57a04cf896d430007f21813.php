<?php $__env->startSection('title'); ?>
<title>FRMPAS - Ajouter utilisateur</title>
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
                <h3>Ajouter un utilisateur</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="<?php echo e(route('utilisateurs.index')); ?>" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Retour
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
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            
            <div class="card-body bg-light">
                <div class="row g-3">
                    <div class="mb-3">
                        <label class="form-label" for="nom">Nom :</label>
                        <input class="form-control" id="nom" type="text" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="prenom">Prénom :</label>
                        <input class="form-control" id="prenom" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email">Email :</label>
                        <input class="form-control" id="email" type="email" />

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Mot de passe :</label>
                        <input class="form-control" id="password" type="password" />

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Confirmez le mot de passe :</label>
                        <input class="form-control" id="password_confirmation" type="password" />

                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary" onclick="addUser()" id="liveToastBtn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
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
        async function addUser() {
            try {
                image_card.src = 'http://localhost:8000/dashboard/img/team/avatar.png';

                let formData = new FormData();
                formData.append("image", file);
                formData.append("nom", document.getElementById("nom").value);
                formData.append("prenom", document.getElementById("prenom").value);
                formData.append("email", document.getElementById("email").value);
                formData.append("password", document.getElementById("password").value);
                formData.append("password_confirmation", document.getElementById("password_confirmation").value);


                const res = await axios.post('/dashboard/utilisateurs', formData, {
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
                    image_card.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
                    document.getElementById("nom").value = "";
                    document.getElementById("prenom").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("password").value = "";
                    document.getElementById("password_confirmation").value = "";
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
<?php echo $__env->make('dashboard.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CDMA_MOBILE\Desktop\FRMPAS\resources\views/dashboard/pages/utilisateur/ajouter.blade.php ENDPATH**/ ?>