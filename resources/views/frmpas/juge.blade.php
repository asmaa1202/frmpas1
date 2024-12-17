@extends('layout.master') @section('custom-css')
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
  .juge {
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .body-menu {
    width: 580px; /* Laisse la largeur s'adapter automatiquement au contenu */
    display: flex; /* Active l'alignement horizontal des éléments */
    justify-content: center; /* Centre horizontalement les 
   <li> */
    align-items: center; /* Centre verticalement les 
   <li> */
    height: auto; /* Ajuste la hauteur */
    margin: 0 auto; /* Centre le menu si nécessaire */
    padding: 0px; /* Ajoute de l'espace interne */
    background-color: rgb(245, 245, 245);
    list-style-type: none; /* Supprime les puces */
    gap: 20px; /* Espace horizontal entre les 
   <li> */
  }
  .body-menu li {
    text-align: center; /* Centre le texte des 
   <li> */
    display: inline-block; /* Force les 
   <li>
      à rester en ligne (si nécessaire) */
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
@endsection @section('custom-js') @endsection @section('content')
<section
  class="finswimming_pages ds finswimming-parallax s-overlay s-pt-160 s-pb-80"
>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Arbitrage</h1>
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
<div id="sppb-addon-wrapper-s8Apm_fvwDuFll0nyO4bK" class="sppb-addon-wrapper">
  <div id="sppb-addon-s8Apm_fvwDuFll0nyO4bK" class="clearfix">
    <div class="sppb-addon sppb-addon-module">
      <div class="sppb-addon-content">
        <ul class="body-menu vdm_page_menu">
          <li class="item-540">
            <a href="{{route('juge.commission')}}">Commission</a>
          </li>
          <li class="item-540">
            <a href="/sport-diving/calendar.html">Calendar</a>
          </li>
          <li class="item-986">
            <a href="/gallery/sport-diving/events.html">Gallery</a>
          </li>
          <li class="item-543">
            <a href="/sport-diving/results.html">deven  un juge</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="juge">
  <div class="containerwrapper">
    <div class="container p-h-n">
      <div class="row">
        <div class="col-lg-7 col-xl-8">
            <div>
            <div class="contentpage-content has-position-relative">
                <div class="contentpage-content-breadcrumb-gradient"></div>
                <div
                class="has-gray-background has-full-vw-left has-full-vw-left--no-margin"
                ></div>
                <!-- /76733750/ffessm_megabanniere_728x90 -->
                <div class="d-none d-md-block">
                <div
                    id="div-gpt-ad-1557416328270-0"
                    style="height: 90px; width: 728px"
                    class="contentpage-header-campaign"
                    data-google-query-id="CJb30YSCrIoDFVZQHQkdwVoA_g"
                >
                    <div
                    id="google_ads_iframe_/76733750/ffessm_megabanniere_728x90_0__container__"
                    style="border: 0pt none"
                    >
                    
                    </div>
                </div>
                </div>
                <h1 class="contentpage-content-title">LES NIVEAUX D'ARBITRAGE</h1>
                <div class="contentpage-content-metas">
                <span class="thematic">Sport et règlementation</span>
                <span class="contentpage-content-metas-author">
                    Le 21 Décembre 2024
                </span>
                </div>
                <div class="contentpage-content-headline" style="color: #007bff;font-weight:bold;margin-top:20px">
                Quand un jeu est pratiqué par un ensemble de personnes, des règles
                se construisent, les participants ont besoin d'arbitres
                indépendants et impartiaux...
                </div>
                <div class="d-block d-md-none" style>
                <!-- /76733750/ffessm_bannieremobile_320x100 -->
                <div
                    id="div-gpt-ad-1557416328270-2"
                    style="height: 100px; width: 320px; display: none"
                    class="contentpage-header-campaign"
                    data-google-query-id="CJj30YSCrIoDFVZQHQkdwVoA_g"
                >
                   
                    {{-- <div
                    id="google_ads_iframe_/76733750/ffessm_bannieremobile_320x100_0__container__"
                    style="border: 0pt none; width: 320px; height: 0px"
                    ></div> --}}
                </div>
                </div>
                <div class="contentpage-content-text">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p style="text-align: justify">
                    L’arbitrage des compétitions est confié́ d’une part à des
                    juges-arbitres (juge Nationale)de la direction arbitrale, de
                    l’exactitude de l’enregistrement des résultats, d'autre part, à
                    des juges (juge Régional départs, de la surveillance de
                    l’arbitrage, assistés d’arbitres de virages, de fonds, de zones
                    ou chronométreurs. Leur formation&nbsp;est confiée à des
                    formateurs.
                </p>
                <p style="text-align: justify">
                    <img
                    alt
                    src="arbet1.jpg"
                    style="
                        
                        margin-right: auto;
                        margin-left: auto;
                        display: block;
                    "
                    />
                </p>
                <h3>
                    <span style="color: rgb(0, 109, 170)"
                    >JUGE Nationale</span
                    >
                </h3>
                <p><strong>Juge Arbitre</strong></p>
                <p style="text-align: justify">
                    Le rôle de Juge Arbitre peut être confié à tout juge Nationale)
                    19 ans et plus, il est nommé par l’organisateur de la rencontre.
                </p>
                <p style="text-align: justify">
                    Il est compétent pour arbitrer tout type de rencontre,
                    interclubs, open, championnat départemental ou régional,
                    championnat de France organiser par la FFESSM et, dans le
                    respect des exigences de la CMAS, des rencontres
                    internationales.
                </p>
                <p style="text-align: justify">
                    Il a pour mission de veiller au bon déroulement des compétitions
                    dans le respect du règlement de la plongée sportive en piscine.
                    Il a autorité et plein contrôle sur le corps arbitral qu’il
                    nomme et positionne, ainsi que sur l’ensemble des concurrents.
                    Après chaque épreuve, il valide les résultats avant
                    affichage.<br />
                    A l’issu de la rencontre, il fait un rapport qu’il communique à
                    l’organisateur.
                </p>
                <p style="text-align: justify">
                    Il assure le suivi et la formation des juges et arbitres<img
                    alt
                    src="arbt2.jpg"
                    style="
                        width: 725px;
                        height: 544px;
                        margin-right: auto;
                        margin-left: auto;
                        display: block;
                    "
                    />
                </p>
                <h3 style="text-align: justify">
                    <span style="color: rgb(0, 109, 170)"
                    >JUGE Régional</span
                    >
                </h3>
                <p style="text-align: justify">
                    <strong>Juge Arbitre-Adjoint</strong>
                </p>
                <p style="text-align: justify">
                    Le Juge Arbitre-Adjoint est désigné par le Juge-Arbitre, il a
                    pour mission de le seconder dans ses fonctions ou de le
                    remplacer le cas échéant. Il est le lien entre les chefs
                    d’équipe et le Juge-Arbitre dans le cas d’une réclamation. Il
                    s’assure que le collège des juges et les compétiteurs sont en
                    place avant de transmettre le contrôle de départ au Juge de
                    Départ, il réalise l’évacuation du bassin à l’arrivé de
                    l’ensemble des compétiteurs.
                </p>
                <p style="text-align: justify">
                    Il anime avec le Juge Arbitre la réunion d’avant rencontre.
                </p>
                <p><strong>Juge de Départ</strong></p>
                <p style="text-align: justify">
                    Le juge de départ est nommé dans ses fonctions par le
                    Juge-Arbitre. Il a entière autorité sur l’ensemble des
                    concurrents dès que le Juge-Arbitre adjoint lui en a remis le
                    contrôle, il donne le signal de départ et signale les faux
                    départs. Avant le début de la rencontre, il procède à un test de
                    départ pour l’ensemble des compétiteurs et collège des juges.
                </p>
                <p><strong>Juge Pré départ</strong></p>
                <p style="text-align: justify">
                    Le Juge de Pré départ est désigné par le Juge Arbitre, il est de
                    niveau juge Régionaificité de Technicien en Inspection
                    Visuel. Il reçoit les concurrents, vérifie leur identité et
                    conformité́ de matériels. Il organise la chambre d’appel et en
                    interdit l’accès aux chefs d’équipe ou entraineurs.
                </p>
                <p><strong>Chef Chronométreur</strong></p>
                <p style="text-align: justify">
                    Le Chef chronométreur est nommé par le Juge-Arbitre. Il a en
                    charge la surveillance de l’ensemble des chronométreurs et prend
                    des temps de contrôle, il doit être en mesure de suppléer l’un
                    d’entre eux en cas de matériel défaillant. Il valide les temps
                    et disqualifications signalé de ou des lignes d’eau dont il est
                    responsable, fait remettre les chronomètres à zéro après
                    vérification de ceux-ci et avant chaque épreuve. Avant le début
                    de la compétition, il fait procéder, avec le juge de départ, à
                    un essai des chronomètres.
                </p>
                <p style="text-align: justify">
                    <img
                    alt
                    src="arbt3.jpg"
                    style="width: 340px; height: 228px; float: left;margin-right:10px"
                    /><img
                    alt
                    src="arbt5.jpg"
                    style="width: 342px; height: 228px; float: left"
                    />
                </p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p>
                    <br />
                    &nbsp;
                </p>
                <h3><span style="color: rgb(0, 109, 170)">ARBITRE</span></h3>
                <p><strong>Chronométreur</strong></p>
                <p style="text-align: justify">
                    Les chronométreurs sont nommés par le Juge-Arbitre et
                    positionnés sous le contrôle du chef chronométreur.<br />
                    Ils démarrent leur chronomètre au signal de départ et l’arrêtent
                    lorsque l’épreuve est terminée, ils relèvent le temps sur la
                    fiche de chronométrage. Ils s’assurent du bon déroulement de
                    l’épreuve de la ligne d’eau dont ils ont la charge et note tout
                    motif de disqualification contrôlé et annoncé par l’arbitre de
                    virage, de zone ou de fond. Leur décision est définitive sauf si
                    le juge-Arbitre, son adjoint, ou le Chef chronométreur estime
                    qu’une erreur évidente a été commise. Si un chronométreur
                    déclare avoir été dans l’incapacité de démarrer son chronomètre,
                    ou de juger une faute, le Chef chronométreur peut le remplacer
                    et se prononcer à sa place.<br />
                    Au départ de chaque série, ils remettent leur chronomètre à zéro
                    sur ordre exclusif du chef chronométreur.
                </p>
                <p style="text-align: justify">
                    <img
                    alt
                    src="arbt6.jpg"
                    style="width: 342px; height: 228px; float: left;margin-right:10px"
                    />
                </p>
                <p style="text-align: justify">
                    <img
                    alt
                    src="arbt7.jpg"
                    style="width: 342px; height: 228px; float: left"
                    />
                </p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p style="text-align: justify">&nbsp;</p>
                <p><strong>Arbitre de virage</strong></p>
                <p style="text-align: justify">
                    Les arbitres de virages sont désignés par le juge-Arbitre. Ils
                    secondent les juges en signalant les sorties, ou
                    «&nbsp;fautes&nbsp;» de contact avec le mur, du ou des couloirs
                    dont ils sont responsables, en utilisant le mode de
                    communication mis en place par le Juge-Arbitre. Ils annoncent
                    aussi les fautes de zones ou sortie d’eau, sauf s’il y a un juge
                    des dites fautes. Leur décision est définitive sauf si le
                    juge-Arbitre, ou son adjoint, estime qu’une erreur évidente a
                    été commise. Si un arbitre déclare avoir été dans l’incapacité
                    de juger une faute, le Juge-Arbitre, ou son adjoint, peut se
                    prononcer à sa place, s’il a pu juger lui-même l’erreur. Sinon,
                    le doute bénéficie aux compétiteurs.
                </p>
                <p><strong>Arbitre de fond</strong></p>
                <p style="text-align: justify">
                    L’arbitre de fond est désigné par le Juge Arbitre, il est de
                    niveau arbitre avec la spécificité N1 de plongée technique. Il
                    est placé au fond du bassin, il seconde les juges en signalant
                    aux Chronométreurs tout manquement au règlement de l’épreuve et
                    que le matériel nécessaire est en conformité avec ce dernier et
                    en place. Leur décision est définitive.
                </p>
                <p><strong>Arbitre de Zone</strong></p>
                <p style="text-align: justify">
                    L’arbitre de zone est nommé par le Juge-Arbitre. Il vérifie que
                    les épreuves se déroulent dans les zones prévues par le
                    règlement et signale tout motif de disqualification, hors zone,
                    sortie d’eau, en utilisant le mode de communication mis en place
                    par le Juge-Arbitre. Leur décision est définitive sauf si le
                    juge-Arbitre, ou son adjoint, estime qu’une erreur évidente a
                    été commise. Si un arbitre déclare avoir été dans l’incapacité
                    de juger une faute, le Juge-Arbitre, ou son adjoint, peut se
                    prononcer à sa place, s’il a pu juger lui-même l’erreur. Sinon,
                    le doute bénéficie aux compétiteurs.
                </p>
                <p style="text-align: justify">
                    Ses décisions sont susceptibles d’appel par les Chefs d’équipe
                    désignés devant le Juge-Arbitre ou son adjoint, qui doivent
                    êtres saisis dans les quinze minutes maximums après l’affichage
                    des résultats.
                </p>
                <h3><span style="color: rgb(0, 109, 170)">FORMATEUR</span></h3>
                <p style="text-align: justify">
                    Seul les Juges Nationaux  ont la qualification de
                    formateur
                </p>
                <p style="text-align: justify">
                    Ils organisent les formations,&nbsp; les évaluations et les
                    examens d’arbitre au niveau départemental en présence du
                    président de commission de cette dernière ou de son
                    représentant.
                </p>
                <p style="text-align: justify">
                    Ils organisent les formations,&nbsp; les évaluations et les
                    examens de Juge Régional au niveau régional en présence
                    du président de commisssion de cette dernière ou de son
                    représentant.
                </p>
                <p style="text-align: justify">
                    Ils organisent les évaluations et les examens de Juge Nationale au niveau national en présence du président de
                    commission de cette dernière ou de son représentant.
                </p>
                <div
                    class="panel panel-default collapsible-item"
                    id="Collapsible1693562799990"
            >                           
                    <div
                    class="panel-heading collapsible-item-heading"
                    id="headingCollapsible1693562799990"
                    role="tab"
                    ></div>
                    <div
                    aria-labelledby="headingCollapsible1693562799990"
                    class="panel-collapse collapse collapsible-item-collapse"
                    id="collapseCollapsible1693562799990"
                    role="tabpanel"
                    >
                    
                    </div>
                </div>
                <p>&nbsp;</p>
                </div>
            </div>
            </div>
            <div>
            <div class="contentpage-aside">
                <div
                class="has-white-background has-full-vw-right has-full-vw-right--no-margin"
                ></div>
                <div class="d-block">
                <div class="contentpage-ads">
                    <!-- /76733750/ffessm_pave_300x250 -->
                    <div
                    id="div-gpt-ad-1557416328270-4"
                    class="contentpage-aside-campaign contentpage-aside-campaign--300x250"
                    data-google-query-id="CJr30YSCrIoDFVZQHQkdwVoA_g"
                    style
                    >
                    <div
                        id="google_ads_iframe_/76733750/ffessm_pave_300x250_0__container__"
                        style="border: 0pt none"
                    >
                        <iframe
                        id="google_ads_iframe_/76733750/ffessm_pave_300x250_0"
                        name="google_ads_iframe_/76733750/ffessm_pave_300x250_0"
                        title="3rd party ad content"
                        width="300"
                        height="250"
                        scrolling="no"
                        marginwidth="0"
                        marginheight="0"
                        frameborder="0"
                        aria-label="Advertisement"
                        tabindex="0"
                        allow="private-state-token-redemption;attribution-reporting"
                        data-load-complete="true"
                        data-google-container-id="5"
                        style="border: 0px; vertical-align: bottom"
                        ></iframe>
                    </div>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <div class="m-b-md"></div>
                </div>
                <div class="m-b-xl"></div>
                <!-- /76733750/ffessm_grand_angle_300x600 -->
                <div
                    id="div-gpt-ad-1557416328270-3"
                    class="contentpage-aside-campaign contentpage-aside-campaign--300x600"
                    data-google-query-id="CJn30YSCrIoDFVZQHQkdwVoA_g"
                >
                    <div
                    id="google_ads_iframe_/76733750/ffessm_grand_angle_300x600_0__container__"
                    style="border: 0pt none"
                    >
                    <iframe
                        id="google_ads_iframe_/76733750/ffessm_grand_angle_300x600_0"
                        name="google_ads_iframe_/76733750/ffessm_grand_angle_300x600_0"
                        title="3rd party ad content"
                        width="300"
                        height="600"
                        scrolling="no"
                        marginwidth="0"
                        marginheight="0"
                        frameborder="0"
                        aria-label="Advertisement"
                        tabindex="0"
                        allow="private-state-token-redemption;attribution-reporting"
                        data-load-complete="true"
                        data-google-container-id="4"
                        style="border: 0px; vertical-align: bottom"
                    ></iframe>
                    </div>
                </div>
                </div>
            </div>
            <div class="row d-flex d-lg-none">
                <div class="col-md-6">

                <div class="m-b-lg"></div>
                </div>
                <div class="col-md-4 offset-md-2">
                <!-- /76733750/ffessm_pave_300x250 -->
                <div
                    id="div-gpt-ad-1557416328270-4"
                    class="contentpage-aside-campaign"
                >
                    <script>
                    googletag.cmd.push(function () {
                        googletag.display("div-gpt-ad-1557416328270-4");
                    });
                    </script>
                </div>
                <div class="m-b-md"></div>
                <!-- /76733750/ffessm_pave_300x250 -->
                <div
                    id="div-gpt-ad-1557416328270-4"
                    class="contentpage-aside-campaign"
                >
                    <script>
                    googletag.cmd.push(function () {
                        googletag.display("div-gpt-ad-1557416328270-4");
                    });
                    </script>
                </div>
                </div>
            </div>
            </div>
        </div>


        @if(count($recentBlogs)>0)
        <aside class="col-lg-5 col-xl-4">

            <div class="widget widget_recent_posts " style="margin-top: 250px">

                <h3 class="widget-title">Actualités récentes</h3>
                <ul class="list-unstyled">
                    @foreach($recentBlogs as $blog)
                        <li class="media">
                            <a class="media-image" href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}">
                                <img src="{{asset($blog->image)}}" alt="img">
                            </a>
                            <div class="media-body">
                                <h4 class="entry-title mb-3">
                                    <a href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}" rel="bookmark" class="title-multiline">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                                
                                <p class="item-meta">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}
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
  </div>
  @endsection
</div>
