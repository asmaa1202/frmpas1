<?php $__env->startSection('custom-css'); ?>

    <style>
    .title-multiline {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 3em; 
        line-height: 1.5em; 
    }


    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>FRMPAS</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        FRMPAS
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<!-- Section About -->


<section id="about" class="ls s-py-90 s-py-xl-160 text-center text-md-left">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="text-center text-md-left color-darkgrey mb-1">
                    <span class="line-left">À propos de nous</span>
                </p>
                <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
                    <span>À propos de nous</span>
                </h3>
               
                <div class="divider-40 divider-xl-50"></div>
                <div class="border-left-custom">
                    <h6>Mission et valeurs </h6>

                    <p>
                        La FRMPAS s'engage à promouvoir la plongée sous toutes ses formes et à sensibiliser à la préservation de l’écosystème marin. Nous collaborons avec des clubs locaux, des partenaires internationaux (CMAS), et des institutions sportives pour former des plongeurs qualifiés et encourager les activités subaquatiques 
                    </p>
                    <h6>Notre vision  </h6>
                    <p>
                        Faire du Maroc un centre régional de plongée reconnu, où l'exploration et la protection de la biodiversité sous-marine sont au cœur des pratiques sportives.
                    </p>
                    <h6>Histoire et organisation </h6>

                    <p>
                        Fondée en 1959, FRMPAS est une fédération officielle reconnue par les autorités marocaines, avec des clubs affiliés à travers le pays. Son organisation repose sur des comités régionaux, des instructeurs certifiés, et un réseau de bénévoles passionnés.
                    </p>

                </div>
                <div class="divider-60 divider-lg-0"></div>
            </div>
            <div class="col-lg-6 mr--100-xl-with-scale">
                <div class="image-wrapper">
                    <img src="<?php echo e(asset('assets/images/about/about.jpeg')); ?>" alt="À propos" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider-40 divider-xl-50"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/frmpas_family/frmpas.blade.php ENDPATH**/ ?>