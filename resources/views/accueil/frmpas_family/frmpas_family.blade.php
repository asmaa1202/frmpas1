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

                        <p>
                            Créée sous sa forme actuelle en 2015 et placée, depuis, sous la tutelle de l'Etat marocain via son Ministère chargé des Sports, la Fédération Royale Marocaine de Plongée et d'Activités Sobaquatiques - FRMPAS - n'est historiquement pas la 1 <sup>ère</sup> instance officielle en la matière au Royaume.
                        </p>

                        <p>
                            En effet, dès 1962, la Confédération Mondiale des Activités Subaquatiques - CMAS -, créée en 1959 et alors présidée par le Commandant Jacques Yves COUSTEAU, a tenu son Assemblée Générale annuelle à Tanger où Feu Sa Majesté le Roi Hassan Il a délégué son Ministre d'Etat Feu Moulay Ahmed ALAOUI avec mission d'accueillir les participants à cette conférence et y annoncer la création d'une Fédération Marocaine de Plongée.
                        </p>
                        <p> 
                            Si on retrouve effectivement les traces des lères expériences subaquatiques il y a 25 siècles (en apnée), ce n'est qu'il y a environ 150 ans qu'est apparu le 1<sup>ère</sup> scaphandre permettant de respirer sous l'eau, ouvrant ainsi véritablement la voie à l'exploration des mers par ces Anges que sont les plongeurs
                        </p>
                        <p style="font-weight:500;">
                            Aujourd'hui, la FRMPAS, qui comporte plusieurs dizaines d'Associations, Clubs, Ecoles et Centres de plongée et regroupe plusieurs centaines de pratiquants licenciés, a comme objectifs, pour toute cette communauté, de : 
                        </p>
                        <p>
                            <ul>
                                <li style="font-weight:600;">Garantir la sécurité via une rigueur et une discipline élevée</li>
                                <li style="font-weight:600;">Veiller à la stricte application des standards en vigueur qu'elle fait régulièrement évoluer</li>
                                <li style="font-weight:600;">Contribuer activement à la préservation de l'environnement marin et aquatique</li>
                                <li style="font-weight:600;">Etre le Yeux du Maroc Sous l'Eau avec toute la vigilance et la réactivité requises</li>
                                <li style="font-weight:600;">Dignement représenter le Maroc qui fait partie des 1ers pays reconnaissant la CMAS</li>
                            </ul>
                        </p>
                        <p>
                            Je souhaite à tous nos Amis Plongeurs d'excellentes et mémorables plongées tout le long de notre beau littoral de 3.500 kms de long ainsi que dans toutes les autres destinations mondiales.
                        </p>  
                        <p style="font-weight:500;">
                            Abdelaziz ALAZRAK
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

                <div class="owl-carousel" data-responsive-lg="4" data-responsive-md="2" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-margin="60" data-loop="true">
                    <div class="vertical-item hero-bg text-center team-layout">
                        <div class="item-media">
                            <img src="{{asset('/equipe/Omar Behari.jpg')}}" alt="img">
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

                            

                        </div>
                    </div>
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
                                1<sup>ere</sup> Vice-Président
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
                                2<sup>eme</sup> Vice-Président
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
