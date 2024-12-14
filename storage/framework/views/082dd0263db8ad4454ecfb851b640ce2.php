<?php $__env->startSection('title'); ?>
<title>FRMPAS - Mon Compte</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(isset($message) && $message): ?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5" aria-live="polite" aria-atomic="true">
    <div class="toast show align-items-center text-white bg-success border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo e($message); ?>

            </div>
            <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(<?php echo e(asset('dashboard/img/icons/spot-illustrations/corner-4.png')); ?>);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Profile</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>

        </div>
    </div>
</div>


<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information principales</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
             
                    <div class="col-lg-12">
                        <label class="form-label" for="nom_club">Nom du club</label>
                        <input class="form-control" id="nom_club" type="text" name="nom_club" value="<?php echo e(old('nom_club', auth()->user()->club->nom)); ?>"/>
                    </div>
                   
                    <div class="col-lg-12">
                        <label class="form-label" for="date_creation">Date de création</label>
                        <input class="form-control" id="date_creation" type="date"  value="<?php echo e(old('date_creation', auth()->user()->club->date_creation)); ?>"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email_club">Adresse courriel</label>
                        <input class="form-control" id="email_club" type="email" name="email_club" placeholder="XXXX@XXX.XXX"  value="<?php echo e(old('nom_club', auth()->user()->club->email )); ?>"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tel_club">Téléphone</label>
                        <input class="form-control" id="tel_club" type="tel"  value="<?php echo e(old('nom_club', auth()->user()->club->tel)); ?>"/>
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
                                        <?php echo e(in_array($type->type, array_values(json_decode(auth()->user()->club->types ?? '[]', true))) ? 'checked' : ''); ?>

                                    />
                                    <label class="form-check-label mb-0" for="<?php echo e($type->type); ?>"><?php echo e($type->type); ?></label>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            <div class="form-check mb-0 lh-1 col-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="is_federal" type="checkbox" <?php echo e(auth()->user()->club->is_federal ? 'checked' : ''); ?>/>
                                    <label class="form-check-label" for="is_federal">Fédéral</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information personnels</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom</label>
                        <div class="has-validation">
                            <input class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nom"
                                value="<?php echo e(old('nom', auth()->user()->nom)); ?>" name="nom">
                            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom">Prénom</label>
                        <div class="has-validation">
                            <input class="form-control <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prenom" name="prenom"
                                value="<?php echo e(old('prenom', auth()->user()->prenom)); ?>">
                            <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email">E-mail</label>
                        <div class="has-validation">
                            <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email"
                                value="<?php echo e(old('email', auth()->user()->email)); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Mot de passe</label>
                        <div class="has-validation">
                            <input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                                name="password" type="password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Confirmez le mot de passe</label>
                        <input class="form-control" id="password_confirmation" type="password"
                            name="password_confirmation" autocomplete="new-password">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary" onclick="modifierCompte()"
                            id="liveToastBtn">Enregistrer</button>
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
    async function modifierCompte() {
            try {
                // alert(document.getElementById("is_federal").checked);
                const nom_club = document.getElementById("nom_club").value;
                const date_creation = document.getElementById("date_creation").value;
                const tel_club = document.getElementById("tel_club").value;
                const is_federal = document.getElementById("is_federal").checked;
                const nom = document.getElementById("nom").value;
                const prenom = document.getElementById("prenom").value;
                const email = document.getElementById("email_club").value;
                const password = document.getElementById("password").value;
                const password_confirmation = document.getElementById("password_confirmation").value;
                const checkedValuesTypes = Array.from(document.querySelectorAll(".types:checked")).map(el => el.value);

                const type_sportifs = JSON.stringify(checkedValuesTypes);

                const response = await axios.put(`/club/mon-compte`, {
                    nom_club,
                    date_creation,
                    tel_club,
                    type_sportifs,
                    is_federal,
                    nom,
                    prenom,
                    email,
                    password,
                    password_confirmation,
                    headers: {
                        "Content-Type": "multipart/form-data",
                    }
                });
                
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                   ${response.data.message}
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
                }
            } catch (err) {
                alert(err);
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
<?php echo $__env->make('clubDash.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/clubDash/pages/compte/index.blade.php ENDPATH**/ ?>