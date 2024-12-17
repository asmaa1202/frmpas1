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



<section class="pages_title ds ss-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Sport Diving</h1>
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
        <li class="item-986"><a href="/gallery/sport-diving/events.html">Gallery</a></li>
    </ul>
    
    </div></div></div></div>



    <div class="container-inner">
        <div class="row">
           <main id="sp-component" class="col-lg-12 ">
              <div class="sp-column ">
                 <div id="system-message-container" aria-live="polite">
                 </div>
                 <div class="eventgallery-minicart-container">
                    <div class="eventgallery-minicart eventgallery-minicart-internal well" style="display: none;">
                       <h2>Cart</h2>
                       <div class="cart-items-container">
                          <div class="cart-items"></div>
                       </div>
                       <div class="cart-summary btn-group">
                          <button title="Number of unique Items in your cart." class="btn"><span class="itemscount">0</span> Items                    </button>
                          <button title="Show all items" class="btn toggle-down" style="display: none;"><i class="egfa egfa-chevron-down"></i></button>
                          <button title="Hide older items" class="btn toggle-up" style="display: none;"><i class="egfa egfa-chevron-up"></i></button>
                          <button title="Go to Cart" onclick="document.location.href='/gallery/cart.html'" class="btn  btn-primary"><i class="egfa egfa-shopping-cart"></i>  Buy now</button>
                       </div>
                    </div>
                 </div>
                 <div class="page-header">
                    <h1> GALLERY </h1>
                 </div>
                 <div id="events">
                    <div class="eventgallery-events-gridlist">
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/3rdWorldChampionshipSportDivingJuniorDay3.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Saturday, 30 November 2024</div>
                                      <div class="title">6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 3</div>
                                      <div class="imagecount">Images: 1</div>
                                   </div>
                                   <div class="images event-thumbnails" style="min-height: 0px;">
                                      <div class="event-thumbnail">
                                         <img data-width="1130" data-height="1600" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=3rdWorldChampionshipSportDivingJuniorDay3&amp;file=6thWorldChampionshipSportDiving.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=3rdWorldChampionshipSportDivingJuniorDay3&amp;file=6thWorldChampionshipSportDiving.jpg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 3" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=3rdWorldChampionshipSportDivingJuniorDay3&amp;file=6thWorldChampionshipSportDiving.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=3rdWorldChampionshipSportDivingJuniorDay3&amp;file=6thWorldChampionshipSportDiving.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/3rdWorldChampionshipSportDivingJuniorDay2.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Friday, 29 November 2024</div>
                                      <div class="title">6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 2</div>
                                      <div class="imagecount">Images: 1</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1130" data-height="1600" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=3rdWorldChampionshipSportDivingJuniorDay2&amp;file=6thWorldChampionshipSportDiving.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=3rdWorldChampionshipSportDivingJuniorDay2&amp;file=6thWorldChampionshipSportDiving.jpg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 2" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=3rdWorldChampionshipSportDivingJuniorDay2&amp;file=6thWorldChampionshipSportDiving.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=3rdWorldChampionshipSportDivingJuniorDay2&amp;file=6thWorldChampionshipSportDiving.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/6thWorldChampionshipSportDiving3rdWorldChampionshipSportDivingJuniorDay1.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Thursday, 28 November 2024</div>
                                      <div class="title">6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 1</div>
                                      <div class="imagecount">Images: 71</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1067" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=6thWorldChampionshipSportDiving3rdWorldChampionshipSportDivingJuniorDay1&amp;file=6thWorldChampionshipSportDiving-69.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=6thWorldChampionshipSportDiving3rdWorldChampionshipSportDivingJuniorDay1&amp;file=6thWorldChampionshipSportDiving-69.jpg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="6th World Championship Sport Diving &amp; 3rd World Championship Sport Diving Junior Day 1" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=6thWorldChampionshipSportDiving3rdWorldChampionshipSportDivingJuniorDay1&amp;file=6thWorldChampionshipSportDiving-69.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=6thWorldChampionshipSportDiving3rdWorldChampionshipSportDivingJuniorDay1&amp;file=6thWorldChampionshipSportDiving-69.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024CMAS2ndWorldCupFinswimmingIndoorYouth.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Sunday, 24 November 2024</div>
                                      <div class="title">2024 CMAS 2nd World Cup Finswimming Indoor Youth</div>
                                      <div class="imagecount">Images: 203</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1069" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024CMAS2ndWorldCupFinswimmingIndoorYouth&amp;file=2024CMAS2ndWorldCupFinswimmingIndoorYouth-107.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS2ndWorldCupFinswimmingIndoorYouth&amp;file=2024CMAS2ndWorldCupFinswimmingIndoorYouth-107.jpg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS 2nd World Cup Finswimming Indoor Youth" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS2ndWorldCupFinswimmingIndoorYouth&amp;file=2024CMAS2ndWorldCupFinswimmingIndoorYouth-107.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2024CMAS2ndWorldCupFinswimmingIndoorYouth&amp;file=2024CMAS2ndWorldCupFinswimmingIndoorYouth-107.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2ndCMASFreedivingandFinswimmingParasportWorldChampionshipLignanoSabbiadoroItaly.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Monday, 18 November 2024</div>
                                      <div class="title">2nd CMAS Freediving and Finswimming Parasport World Championship, Lignano Sabbiadoro, Italy</div>
                                      <div class="imagecount">Images: 22</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1440" data-height="1080" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2ndCMASFreedivingandFinswimmingParasportWorldChampionshipLignanoSabbiadoroItaly&amp;file=2ndParasportWorldChampionship1.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=2ndCMASFreedivingandFinswimmingParasportWorldChampionshipLignanoSabbiadoroItaly&amp;file=2ndParasportWorldChampionship1.jpg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2nd CMAS Freediving and Finswimming Parasport World Championship, Lignano Sabbiadoro, Italy" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=2ndCMASFreedivingandFinswimmingParasportWorldChampionshipLignanoSabbiadoroItaly&amp;file=2ndParasportWorldChampionship1.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2ndCMASFreedivingandFinswimmingParasportWorldChampionshipLignanoSabbiadoroItaly&amp;file=2ndParasportWorldChampionship1.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/WorldChampionshipParasportFreedivingandFinswimmingtechnicalmeetingLignanoSabbiadoro.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Friday, 15 November 2024</div>
                                      <div class="title">World Championship Parasport Freediving and Finswimming technical meeting, Lignano Sabbiadoro</div>
                                      <div class="imagecount">Images: 5</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1200" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=WorldChampionshipParasportFreedivingandFinswimmingtechnicalmeetingLignanoSabbiadoro&amp;file=technical-meeting-5.jpeg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=WorldChampionshipParasportFreedivingandFinswimmingtechnicalmeetingLignanoSabbiadoro&amp;file=technical-meeting-5.jpeg" class="eventgallery-lazyme eg-img lazyloaded eventgallery-lazyload-loaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="World Championship Parasport Freediving and Finswimming technical meeting, Lignano Sabbiadoro" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=WorldChampionshipParasportFreedivingandFinswimmingtechnicalmeetingLignanoSabbiadoro&amp;file=technical-meeting-5.jpeg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=WorldChampionshipParasportFreedivingandFinswimmingtechnicalmeetingLignanoSabbiadoro&amp;file=technical-meeting-5.jpeg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Tuesday, 12 November 2024</div>
                                      <div class="title">2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 3</div>
                                      <div class="imagecount">Images: 59</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1067" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3-18.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3-18.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 3" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3-18.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay3-18.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Sunday, 10 November 2024</div>
                                      <div class="title">2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 2</div>
                                      <div class="imagecount">Images: 42</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1067" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2-19.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2-19.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 2" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2-19.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay2-19.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Sunday, 10 November 2024</div>
                                      <div class="title">2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 1</div>
                                      <div class="imagecount">Images: 46</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1600" data-height="1067" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1-16.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1-16.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS 13th European Championship Underwater Rugby Juniors Open Day 1" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1-16.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2024CMAS13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1&amp;file=13thEuropeanChampionshipUnderwaterRugbyJuniorsOpenDay1-16.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024Albania-GeneralSmart.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Wednesday, 23 October 2024</div>
                                      <div class="title">2024 CMAS WORLD CHAMPIONSHIP VISUAL - General Smart</div>
                                      <div class="imagecount">Images: 9</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="1440" data-height="1080" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024Albania-GeneralSmart&amp;file=1+SMART+-+Spain+-+Yesus+Yeray+Delgado+Dorta+-+Abigail+Martin+Menandez.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=2024Albania-GeneralSmart&amp;file=1+SMART+-+Spain+-+Yesus+Yeray+Delgado+Dorta+-+Abigail+Martin+Menandez.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS WORLD CHAMPIONSHIP VISUAL - General Smart" data-size="auto" srcset="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=640&amp;folder=2024Albania-GeneralSmart&amp;file=1+SMART+-+Spain+-+Yesus+Yeray+Delgado+Dorta+-+Abigail+Martin+Menandez.jpg" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=1600&amp;folder=2024Albania-GeneralSmart&amp;file=1+SMART+-+Spain+-+Yesus+Yeray+Delgado+Dorta+-+Abigail+Martin+Menandez.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024Albania-GeneralWAModel.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Wednesday, 23 October 2024</div>
                                      <div class="title">2024 CMAS WORLD CHAMPIONSHIP VISUAL - General WA Model</div>
                                      <div class="imagecount">Images: 18</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="720" data-height="1080" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024Albania-GeneralWAModel&amp;file=1+WA+Model+-+Portugal+-+Nuno+Goncalves+-+Ana+Gomes.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024Albania-GeneralWAModel&amp;file=1+WA+Model+-+Portugal+-+Nuno+Goncalves+-+Ana+Gomes.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS WORLD CHAMPIONSHIP VISUAL - General WA Model" data-size="auto" srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024Albania-GeneralWAModel&amp;file=1+WA+Model+-+Portugal+-+Nuno+Goncalves+-+Ana+Gomes.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div class="item-container item-container-big">
                          <div class="item item_first">
                             <a href="/gallery/event/2024Albania-GeneralWideAngle.html">
                                <div class="eg-content">
                                   <div class="data">
                                      <div class="date">Wednesday, 23 October 2024</div>
                                      <div class="title">2024 CMAS WORLD CHAMPIONSHIP VISUAL - General Wide Angle</div>
                                      <div class="imagecount">Images: 13</div>
                                   </div>
                                   <div class="images event-thumbnails">
                                      <div class="event-thumbnail">
                                         <img data-width="720" data-height="1080" data-data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=104&amp;folder=2024Albania-GeneralWideAngle&amp;file=1+Wide+Angle+-+Italy+-+Fabio+Iardino++-+Chiara+Scrigner+.jpg" data-src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024Albania-GeneralWideAngle&amp;file=1+Wide+Angle+-+Italy+-+Fabio+Iardino++-+Chiara+Scrigner+.jpg" class="eventgallery-lazyme  eg-img lazyloaded" loading="lazy" height="500" width="500" data-srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" style="width: 429.656px; height: 430px; display: block; margin: auto;" alt="2024 CMAS WORLD CHAMPIONSHIP VISUAL - General Wide Angle" data-size="auto" srcset="https://www.cmas.org/media/com_eventgallery/frontend/images/blank.gif" src="https://www.cmas.org/components/com_eventgallery/helpers/image.php?&amp;width=720&amp;folder=2024Albania-GeneralWideAngle&amp;file=1+Wide+Angle+-+Italy+-+Fabio+Iardino++-+Chiara+Scrigner+.jpg">                                                    
                                      </div>
                                      <div style="clear:both"></div>
                                   </div>
                                </div>
                             </a>
                          </div>
                       </div>
                       <div style="clear:both"></div>
                    </div>
                    <form method="post" name="adminForm">
                       <div class="com-content-category__navigation w-100">
                          <p class="com-content-category__counter counter float-right pt-3 pr-2">
                             Page 1 of 6            
                          </p>
                          <div class="com-content-category__pagination">
                             <ul class="pagination ms-0 mb-4">
                                <li class="pagination-start disabled page-item">	</li>
                                <li class="disabled page-item">
                                   <span class="page-link" aria-hidden="true"><span class="fas fa-angle-double-left" aria-hidden="true"></span></span>
                                </li>
                                <li class="pagination-prev disabled page-item">	</li>
                                <li class="disabled page-item">
                                   <span class="page-link" aria-hidden="true"><span class="fas fa-angle-left" aria-hidden="true"></span></span>
                                </li>
                                <li class="page-item disabled">		</li>
                                <li class="active page-item">
                                   <span aria-current="true" aria-label="Page 1" class="page-link">1</span>
                                </li>
                                <li class="page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to page 2" href="/gallery/events.html?start=12" class="page-link">
                                   2		</a>
                                </li>
                                <li class="page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to page 3" href="/gallery/events.html?start=24" class="page-link">
                                   3		</a>
                                </li>
                                <li class="page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to page 4" href="/gallery/events.html?start=36" class="page-link">
                                   4		</a>
                                </li>
                                <li class="page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to page 5" href="/gallery/events.html?start=48" class="page-link">
                                   5		</a>
                                </li>
                                <li class="page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to page 6" href="/gallery/events.html?start=60" class="page-link">
                                   6		</a>
                                </li>
                                <li class="pagination-next page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to next page" href="/gallery/events.html?start=12" class="page-link">
                                   <span class="fas fa-angle-right" aria-hidden="true"></span>		</a>
                                </li>
                                <li class="pagination-end page-item">	</li>
                                <li class="page-item">
                                   <a aria-label="Go to end page" href="/gallery/events.html?start=60" class="page-link">
                                   <span class="fas fa-angle-double-right" aria-hidden="true"></span>		</a>
                                </li>
                             </ul>
                          </div>
                       </div>
                    </form>
                 </div>
              </div>
           </main>
        </div>
     </div>
    <div class="divider-40 divider-xl-50"></div>


@endsection
