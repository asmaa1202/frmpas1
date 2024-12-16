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
    width: 550px;
    /* Laisse la largeur s'adapter automatiquement au contenu */
    display: flex;
    /* Active l'alignement horizontal des éléments */
    justify-content: center;
    /* Centre horizontalement les <li> */
    align-items: center;
    /* Centre verticalement les <li> */
    height: auto;
    /* Ajuste la hauteur */
    margin: 0 auto;
    /* Centre le menu si nécessaire */
    padding: 0px;
    /* Ajoute de l'espace interne */
    background-color: rgb(245, 245, 245);
    list-style-type: none;
    /* Supprime les puces */
    gap: 20px;
    /* Espace horizontal entre les <li> */
  }

  .body-menu li {
    text-align: center;
    /* Centre le texte des <li> */
    display: inline-block;
    /* Force les <li> à rester en ligne (si nécessaire) */
  }

  .body-menu li a {
    font-family: Roboto, sans-serif;
    /* Applique la police */
    text-decoration: none;
    /* Supprime le soulignement des liens */
    color: #000;
    /* Définit la couleur des liens */
    padding: 5px 10px;
    /* Ajoute un peu d'espace interne aux liens */
    transition: color 0.3s ease;
    /* Ajoute une animation lors du survol */
  }

  .body-menu li a:hover {
    color: #007bff;
    /* Change la couleur du lien au survol */
  }


    .team-layout {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .team-layout .item-media img {
        border-radius: 50%;
        max-width: 100%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 0 auto;
    }

    .team-layout h5 a {
        color: #333;
        font-size: 20px;
        text-decoration: none;
    }

    .special-heading span {
        font-size: 30px;
        color: #0651b1;
        font-family: 'ui-serif';
    }

</style>
@endsection
@section('custom-js')

@endsection

@section('content')



<section class="freediving_pages ds freediving-parallax s-overlay s-pt-160 s-pb-80">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h1>Commission</h1>
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
            <a href="/sport-diving/results.html">devenu un juge</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>





<div class="divider-40"></div>


<section class="ls s-pb-90 s-pb-xl-160">
    <div class="container">
      {{-- <h3 class="text-center mt-0 mb-2 special-heading color-darkgrey">
        <span>Commission de Juge</span>
      </h3> --}}
      <br><br>


      <div class="row justify-content-center">
          <div class="col-md-6 mb-4  justify-content-center">
              <div class="vertical-item text-center team-layout">
                  <div class="item-media">
                      <img src="{{asset('equipe/Omar Behari.jpg')}}" alt="img" class="img-fluid">
                  </div>
                  <div class="item-content">
                      <h5 class="mb-0"><a href="team-single.html">BEHARI Moulay Omar</a></h5>
                      <p class="team-position pb-xl-3">Président</p>
                  </div>
              </div>
          </div>
      </div>
    
        <div class="row">
             <!-- Commission de Juge -->
           

            <!-- Commission Technique -->
            <div class="col-md-4 mb-4">
               
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="{{asset('dashboard/img/team/avatar.png')}}" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">Membre</a></h5>
                        <p class="team-position pb-xl-3">Membre</p>
                    </div>
                </div>
            </div>

            <!-- Commission Scientifique -->
            <div class="col-md-4 mb-4">
                
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="{{asset('dashboard/img/team/avatar.png')}}" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">Membre</a></h5>
                        <p class="team-position pb-xl-3">Membre</p>
                    </div>
                </div>
            </div>

            <!-- Commission Féminine -->
            <div class="col-md-4 mb-4">
                
                <div class="vertical-item text-center team-layout">
                    <div class="item-media">
                        <img src="{{asset('dashboard/img/team/avatar.png')}}" alt="img" class="img-fluid">
                    </div>
                    <div class="item-content">
                        <h5 class="mb-0"><a href="team-single.html">AHAKKAM Ghizlane</a></h5>
                        <p class="team-position pb-xl-3">Membre</p>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>







@section('custom-js')
<script>
  console.log('Page loaded');
  $(document).ready(function() {
    console.log('Document ready');
  });
</script>
@endsection


<div class="divider-40 divider-xl-50"></div>


@endsection