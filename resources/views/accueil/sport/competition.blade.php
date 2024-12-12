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
                <h1>Competition</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Sport</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Competition
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>


<section class="text-center" style="margin-top: 155px;">
    <div class="container">
     
            <form action="{{route('sport.competition')}}" method="GET">
                @csrf
               <div class="row">
                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="type_document" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez type document</option>
                        
                            {{-- <option value="Communique">Communiqué </option> --}}
                            <option value="competition">Compétition Nationale</option>
                            <option value="coupe_du_trone">Coupe du Trône</option>
                            <option value="resultat">Résultat</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="type" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez type</option>
                            
                            <option value="psp">Plongée Sportive en Piscine</option>
                            <option value="nap">Nage Avec Palmes</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <select name="saison" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                            <option value="">Selectionnez saison</option>
                            
                            <option value="2024-2025">2024-2025</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2020-2021">2020-2021</option>
                        
                        </select>
                    </p>

                    <p class="form-row form-row-last col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-darkgrey">chercher</button>
                    </p>
                </div>
            </form>
        
        
    </div>
</section>

<section class="my-3">
    <div class="container">
        <div class="row">
            <main class="col-lg-7 col-xl-8">
                <div class="row">
                    @if(isset($documents))
                        @foreach($documents as $document)
                            <div class="col-md-6 mb-4">
                                <article class="post text-center text-md-left vertical-item content-padding hero-bg" style="height:;">
                                    <div class="item-content">
                                        <header class="entry-header">
                                            @if(isset($document->zone))
                                            <span class="cat-links">
                                                <a href="#" rel="category tag">{{ $document->zone }}</a>,
                                                <a href="#" rel="category tag">{{ $document->etape }}</a>
                                            </span>
                                            @endif
                                            <h4 class="entry-title mb-3">
                                                <a href="#" rel="bookmark">{{ $document->titre }}</a>
                                            </h4>
                                            <div class="">
                                                @if(isset($document->type_document) && ($document->type_document == 'competition' || $document->type_document == 'coupe_du_trone'))
                                                    <div>
                                                        <i class="fa fa-map-marker"></i><span> {{ $document->emplacement }}</span>
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <a href="#" rel="bookmark">
                                                            <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">
                                                                {{ $document->date_competion }} {{ $document->date_competition2 }}
                                                            </time>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </header>
                                        <br>
                                        <div class="entry-content" style="position: relative;">
                                            <a href="{{ route('download.document', ['filename' => $document->document_url]) }}" class="btn btn-warning" target="_blank">
                                                <i class="fa fa-download" aria-hidden="true"></i> Télécharger
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
                
                @if(isset($documents) && $documents->hasPages())
                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                
                        @if ($documents->onFirstPage())
                            <a class="prev page-numbers disabled" aria-disabled="true">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        @else
                            <a class="prev page-numbers" href="{{ $documents->previousPageUrl() }}">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        @endif
                
                        @foreach ($documents->getUrlRange(1, $documents->lastPage()) as $page => $url)
                            @if ($page == $documents->currentPage())
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
                
                        @if ($documents->hasMorePages())
                            <a class="next page-numbers" href="{{ $documents->nextPageUrl() }}">
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

            @if(count($recentBlogs) > 0)
            <aside class="col-lg-5 col-xl-4">
                <div class="widget widget_recent_posts">
                    <h3 class="widget-title">Actualités récentes</h3>
                    <ul class="list-unstyled">
                        @foreach($recentBlogs as $blog)
                            <li class="media">
                                <a class="media-image" href="blog-single-right.html">
                                    <img src="{{ asset($blog->image) }}" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="entry-title mb-3">
                                        <a href="{{ route('actualites.show', ['hash' => $blog->blog_hash]) }}" rel="bookmark" class="title-multiline">
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
</section>


<div class="divider-40 divider-xl-50"></div>


@endsection
