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
                <h1>Actualités</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Actualités
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
                @foreach($blogs as $blog)
                <article class="text-center text-md-left vertical-item content-padding hero-bg post type-post status-publish format-standard has-post-thumbnail sticky">
                    
                    <div class="item-media post-thumbnail">
                        <img src="{{asset($blog->image)}}" alt="img" style="height: 300px !important;">
                        <div class="media-links">
                            <a class="abs-link" href="{{ route('actualites.show', ['hash'=>$blog->blog_hash ]) }}"></a>
                        </div>
                    </div><!-- .post-thumbnail -->
                    <div class="item-content">
                        <header class="entry-header">
                            <h4 class="entry-title mb-3">
                                <a href="{{ route('actualites.show', ['hash'=>$blog->blog_hash ]) }}" rel="bookmark">
                                    
                                    {{$blog->title}}
                                </a>
                            </h4>
                            <div class="entry-meta">
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <a href="{{ route('actualites.show', ['hash'=>$blog->blog_hash ]) }}" rel="bookmark">
                                        <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}
                                        </time>
                                    </a>
                                </span>
                             
                            </div>
                            <!-- .entry-meta -->

                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; padding-bottom: 3px;">
                                {{$blog->subject_preview}}
                            </p>
                        </div>
                       
                        
                    </div><!-- .item-content -->
                </article>
                @endforeach

                @if($blogs->hasPages())
                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                
                        {{-- Lien de la page précédente --}}
                        @if ($blogs->onFirstPage())
                            <a class="prev page-numbers disabled" aria-disabled="true">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        @else
                            <a class="prev page-numbers" href="{{ $blogs->previousPageUrl() }}">
                                <i class="fa fa-chevron-left"></i>
                                <span class="screen-reader-text">Previous page</span>
                            </a>
                        @endif
                
                        {{-- Liens de pagination pour chaque page --}}
                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            @if ($page == $blogs->currentPage())
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
                
                        {{-- Lien de la page suivante --}}
                        @if ($blogs->hasMorePages())
                            <a class="next page-numbers" href="{{ $blogs->nextPageUrl() }}">
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
</section>



<div class="divider-40 divider-xl-50"></div>


@endsection
