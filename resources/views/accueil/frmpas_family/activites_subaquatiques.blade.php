@extends('layout.master')

@section('custom-css')

<style>

.vertical-item {

    height: 400px;
}


</style>
@endsection
@section('custom-js')

@endsection


@section('content')



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
                
                <img src="{{asset('assets/images/about.jpg')}}" alt="" style="height: 100%;">
                  
            </div>
            <div class="col-lg-7">
                <p class="text-center text-md-left color-darkgrey mb-1">
                    <span class="line-left">Accueil </span>
                </p>
                <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
                    <span>Accueil </span>
                </h3>
                <div class="divider-40 divider-xl-50"></div>
               
                {{-- <div class="divider-60 divider-xl-90"></div> --}}
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
                        <a href="{{asset('assets/images/35427-407130886_tiny.mp4')}}" class="embed-placeholder">
                            <img src="{{asset('assets/images/bg-video.jpg')}}" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formations et certifications -->

{{-- <section id="formations" class="ls s-pt-90 s-pb-60 s-pt-xl-160 s-pb-xl-130">
    <div class="container">

        <div class="row c-mb-30">
            <div class="col-12">
                <p class="text-center color-darkgrey mb-1">
                    <span class="line-left">Formations et certifications</span>
                </p>
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Présentation des niveaux de formation </span>
                </h3>
                <p class="text-center color-darkgrey fs-20 fw-500">
                    <span>Devenez un plongeur confiant grâce à nos programmes <br>de formation adaptés à tous les niveaux</span>
                </p>
                <div class="divider-60 divider-xl-60"></div>
            </div>
            <main class="offset-lg-1 col-lg-10">
                <div class="row isotope-wrapper masonry-layout">
                    <div class="col-xl-3 col-md-6">
                        <article class="vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-full.html">
                                    <img src="{{asset('assets/images/gallery/01.jpg')}}" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <h4 class="entry-title">
                                        <a href="blog-single-full.html" rel="bookmark">
                                            Plongeur débutant 
                                        </a>
                                    </h4>
                                    <div class="entry-meta">
                                    </div>
                                    <!-- .entry-meta -->

                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>Formation de base accessible à tous pour découvrir les premières sensations de plongée</p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article><!-- #post-## -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <article class="vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-full.html">
                                    <img src="{{asset('assets/images/gallery/07.jpg')}}" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <h4 class="entry-title">
                                        <a href="blog-single-full.html" rel="bookmark">
                                            Plongeur autonome 
                                        </a>
                                    </h4>
                                    <div class="entry-meta">

                                    </div>
                                    <!-- .entry-meta -->

                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>Formation avancée pour plonger en autonomie jusqu’à 20 ou 40 mètres de profondeur</p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article><!-- #post-## -->

                    </div>
                    <div class="col-xl-3 col-md-6">

                        <article class="vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-full.html">
                                    <img src="{{asset('assets/images/gallery/06.jpg')}}" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <h4 class="entry-title">
                                        <a href="blog-single-full.html" rel="bookmark">
                                            Spécialités 
                                        </a>
                                    </h4>
                                    <div class="entry-meta">

                                    </div>
                                    <!-- .entry-meta -->

                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>Nitrox, plongée profonde, plongée de nuit, secourisme sous-marin</p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article><!-- #post-## -->
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <article class="vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="blog-single-full.html">
                                    <img src="{{asset('assets/images/gallery/03.jpg')}}" alt="img">
                                </a>
                            </div><!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="entry-header">
                                    <h4 class="entry-title">
                                        <a href="blog-single-full.html" rel="bookmark">
                                            Apnée et plongée libre 
                                        </a>
                                    </h4>
                                    <div class="entry-meta">

                                    </div>
                                    <!-- .entry-meta -->

                                </header>
                                <!-- .entry-header -->

                                <div class="entry-content">
                                    <p>Cours spécialisés d’apnée pour tous les niveaux, du débutant à l’expert</p>
                                </div><!-- .entry-content -->
                            </div><!-- .item-content -->
                        </article><!-- #post-## -->
                    </div>                   

                </div>

            </main>
        </div>

        <div class="row c-mb-30">
            <div class="col-12 text-center">
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Partenariat avec la CMAS </span>
                </h3>
                <p class="text-center color-darkgrey fs-20 fw-500">
                    <span>Les certifications délivrées par la FRMPAS sont reconnues internationalement, offrant ainsi <br>aux plongeurs marocains une grande mobilité.</span>
                </p>
				<button type="button" class="btn btn-maincolor">s'inscrire en ligne </button>
                
            </div>
           
        </div>

    </div>
</section>

<!-- Clubs affiliés et adhésion -->
<section id="clubs" class="ls ms service-single">
    <div class="side-item">
        <div class="item-media">
            <img src="{{asset('assets/images/services/img_11.jpg')}}" alt="img">
        </div>
        <div class="item-content section-special">
            <div>
                <div class="content-center text-center text-md-left">
                    <p class="color-darkgrey mb-1">
                        <span class="line-left">Clubs affiliés et adhésion</span>
                    </p>
                    <h4 class="mt-0 mb-2 special-heading color-darkgrey">
                        <span>Carte interactive des clubs </span>
                    </h4>
                    <div class="divider-30 divider-xl-40"></div>
                    <p>
                        Une carte dynamique affichant les clubs de plongée affiliés à travers le Maroc (Casablanca, Agadir, Tanger, etc.). Chaque club disposera de sa fiche avec :
                    </p>
                    <div class="divider-30 "></div>
                    <div class="column-one">
                        <ul class="list-styled">
                            <li>Nom du club et contact</li>
                            <li>Localisation et type de formations disponibles</li>
                            <li>Activités régulières et événements spéciaux.</li>
                        </ul>
                    </div>
                    <h4 class="mt-3 mb-2 special-heading color-darkgrey">
                        <span>Devenir membre</span>
                    </h4>
                    <div class="divider-30 divider-xl-40"></div>
                    <p>
                        Informations sur comment adhérer à la fédération, les avantages (réduction sur les formations, assurance, participation à des événements), et les tarifs d’adhésion
                    </p>
                
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Espace membre -->
<section id="membre" class="ls section-counter s-overlay mobile-overlay s-py-90 s-py-xl-160 c-gutter-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <p class="text-center text-md-left color-darkgrey mb-1">
                    <span class="line-left">Espace membre </span>
                </p>
                <h3 class="text-center text-md-left mt-0 mb-2 special-heading color-darkgrey">
                    <span>Espace membre </span>
                </h3>
                <div class="divider-40 divider-xl-50"></div>
               
                <div class="border-left-custom">
                    <h6>Connexion et gestion du compte </h6>

                    <p>
                        Un espace sécurisé pour les membres afin de gérer leur profil, suivre leurs formations, et s'inscrire à des événements.
                    </p>
                
                <div class="several-buttons">
                    <a href="./pricing.html" class="btn btn-maincolor btn-medium">E-learnig </a>
                    <a href="./about.html" class="btn btn-outline-maincolor btn-medium">l'app mobile</a>
                </div>

                  
                </div>

                  
            </div>
            <div class="col-lg-5">
                
                <img src="{{asset('assets/images/slide01.jpg')}}" alt="" style="height: 100%;">
                  
            </div>

        </div>
    </div>
</section> --}}

    
@endsection