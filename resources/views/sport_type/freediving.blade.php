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

    .menu {
    display: flex;
    justify-content: center; /* Centre horizontalement les éléments */
    gap: 20px; /* Ajoute un espace entre chaque <li> */
    font-size: 20px;
    font-family: sans-serif;
    list-style-type: none;
    background-color: whitesmoke;
    padding: 10px; /* Ajoute un léger padding autour du menu */
}

.menu li {
    text-align: center; /* Centre le texte des éléments <li> */
}
.menu li a {
   font-family: Roboto;
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
                <h1>FREEDIVING</h1>
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
    <ul class="menu vdm_page_menu">
        <li class="item-544"><a href="/sport-diving/how-to-regulations.html">Regulations</a></li>
        <li class="item-540"><a href="/sport-diving/calendar.html">Calendar</a></li>
        <li class="item-543"><a href="/sport-diving/results.html">Results</a></li>
        <li class="item-986"><a href="/gallery/sport-diving/events.html">Gallery</a></li>
    </ul>
    
    </div></div></div></div>




<div class="divider-40 divider-xl-50"></div>


@endsection
