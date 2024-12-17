@extends('layout.master')

@section('custom-css')

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

  


.scroll-arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
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
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}


/* Images des membres */
.team-member img {
    width: 100%;
    height: auto;
    max-height: 200px; /* Limite la hauteur des images */
    object-fit: cover;
}


/* Suppression des barres de défilement (optionnel) */
.team-scroller-wrapper::-webkit-scrollbar {
    display: none;
}
.team-layout {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 400px; /* Hauteur fixe (modifiable) */
    width: 250px;  /* Largeur fixe (modifiable) */
    margin: 10px;  /* Espace entre les cartes */
    background-color: #f9f9f9; /* Couleur de fond pour différencier */
    border: 1px solid #ddd; /* Optionnel : bordure pour une meilleure visibilité */
    border-radius: 10px; /* Optionnel : coins arrondis */
    overflow: hidden; /* Assure que le contenu déborde pas */
}

.team-layout .item-media img {
    height: 150px; /* Hauteur de l'image */
    width: 100%; /* L'image prend toute la largeur du conteneur */
    object-fit: cover; /* Ajuste l'image pour qu'elle ne soit pas déformée */
    border-bottom: 1px solid #ddd; /* Séparation visuelle avec le texte */
}

.item-content {
    padding: 10px;
    text-align: center;
    flex-grow: 1; /* Laisser l'espace restant */
    display: flex;
    flex-direction: column;
    justify-content: center;
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

<section class="ls s-py-90 s-py-xl-160">
    <div class="container-fluid hero-bg">
        <div class="row">
            <div class="col-12">
                <div class="row c-gutter-60 align-items-center">

                    <div class="col-lg-3 col-xl-3">
                        {{-- <div class="col-lg-6 col-md-6"> --}}
                            <div class="vertical-item text-center team-layout">
                                <div class="py-4">
                                    <img src="{{asset('equipe/pesident.jpeg')}}" alt="img" style="width: 60%">
                                </div>
                                <div class="item-content">
                                    <h5 class="mb-0">
                                        <a href="team-single.html">Abdelaziz ALAZRAK</a>
                                    </h5>
                                    <p class="team-position pb-xl-3">Président</p>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>

                    <div class="col-lg-9 col-xl-9 text-center text-lg-left">
                        <p class="text-center text-md-left color-darkgrey mb-1">
                            <span class="line-left">Notre Président</span>
                        </p>
                        <h4 class="mb-0" style="margin-top: 15px !important">Mot du Président</h4>
                        <p class="team-position pb-xl-3 fs-20">
                        </p>
                        <p style="font-weight:600;">Chères passionnées, chers passionnés de la plongée et des mondes sous-marins,</p>

                        <p>
                            Permettez-moi tout d'abord d’exprimer, au nom de la Fédération Royale Marocaine de Plongée et d'Activités Subaquatiques, notre profonde reconnaissance et gratitude à Sa Majesté le Roi Mohammed VI, que Dieu L’assiste, pour Son engagement et Sa vision éclairée en faveur de la préservation de l’environnement et du développement sportif de notre nation. Sous Sa conduite, le Maroc s'affirme comme un modèle de respect de la nature et de promotion des sports qui valorisent notre patrimoine naturel, notamment marin. Nous nous inspirons de cet engagement pour mener à bien notre mission et renforcer notre action en faveur de la préservation et de la valorisation de notre patrimoine subaquatique.
                        </p>
                        <p style="font-weight:600;">Promotion de la Section Sportive et Représentation Nationale</p>
                        
                        <p>
                            Notre fédération s'engage résolument à développer une section sportive dynamique, visant à former des athlètes de haut niveau capables de représenter fièrement le Maroc sur les scènes nationale, continentale et internationale. En nous inspirant des meilleures pratiques mondiales, notamment celles de la Confédération Mondiale des Activités Subaquatiques (CMAS), nous mettons en place des programmes d'entraînement rigoureux et des infrastructures adaptées pour garantir l'excellence de nos plongeurs sportifs.
                        </p>
                        <p style="font-weight:600;">Inspiration des Meilleures Pratiques Mondiales</p>

                        <p> 
                            Afin de garantir que notre encadrement et nos méthodes soient à la hauteur des standards internationaux, nous adoptons et adaptons les meilleures pratiques mondiales en matière de formation, de sécurité et de gestion des clubs. Cette approche nous permet non seulement d'élever le niveau de notre pratique, mais aussi de renforcer la reconnaissance et la crédibilité de la FRMPAS à l'échelle internationale.
                        </p>
                        <p style="font-weight:600;">
                            Promotion de la Biodiversité Marine et Accessibilité
                        </p>
                        <p> 
                            Le Maroc est doté d'une biodiversité marine exceptionnelle, véritable trésor national que nous avons à cœur de promouvoir et de protéger. Nous œuvrons à rendre la pratique de la plongée accessible à tous, en abaissant les barrières financières et en offrant des programmes inclusifs pour divers publics. En démocratisant la plongée, nous sensibilisons un plus grand nombre de personnes à l'importance de la préservation de nos écosystèmes marins, tout en faisant de la plongée un argument d'attraction touristique majeur pour notre pays.
                        </p>
                        <p style="font-weight:600;">
                            Attraction Touristique et Héritage Durable
                        </p>
                        <p>
                            En rendant la plongée accessible et en valorisant nos sites subaquatiques, nous contribuons à positionner le Maroc comme une destination incontournable pour les amateurs de plongée du monde entier. Cette stratégie non seulement stimule l'économie locale, mais renforce également notre engagement envers un tourisme durable et respectueux de l'environnement.
                        </p>  
                        <p style="font-weight:600;">
                            Encadrement des Clubs selon les Meilleures Pratiques
                        </p>
                        <p>
                            Nous veillons scrupuleusement à ce que tous les clubs affiliés à la FRMPAS soient encadrés selon les normes les plus strictes, garantissant ainsi la sécurité, la qualité de la formation et le bien-être de nos plongeurs. Cet engagement envers l'excellence assure une expérience enrichissante et sécurisée pour tous, tout en renforçant la cohésion et la réputation de notre fédération.
                        </p>  
                        <p>
                            Je tiens également à saluer toutes les associations et partenaires engagés avec nous dans cette aventure collective. Leur appui renforce notre vision et élargit l'impact de nos actions. Ensemble, nous avançons, non seulement pour développer notre passion commune, mais aussi pour laisser un héritage durable aux générations futures.
                        </p>  
                        <p>
                            Merci pour votre engagement et votre soutien. Continuons à explorer, à apprendre, et surtout à protéger notre monde sous-marin.
                        </p> 
                        <p style="font-weight:500;">
                            Avec toute ma reconnaissance et mon amitié, <br>
                            Abdelaziz ALAZRAK <br>
                            Le Président de la FRMPAS
                        </p>
                       
                        <div class="divider-40"></div>
                       

                        <div class="divider-40 divider-xl-60"></div>

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
</section>

{{-- <section class="ls s-pt-90 s-pb-30 s-pt-xl-160 s-pb-xl-100 c-mb-60 c-gutter-60">
    <div class="container">
        <h4>Membres du Comite Technique National</h4>

        <div class="row">

            <!-- Articles Section -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="vertical-item hero-bg text-center team-layout">
                            <div class="item-media">
                                <img src="{{asset('equipe/profile_unknown.jpg')}}" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-0">
                                    <a href="team-single.html">Mohammed Taha</a>
                                </h5>
                                <p class="team-position pb-xl-3">Instructeur 3*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="vertical-item hero-bg text-center team-layout">
                            <div class="item-media">
                                <img src="{{asset('equipe/profile_unknown.jpg')}}" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-0">
                                    <a href="team-single.html">Khalil Senhadji</a>
                                </h5>
                                <p class="team-position pb-xl-3">Instructeur 3*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="vertical-item hero-bg text-center team-layout">
                            <div class="item-media">
                                <img src="{{asset('equipe/profile_unknown.jpg')}}" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-0">
                                    <a href="team-single.html">Adil Akesbi</a>
                                </h5>
                                <p class="team-position pb-xl-3">Instructeur 3*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="vertical-item hero-bg text-center team-layout">
                            <div class="item-media">
                                <img src="{{asset('equipe/profile_unknown.jpg')}}" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-0">
                                    <a href="team-single.html">Mohammed Benihia</a>
                                </h5>
                                <p class="team-position pb-xl-3">Instructeur 3*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mx-auto">
                        <div class="vertical-item hero-bg text-center team-layout">
                            <div class="item-media">
                                <img src="{{asset('equipe/profile_unknown.jpg')}}" alt="img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-0">
                                    <a href="team-single.html">Hamza Timouyasse</a>
                                </h5>
                                <p class="team-position pb-xl-3">Instructeur 3*</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Recent News Sidebar Section -->
            @if(count($recentBlogs) > 0)
            <aside class="col-lg-4 col-xl-4">
                <div class="widget widget_recent_posts">
                    <h3 class="widget-title">Actualités récentes</h3>
                    <ul class="list-unstyled">
                        @foreach($recentBlogs as $blog)
                            <li class="media">
                                <a class="media-image" href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}">
                                    <img src="{{ asset($blog->image) }}" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="entry-title mb-3">
                                        <a href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}" rel="bookmark" class="title-multiline">
                                            {{ $blog->title }}
                                        </a>
                                    </h4>
                                    <p class="item-meta">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
            @endif

        </div>
    </div>
</section> --}}
<div class="divider-40"></div>

