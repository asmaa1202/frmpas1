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


<section class="ls s-py-90 s-py-xl-160">
    <div class="container">
        <div class="row c-gutter-60">
            <main class="col-lg-7 col-xl-8">
                <h4>Mot du président de la FRMPAS</h4>
                <!-- .entry-header -->
                <article class="vertical-item content-padding hero-bg post type-post status-publish format-standard has-post-thumbnail">

                    <!-- .post-thumbnail -->
                   

                   
                    <div class="item-content">
                   <div class="text-center">
                            <img src="{{asset('assets/images/team/pesident.jpeg')}}" alt="img" style="width: 180px !important;height: 220px !important;">
                        </div>
                        <div class="entry-content py-4">
                         
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
                                <ul>
                                    <li style="font-weight:600;">Garantir la sécurité via une rigueur et une discipline élevée</li>
                                    <li style="font-weight:600;">Veiller à la stricte application des standards en vigueur qu'elle fait régulièrement évoluer</li>
                                    <li style="font-weight:600;">Contribuer activement à la préservation de l'environnement marin et aquatique</li>
                                    <li style="font-weight:600;">Etre le Yeux du Maroc Sous l'Eau avec toute la vigilance et la réactivité requises</li>
                                    <li style="font-weight:600;">Dignement représenter le Maroc qui fait partie des 1ers pays reconnaissant la CMAS</li>
                                </ul>
                               
                                
                                  
                                
                            <p>
                                Je souhaite à tous nos Amis Plongeurs d'excellentes et mémorables plongées tout le long de notre beau littoral de 3.500 kms de long ainsi que dans toutes les autres destinations mondiales.
                            </p>    
                                
                                
                                {{-- <br><br> --}}
                                <p style="font-weight:500;">
                                    Abdelaziz ALAZRAK
                                </p>
                            

                        </div>

                        <div class="entry-content">
                            {{-- <p>
                               {{ $blog->subject_body }}
                            </p> --}}
                            

                        </div><!-- .entry-content -->
                        <div class="entry-footer">
                            <p class="social-icons">
                                <a href="https://www.instagram.com/" class="fa bg-icon rounded-icon fa-instagram" title="instagram"></a>
                                <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                                <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                            </p>

                        </div>
                    </div>
                    <!-- .item-content -->
                </article>

                <div class="divider-60"></div>

      

            </main>
            @if(count($recentBlogs)>0)
            <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Actualités récentes</h3>
                    <ul class="list-unstyled">
                        @foreach($recentBlogs as $blog)
                            <li class="media">
                                <a class="media-image" href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}">
                                    <img src="{{asset($blog->image)}}" alt="img">
                                </a>
                                <div class="media-body">
                                    {{-- <h4 class="entry-title mb-3">
                                        <a href="{{ route('actualites.show', ['hash' => $blog->blog_hash ]) }}"  rel="bookmark" class="title-truncate">{{$blog->title}}</a>
                                    </h4> --}}
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
                            {{-- <h4 class="entry-title mb-3">
                                <a href="{{ route('actualites.show', ['id' => $blog->id]) }}" rel="bookmark" class="title-truncate">
                                    {{ $blog->title }}
                                </a>
                            </h4> --}}
                            
                        @endforeach

                    </ul>
                </div>


            </aside>
            @endif
        </div>
    </div>
</section>




<div class="divider-40 divider-xl-50"></div>


@endsection
