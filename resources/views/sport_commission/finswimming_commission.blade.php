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
  

.board-container {
            display: flex;
            justify-content: center; /* Centre les éléments horizontalement */
            align-items: flex-start; /* Aligne les éléments en haut */
            flex-wrap: wrap; /* Permet un retour à la ligne si nécessaire */
            gap: 174px; /* Ajoute de l'espace entre les cartes */
            padding: 40px 20px; /* Espacement autour de la section */
        }

        .board-member {
            text-align: center; /* Centre le contenu de chaque membre */
            width: 200px; /* Largeur de chaque carte */
            background: #fff; /* Fond blanc */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre subtile */
            padding: 15px; /* Espacement interne */
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Animation au survol */
        }

        .board-member:hover {
            transform: scale(1.05); /* Agrandit légèrement la carte au survol */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Accentue l'ombre au survol */
        }

        .board-member img {
            width: 100%; /* Rend l'image réactive */
            height: auto; /* Conserve les proportions */
            border-radius: 10px; /* Ajoute des coins arrondis */
        }

        .board-member .name {
            font-size: 1.1em;
            font-weight: bold;
            margin-top: 10px;
            color: #333;
        }

        .board-member .designation {
            font-size: 0.9em;
            color: #666;
        }

        .board-member .country {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
            font-size: 0.8em;
            color: #444;
        }

        .board-member .country img {
            margin-right: 5px;
        }
        .board-member {
    position: relative; /* Nécessaire pour les pseudo-éléments */
    text-align: center; /* Centre le contenu */
    width: 220px; /* Largeur de chaque carte */
    background: linear-gradient(135deg, #ffffff, #f9f9f9); /* Dégradé doux */
    border-radius: 12px; /* Coins arrondis */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Ombre subtile */
    padding: 20px; /* Espacement interne */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation au survol */
    overflow: hidden; /* Masque tout contenu débordant */
}

.board-member:hover {
    transform: translateY(-10px); /* Soulève légèrement la carte */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15); /* Ombre accentuée */
}

.board-member::before {
    content: ""; /* Pseudo-élément décoratif */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 123, 255, 0.05); /* Couche bleue subtile */
    z-index: -1; /* Derrière le contenu principal */
    transition: transform 0.5s ease;
    transform: scale(0); /* Caché par défaut */
    border-radius: 12px;
}

.board-member:hover::before {
    transform: scale(1); /* Devient visible au survol */
}

.board-member img {
    width: 100px; /* Taille fixe pour une image proportionnelle */
    height: 100px; /* Taille fixe pour une image proportionnelle */
    object-fit: cover; /* Assure un bon ajustement de l'image */
    border-radius: 50%; /* Image ronde */
    border: 4px solid #007bff; /* Bordure autour de l'image */
    margin-bottom: 15px; /* Espacement sous l'image */
}

.board-member .name {
    font-size: 1.2em; /* Taille de police pour le nom */
    font-weight: 600; /* Police en gras */
    color: #222; /* Couleur du texte */
    margin-bottom: 5px; /* Espacement sous le nom */
    text-transform: capitalize; /* Met les premières lettres en majuscule */
}

.board-member .designation {
    font-size: 1em; /* Taille de police pour la désignation */
    color: #666; /* Couleur douce */
    margin-bottom: 8px; /* Espacement sous la désignation */
    font-style: italic; /* Style en italique */
}

.board-member .country {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px; /* Espacement entre le drapeau et le texte */
    font-size: 0.9em; /* Taille de police pour la région/pays */
    color: #444; /* Couleur du texte */
}

.board-member .country img {
    width: 18px; /* Taille fixe pour le drapeau */
    height: auto; /* Conserve les proportions */
    border-radius: 3px; /* Coins légèrement arrondis */
}

.title{
    margin-top:82px;
    color:#132273;
    margin-left:157px;
    font-size:30px;
    font-family:'fangsong';
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
                <h1>Commission de plongée sportive</h1>
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


    <div class="board-container">
        <!-- Membre 1 -->
        <div class="board-member">
            <img src="{{asset('equipe/Omar Behari.jpg')}}" alt="Maxime LARCHER">
            <div class="name">BEHARI Moulay Omar</div>
            <div class="designation">Président</div>
            
        </div>

        <!-- Membre 2 -->
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Andrey GURBONOV">
            <div class="name">Mohammed Atouani</div>
            <div class="designation">Member</div>
            
        </div>

        <!-- Membre 3 -->
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">TIMOUYASSE Hamza</div>
            <div class="designation">Member</div>
            
        </div>
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">MANHI Hamza</div>
            <div class="designation">Member</div>
           
        </div>
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">AHAKKAM Ghizlane</div>
            <div class="designation">Member</div>
           
        </div>
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">MANHI Hamza</div>
            <div class="designation">Member</div>
           
        </div>
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">TIMOUYASSE Hamza</div>
            <div class="designation">Member</div>
           
        </div>
        <div class="board-member">
            <img src="https://www.cmas.org//images/2023/03/14/male.webp" alt="Teodoro Antonio REVERIEGO BLANCO">
            <div class="name">BEHARI Moulay Omar</div>
            <div class="designation">Member</div>
            
        </div>
    </div>


@endsection
