
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

    .body-menu {
    width: 550px; /* Laisse la largeur s'adapter automatiquement au contenu */
    display: flex; /* Active l'alignement horizontal des éléments */
    justify-content: center; /* Centre horizontalement les <li> */
    align-items: center; /* Centre verticalement les <li> */
    height: auto; /* Ajuste la hauteur */
    margin: 0 auto; /* Centre le menu si nécessaire */
    padding: 0px; /* Ajoute de l'espace interne */
    background-color: rgb(245, 245, 245);
    list-style-type: none; /* Supprime les puces */
    gap: 20px; /* Espace horizontal entre les <li> */
}

.body-menu li {
    text-align: center; /* Centre le texte des <li> */
    display: inline-block; /* Force les <li> à rester en ligne (si nécessaire) */
}

.body-menu li a {
    font-family: Roboto, sans-serif; /* Applique la police */
    text-decoration: none; /* Supprime le soulignement des liens */
    color: #000; /* Définit la couleur des liens */
    padding: 5px 10px; /* Ajoute un peu d'espace interne aux liens */
    transition: color 0.3s ease; /* Ajoute une animation lors du survol */
}

.body-menu li a:hover {
    color: #007bff; /* Change la couleur du lien au survol */
}
  
</style>
@endsection
@section('custom-js')

@endsection

@section('content')



<section class="finswimming_pages ds finswimming-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>VISUAL</h1>
               <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Sport</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Competition
                    </li>
                </ol>-->
            </div>

        </div>
    </div>

    
</section>
<div id="sppb-addon-wrapper-s8Apm_fvwDuFll0nyO4bK" class="sppb-addon-wrapper "><div id="sppb-addon-s8Apm_fvwDuFll0nyO4bK" class="clearfix  "><div class="sppb-addon sppb-addon-module "><div class="sppb-addon-content">
    <ul class="body-menu vdm_page_menu">
        <li class="item-544"><a href="/sport-diving/how-to-regulations.html">Regulations</a></li>
        <li class="item-540"><a href="/sport-diving/calendar.html">Calendar</a></li>
        <li class="item-540"><a href="/sport-diving/calendar.html">Commission</a></li>
        <li class="item-543"><a href="/sport-diving/results.html">Results</a></li>
        <li class="item-986"><a href="/gallery/sport-diving/events.html">Gallery</a></li>
    </ul>
    
    </div></div></div></div>
    <div class="divider-40 divider-xl-50"></div>






@endsection