<section class="ls s-pb-90 s-pb-xl-160">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center color-darkgrey mb-1">
                    <span class="line-left">Notre Equipe</span>
                </p>
                <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
                    <span>Notre Equipe</span>
                </h3>
                {{-- <p class="text-center color-darkgrey fs-20 fw-400">
                    <span>We want our clients to feel awesome<br> and unique. </span>
                </p> --}}

                <div class="divider-40 divider-xl-60"></div>

                <div class="owl-carousel"  data-responsive-lg="4" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">
                  
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('/equipe/e2.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Hamza MANHI</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                 Vice-Président
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('/equipe/FAOUZI Mustapha.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustapha Faouzi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Vice-Président
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('/equipe/Omar Behari.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">BEHARI Moulay Omar</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Secrétaire Général
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/KARRA Azzeddine.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Azz-ddine Karra</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                secrétaire général adjoint
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/TIMOUYASSE Hamza.jpg')}}" alt="img">
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

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/BARNOUSSI driss.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Driss Barnoussi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                Trésorier adjoint
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/AHAKKAM Ghizlane.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ghizlane Ahakkam</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/e1.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mohammed Atouani</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/ELKASEMI Mustafa.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Mustafa El Kacemi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/ELMIDAOUI Omar.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Omar El Midaoui</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>
                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/SMIK Youssef.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Youssef Smik</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/Bkhibkhi brahim.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">brahim bkhibkhi</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('equipe/JEBLI Ali.jpg')}}" alt="img">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5 class="mb-0">
                                <a href="team-single.html">Ali Jebli</a>
                            </h5>

                            <p class="team-position pb-xl-3">
                                membre
                            </p>

                            

                        </div>
                    </div>
                   


                </div>
                {{-- <div class="divider-40 divider-xl-60"></div> --}}
            </div>
        </div>
    </div>
</section>




{{-- <div class="divider-40 divider-xl-50"></div> --}}


@endsection

