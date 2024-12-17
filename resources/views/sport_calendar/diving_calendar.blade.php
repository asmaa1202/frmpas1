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
        width: 550px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin: 0 auto;
        padding: 0px;
        background-color: rgb(245, 245, 245);
        list-style-type: none;
        gap: 20px;
    }

    .body-menu li {
        text-align: center;
        display: inline-block;
    }

    .body-menu li a {
        font-family: Roboto, sans-serif;
        text-decoration: none;
        color: #000;
        padding: 5px 10px;
        transition: color 0.3s ease;
    }

    .body-menu li a:hover {
        color: #007bff;
    }

    table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-bottom: 40px;
    background-color: #fff;
    border-radius: 10px; /* Coins arrondis */
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre douce */
}

th, td {
    padding: 15px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    color: #333; /* Texte gris foncé */
}

th {
    background: linear-gradient(135deg, #75bee9, #75bee9);
    color: #fff; /* Texte blanc */
    font-weight: bold;
    text-transform: uppercase; /* Majuscules */
    letter-spacing: 0.05em;
    border-bottom: 2px solid #2e7d32; /* Séparation nette */
}

tbody tr {
    transition: background-color 0.3s ease; /* Transition douce */
}

tbody tr:nth-child(odd) {
    background-color: #f7f9fc; /* Bleu pâle */
}

tbody tr:nth-child(even) {
    background-color: #fff; /* Blanc pur */
}

tbody tr:hover {
    background-color: #e8f5e9; /* Vert très clair au survol */
}

td {
    border-bottom: 1px solid #e0e0e0; /* Ligne séparatrice subtile */
}

tfoot td {
    font-weight: bold;
    background-color: #f1f8e9; /* Vert clair pour le pied de page */
}

caption {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #4caf50;
    margin-bottom: 10px;
    text-align: left;
}


  
</style>
@endsection
@section('custom-js')

@endsection

@section('content')



<section class="pages_title ds ss-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Calendrier des Compétitions </h1>
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
        <li class="item-540"><a href="{{route('diving.calendar')}}"">Calendar</a></li>
        <li class="item-540"><a href="/sport-diving/calendar.html">Commission</a></li>
        <li class="item-543"><a href="/sport-diving/results.html">Results</a></li>
        <li class="item-986"><a href    ="/gallery/sport-diving/events.html">Gallery</a></li>
    </ul>
    
    </div></div></div></div>


    <div class="container">
        <h2 class="text-center"></h2>
        
        <h3>1ère Étape - Région Sud</h3>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Épreuves</th>
                    <th>Catégorie</th>
                    <th>Bassin</th>
                    <th>Lieu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Samedi 04 Janvier 2025</td>
                    <td>50m, 400m BF<br>100m, 200m BF<br>50m, 100m BF</td>
                    <td>Senior A<br>Junior B<br>Junior C<br>Junior D/Junior E</td>
                    <td>25 m</td>
                    <td>Agadir</td>
                </tr>
            </tbody>
        </table>
        
        <h3>1ère Étape - Région Nord</h3>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Épreuves</th>
                    <th>Catégorie</th>
                    <th>Bassin</th>
                    <th>Lieu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Samedi 18 Janvier 2025</td>
                    <td>50m, 400m BF<br>100m, 200m BF<br>50m, 100m BF</td>
                    <td>Senior A<br>Junior B<br>Junior C<br>Junior D/Junior E</td>
                    <td>50 m</td>
                    <td>Casablanca</td>
                </tr>
            </tbody>
        </table>
    </div>
    

    <div class="divider-40 divider-xl-50"></div>


@endsection
