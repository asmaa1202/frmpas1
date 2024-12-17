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

        .media-wrapper {
            border-radius: 8px;
            overflow: hidden;
        }

        .media-wrapper img,
        .media-wrapper video {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
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
                        Créée sous sa forme actuelle en 2015 et placée, depuis, sous la tutelle de l'Etat marocain via son Ministère chargé des Sports, la Fédération Royale Marocaine de Plongée et d'Activités Sobaquatiques - FRMPAS - n'est historiquement pas la 1 ère instance officielle en la matière au Royaume.

                        En effet, dès 1962, la Confédération Mondiale des Activités Subaquatiques - CMAS -, créée en 1959 et alors présidée par le Commandant Jacques Yves COUSTEAU, a tenu son Assemblée Générale annuelle à Tanger où Feu Sa Majesté le Roi Hassan Il a délégué son Ministre d'Etat Feu Moulay Ahmed ALAOUI avec mission d'accueillir les participants à cette conférence et y annoncer la création d'une Fédération Marocaine de Plongée.
                        
                        Si on retrouve effectivement les traces des lères expériences subaquatiques il y a 25 siècles (en apnée), ce n'est qu'il y a environ 150 ans qu'est apparu le 1ère scaphandre permettant de respirer sous l'eau, ouvrant ainsi véritablement la voie à l'exploration des mers par ces Anges que sont les plongeurs
                        
                        Aujourd'hui, la FRMPAS, qui comporte plusieurs dizaines d'Associations, Clubs, Ecoles et Centres de plongée et regroupe plusieurs centaines de pratiquants licenciés, a comme objectifs, pour toute cette communauté, de :
                        
                        
                        {{-- Garantir la sécurité via une rigueur et une discipline élevée
                        Veiller à la stricte application des standards en vigueur qu'elle fait régulièrement évoluer
                        Contribuer activement à la préservation de l'environnement marin et aquatique
                        Etre le Yeux du Maroc Sous l'Eau avec toute la vigilance et la réactivité requises
                        Dignement représenter le Maroc qui fait partie des 1ers pays reconnaissant la CMAS
                        Je souhaite à tous nos Amis Plongeurs d'excellentes et mémorables plongées tout le long de notre beau littoral de 3.500 kms de long ainsi que dans toutes les autres destinations mondiales. --}}
                    </p>
                    <ul>
                        <li style="font-weight:600;">Garantir la sécurité via une rigueur et une discipline élevée</li>
                        <li style="font-weight:600;">Veiller à la stricte application des standards en vigueur qu'elle fait régulièrement évoluer</li>
                        <li style="font-weight:600;">Contribuer activement à la préservation de l'environnement marin et aquatique</li>
                        <li style="font-weight:600;">Etre le Yeux du Maroc Sous l'Eau avec toute la vigilance et la réactivité requises</li>
                        <li style="font-weight:600;">Dignement représenter le Maroc qui fait partie des 1ers pays reconnaissant la CMAS</li>
                    </ul>
                    <p>Je souhaite à tous nos Amis Plongeurs d'excellentes et mémorables plongées tout le long de notre beau littoral de 3.500 kms de long ainsi que dans toutes les autres destinations mondiales.</p>
                    {{-- <h6>Notre vision  </h6>
                    <p>
                        Faire du Maroc un centre régional de plongée reconnu, où l'exploration et la protection de la biodiversité sous-marine sont au cœur des pratiques sportives.
                    </p>
                    <h6>Histoire et organisation </h6>
                    <p>
                        Fondée en 1959, FRMPAS est une fédération officielle reconnue par les autorités marocaines, avec des clubs affiliés à travers le pays. Son organisation repose sur des comités régionaux, des instructeurs certifiés, et un réseau de bénévoles passionnés.
                    </p> --}}
                </div>
                <div class="divider-60 divider-lg-0"></div>
            </div>
            <div class="col-lg-6 mr--100-xl-with-scale">
           
                <div class="media-wrapper mt-4">
                    <video controls>
                        <source src="{{ asset('videos/FRMPAS8_VIDEO.mp4') }}" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture de vidéos HTML5.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider-40 divider-xl-50"></div>

@endsection
