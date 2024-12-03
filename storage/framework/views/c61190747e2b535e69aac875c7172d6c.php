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

/* Conteneur principal */
.team-scroller-wrapper {
    overflow-x: auto; /* Permet le défilement horizontal */
    overflow-y: hidden; /* Masque le défilement vertical */
    white-space: nowrap; /* Empêche les éléments de passer à la ligne */
    scroll-behavior: smooth; /* Défilement fluide */
    padding: 20px 0;
    background-color: #f7f7f7; /* Optionnel */
}

/* Liste des membres alignés horizontalement */
.team-scroller {
    display: flex;
    gap: 20px; /* Espacement entre les membres */
}

/* Style des membres individuels */
.team-member {
    flex: 0 0 250px; /* Largeur fixe pour chaque membre */
    display: inline-block; /* Assure un alignement horizontal */
    text-align: center;
}

/* Images des membres */
.team-member img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Suppression des barres de défilement (optionnel) */
.team-scroller-wrapper::-webkit-scrollbar {
    display: none;
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
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        FRMPAS Family
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>


<div class="divider-40"></div>

<section class="ls s-pb-90 s-pb-xl-160">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Sportive</span>
                </h3>
                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mohammed Atouani</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Omar Behari</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Secrétaire Général
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/team/omar-el-midaoui.jpeg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Omar El Midaoui</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>
                        </div>
                    </div>

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustafa El Kacemi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/team/driss_barnoussi.jpeg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Driss Barnoussi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-trésorier
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/team/youssef-smik.jpeg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Youssef Smik</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>

                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission de Juge</span>
                </h3>
                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza MANHI</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                1<sup>ere</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustapha Faouzi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                2<sup>eme</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Azz-ddine Karra</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-secrétaire Général
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza Timouyasse</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Trésorier
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ghizlane Ahakkam</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">brahim bkhibkhi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ali Jebli</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>
        <div class="divider-40 divider-xl-50"></div>

        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Scientifique</span>
                </h3>
                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza MANHI</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                1<sup>ere</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustapha Faouzi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                2<sup>eme</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Azz-ddine Karra</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-secrétaire Général
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza Timouyasse</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Trésorier
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ghizlane Ahakkam</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">brahim bkhibkhi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ali Jebli</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>
        <div class="divider-40 divider-xl-50"></div>

        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Technique</span>
                </h3>
                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza MANHI</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                1<sup>ere</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustapha Faouzi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                2<sup>eme</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Azz-ddine Karra</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-secrétaire Général
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza Timouyasse</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Trésorier
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ghizlane Ahakkam</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">brahim bkhibkhi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ali Jebli</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>

        <div class="divider-40 divider-xl-50"></div>

        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Commission Discipline</span>
                </h3>
                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">

                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza MANHI</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                1<sup>ere</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustapha Faouzi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                2<sup>eme</sup> Vice-Président
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Azz-ddine Karra</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-secrétaire Général
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza Timouyasse</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Trésorier
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ghizlane Ahakkam</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">brahim bkhibkhi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="<?php echo e(asset('assets/images/profile_unknown.jpg')); ?>" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ali Jebli</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Conseiller
                            </p>

                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                                <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.youtube.com/" class="fa bg-icon rounded-icon fa-youtube-play" title="youtube"></a>
                            </p>

                        </div>
                    </div>


                </div>
                
            </div>
        </div>

    </div>
</section>


<div class="divider-40 divider-xl-50"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projets\FRMPAS\resources\views/accueil/frmpas_family/commissions.blade.php ENDPATH**/ ?>