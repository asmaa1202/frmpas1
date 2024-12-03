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
                <h1>Événements</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Événements
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<section class="" style="margin-top: 155px;">
    <div class="container">
     
            <form action="{{ route('evenements.index') }}" method="GET">
                @csrf
               <div class="row">
                    <main class="col-lg-9">

                        <p class="form-row form-row-last col-5" id="billing_company_field" data-priority="30">
                            <label for="annee" class="">Année</label>
                            <select name="annee" id="annee" class="input-text">
                                <option value="">Sélectionnez une année</option>
                                @for ($year = 1950; $year <= now()->year; $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </p>
                  
                        <p class="form-row form-row-last col-2">
                            <button type="submit" class="btn btn-warning">chercher</button>
                        </p>
                    </main>
                </div>
            </form>
        
        
    </div>
</section>

<section class="my-3">
    <div class="container">

        <div class="row c-gutter-60">
            <main class="col-lg-7 col-xl-8">
                @foreach($evenements as $evenement)
                <article class="text-center text-md-left vertical-item content-padding hero-bg post type-post status-publish format-standard has-post-thumbnail sticky" style="margin-bottom:-30px ;">
                    {{-- <div class="item-media post-thumbnail">
                        <img src="{{asset($evenement->path_cover)}}" alt="img" style="height: 300px !important;">
                        <div class="media-links">
                            <a class="abs-link" href="{{ route('evenements.show', ['hash' => $evenement->evenement_hash]) }}"></a>
                        </div>
                    </div> --}}
                    <div class="item-content">
                        <header class="entry-header">
                          
                           <h4 class="entry-title mb-3">
                                <a href="{{route('evenements.show', ['hash' => $evenement->evenement_hash ])}}" rel="bookmark">
                                    {{$evenement->title}}
                                </a>
                            </h4>
                            <div class="entry-meta">
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <a href="#" rel="bookmark">
                                        <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">{{ \Carbon\Carbon::parse($evenement->date_debut_evenement)->format('d.m.Y') }}</time>
                                    </a>
                                </span>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    <a href="#" rel="bookmark">
                                        <span>{{ $evenement->emplacement }}</span>
                                    </a>
                                </span>

                            </div>
                          
                        </header>
                     
                       
                    </div>
                </article>
                @endforeach

                @if($evenements->hasPages())
                <nav class="navigation pagination " role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">

                        @if ($evenements->onFirstPage())
                        <a class="prev page-numbers" >
                            <i class="fa fa-chevron-left"></i>
                            <span class="screen-reader-text">Previous page</span>
                        </a>
                        @else
                        <a class="prev page-numbers" href="{{ $evenements->previousPageUrl() }}">
                            <i class="fa fa-chevron-left"></i>
                            <span class="screen-reader-text">Previous page</span>
                        </a>
                        @endif



                        @foreach ($evenements->getUrlRange(1, $evenements->lastPage()) as $page => $url)
                            @if ($page == $evenements->currentPage())
                                <span class="page-numbers current">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    {{ $page }}
                                </span>
                            @else
                                <a class="page-numbers" href="{{ $url }}">
                                    <span class="meta-nav screen-reader-text">Page </span>
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach


                        @if ($evenements->hasMorePages())
                            <a class="next page-numbers" href="{{ $evenements->nextPageUrl() }}">
                                <span class="screen-reader-text">Next page</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        @else
                            <a class="next page-numbers disabled" aria-disabled="true">
                                <span class="screen-reader-text">Next page</span>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        @endif
                       
                    </div>
                </nav>
                @endif





            </main>
            @if(count($recentEvenements)>0)
            <aside class="col-lg-5 col-xl-4">

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Événements récents</h3>
                    <ul class="list-unstyled">
                        @foreach($recentEvenements as $evenement)
                        <li class="media">
                            <a class="media-image" href="{{route('evenements.show', ['hash' => $evenement->evenement_hash ])}}">
                                <img src="{{asset($evenement->path_cover)}}" alt="img">
                            </a>
                            <div class="media-body">

                                <h4 class="entry-title mb-3">
                                    <a href="{{route('evenements.show', ['hash' => $evenement->evenement_hash ])}}" rel="bookmark" class="title-multiline">
                                        {{ $evenement->title }}
                                    </a>
                                </h4>
                                <p class="item-meta">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($evenement->date_debut_evenement)->format('d.m.Y') }}
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
</section>



<div class="divider-40 divider-xl-50"></div>


@endsection
