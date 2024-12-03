<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href=<?php echo e(asset('dashboard/img/favicons/apple-touch-icon.png')); ?>>
    <link rel="icon" type="image/png" sizes="32x32" href=<?php echo e(asset('dashboard/img/favicons/favicon-32x32.png')); ?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo e(asset('dashboard/img/favicons/favicon-16x16.png')); ?>>
    <link rel="shortcut icon" type="image/x-icon" href=<?php echo e(asset('dashboard/img/favicons/favicon.ico')); ?>>
    <link rel="manifest" href=<?php echo e(asset('dashboard/img/favicons/manifest.json')); ?>>
    <meta name="msapplication-TileImage" content=<?php echo e(asset('dashboard/img/favicons/mstile-150x150.png')); ?>>
    <meta name="theme-color" content="#ffffff">
    
    <script src=<?php echo e(asset('dashboard/vendors/simplebar/simplebar.min.js')); ?>></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href=<?php echo e(asset('dashboard/vendors/simplebar/simplebar.min.css')); ?> rel="stylesheet">
    <link href=<?php echo e(asset('dashboard/css/theme.css')); ?> rel="stylesheet" id="style-default">
    <link href=<?php echo e(asset('dashboard/css/user.css')); ?> rel="stylesheet" id="user-style-default">
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 bg-100">
                <div class="col-6 d-none d-lg-block position-relative">
                    <div class="bg-holder"
                        style="background-image:url(<?php echo e(asset("dashboard/images/scuba-diver-interacts-with-southern-stingrays-dasyatis-americana--e1634535801294-peqe4pdns5bvnvk2a1k2zejrgduixq7uj36kz2opeg.jpg")); ?>);background-position: 50% 20%;">
                    </div>
                    <!--/.bg-holder-->

                </div>
                <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                    <div class="row justify-content-center g-0">
                        <div class="col-lg-9 col-xl-8 col-xxl-6">
                            <div class="card">
                                <div class="card-header text-center p-2">
                                    <img src=<?php echo e(asset('images/logo.png')); ?> alt="" style=" width: 200px">
                                </div>
                                <div class="card-body p-4">
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h3>Connexion</h3>
                                        </div>

                                    </div>
                                    <form method="POST" action="<?php echo e(route('plongeur.login.submit')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="mb-3">
                                            <label class="form-label" for="card-email">E-mail</label>
                                            <input id="card-email" type="email"
                                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                                value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus />
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label" for="card-password">Mot de passe</label>
                                            </div>
                                            <input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="password" required autocomplete="current-password"
                                                id="card-password" type="password" />
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <?php if(Route::has('password.request')): ?>
                                        <div class="mb-3">
                                            <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                                name="submit">Connexion</button>
                                        </div>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src=<?php echo e(asset('dashboard/vendors/popper/popper.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/bootstrap/bootstrap.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/anchorjs/anchor.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/is/is.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/js/flatpickr.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/fontawesome/all.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/vendors/lodash/lodash.min.js')); ?>></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src=<?php echo e(asset('dashboard/vendors/list.js/list.min.js')); ?>></script>
    <script src=<?php echo e(asset('dashboard/js/theme.js')); ?>></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/auth/plongeur-login.blade.php ENDPATH**/ ?>