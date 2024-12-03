

<?php $__env->startSection('custom-css'); ?>

<style>

.vertical-item {

    height: 400px;
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
                <h1>FRMPAS Family</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="./">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        FRMPAS Family
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<!--  accueil -->

<section id="accueil" class="ls section-counter s-overlay mobile-overlay s-py-90 s-py-xl-160 c-gutter-40">
    <div class="container">
        <div class="row">
          
            <div class="col-lg-5">
                
                <img src="<?php echo e(asset('assets/images/about.jpg')); ?>" alt="" style="height: 100%;">
                  
            </div>
            <div class="col-lg-7">
                <p class="text-center text-md-left color-darkgrey mb-1">
                    <span class="line-left">Accueil </span>
                </p>
                <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
                    <span>Accueil </span>
                </h3>
                <div class="divider-40 divider-xl-50"></div>
               
                
                <div class="border-left-custom">
                    <h6>Bienvenue sur le site officiel de la Fédération Royale Marocaine de Plongée et d’Activités Subaquatiques (FRMPAS)</h6>

                    <p>
                        Plongez au cœur de l'univers subaquatique marocain ! La FRMPAS est la fédération de référence pour la plongée sous-marine et les activités subaquatiques au Maroc,
                        dédiée à la promotion, au développement et à la protection de ce passionnant domaine. Notre mission est de démocratiser la pratique de la plongée sous toutes ses formes,
                        de sensibiliser le public à la préservation des écosystèmes marins et de soutenir la formation et l’évolution de passionnés et de professionnels de la plongée au Maroc.
                    </p>
                    <h6> Explorez un monde fascinant</h6>
                    <p>
                        Découvrez nos formations spécialisées en plongée, participez à nos événements nationaux et internationaux, et plongez dans un univers d’évasion et d’aventure. Que vous soyez débutant
                        ou professionnel, nous vous invitons à vous joindre à notre communauté pour explorer les richesses des fonds marins marocains.
                    </p>
                    <h6>
                        Découvrez nos formations de plongée et d'activités subaquatiques</h6>
                    <p>
                        La FRMPAS propose une large gamme de formations adaptées à tous les niveaux : des initiations pour débutants aux certifications professionnelles reconnues. Grâce à notre plateforme e-learning, suivez facilement des cours théoriques en ligne et préparez-vous aux pratiques encadrées par nos instructeurs expérimentés. Explorez nos formations et inscrivez-vous pour débuter ou enrichir votre parcours dans cet univers unique.
                    </p>
                  
                </div>
                  
            </div>
        </div>
    </div>
</section>


<!-- À propos de nous -->
<section id="about" class="ls ms section-about s-py-90 s-py-xl-160 text-center text-md-left">
    <div class="container">
        <div class="row">
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
                        La FRMPAS, est une fédération officielle reconnue par les autorités marocaines, avec des clubs affiliés à travers le pays. Son organisation repose sur des comités régionaux, des instructeurs certifiés, et un réseau de bénévoles passionnés.
                    </p>

                </div>
                <div class="divider-40 divider-xl-50"></div>
                <div class="divider-60 divider-lg-0"></div>
            </div>
            
            <div class="col-lg-6 mr--100-xl-with-scale">
                <div class="post_format-post-format-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <a href="<?php echo e(asset('assets/images/35427-407130886_tiny.mp4')); ?>" class="embed-placeholder">
                            <img src="<?php echo e(asset('assets/images/bg-video.jpg')); ?>" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formations et certifications -->



    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/frmpas_family/activites_subaquatiques.blade.php ENDPATH**/ ?>