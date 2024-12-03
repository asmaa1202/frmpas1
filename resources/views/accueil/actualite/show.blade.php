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
                <h1>Actualité</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Actualité
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
                <h4>{{ $blog->title }}</h4>
                <header class="entry-header">
                    <div class="entry-meta">
                        <span>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="#" rel="bookmark">
                                <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d.m.Y') }}
                                </time>
                            </a>
                        </span>
                        <span class="comments-link">
                            <i class="fa fa-user"></i>
                            <a href="#">admin</a>
                        </span>

                    </div>
                    <!-- .entry-meta -->

                </header>
                <!-- .entry-header -->
                <article class="">

                    <!-- .post-thumbnail -->
                    <div class="item-media post-thumbnail">
                        <img src="{{asset($blog->image)}}" alt="img" style="height: 300px !important;">
                    </div>

                   
                    <div class="item-content">

                        <div class="entry-content">
                            <p>
                               {!! $blog->content !!}
                            </p>
                            

                        </div>

                        {{-- <div class="entry-content">
                            <p>
                               {{ $blog->subject_body }}
                            </p>
                            

                        </div><!-- .entry-content --> --}}
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
