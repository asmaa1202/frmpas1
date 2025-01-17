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


<section class="ls s-py-90 s-py-xl-160">
    <div class="container">
        <div class="row c-gutter-60">
            <main class="col-lg-7 col-xl-8">
                <h4>{{ $evenement->title }}</h4>
                <header class="entry-header">
                    <div class="entry-meta">
                        <span>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <a href="blog-single-right.html" rel="bookmark">
                                <time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">{{ \Carbon\Carbon::parse($evenement->created_at)->format('d.m.Y') }}</time>
                            </a>
                        </span>
                       
                    </div>
                    <!-- .entry-meta -->

                </header>
                <!-- .entry-header -->
                <article class="vertical-item content-padding hero-bg post type-post status-publish format-standard has-post-thumbnail">

                    <!-- .post-thumbnail -->
                    <div class="item-media post-thumbnail">
                        <img src="{{asset($evenement->path_cover)}}" alt="img" style="height: 300px !important; width:300px;">
                    </div>

                   
                    <div class="item-content">
                        <h6>{!! $evenement->subject_preview !!}</h6>
                        <p>{!! $evenement->subject_body !!}</p>
                        <div class="entry-content my-3">

                            <h6 style="margin-top:-0.5px !important; color:green;">Informations sur l'événement</h6>
                           
                            <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                <tbody>
                                    <tr class="woocommerce-table__line-item order_item">
                        
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#" style="color:red;font-weight:bold;">Date de l'événement</a>
                                        </td>
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#">{{ \Carbon\Carbon::parse($evenement->date_debut_evenement)->format('d.m.Y') ?? '####' }}</a>
                                        </td> 
                                        
                                    </tr>
                                    <tr class="woocommerce-table__line-item order_item">
                        
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#" style="color:red;font-weight:bold;">Date de fin de l'événement</a>
                                        </td>
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#">{{ \Carbon\Carbon::parse($evenement->date_fin_evenement)->format('d.m.Y') ?? '####' }}</a>
                                        </td> 
                                        
                                    </tr>
                                    <tr class="woocommerce-table__line-item order_item">
                        
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#" style="color:red;font-weight:bold;">Capacité</a>
                                        </td>
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#">{{ $evenement->capacite ?? '####' }} </a>
                                        </td> 
                                        
                                    </tr>

                                    <tr class="woocommerce-table__line-item order_item">
                        
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#" style="color:red;font-weight:bold;">Emplacement</a>
                                        </td>
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#">{{ $evenement->emplacement ?? '####' }}</a>
                                        </td> 
                                        
                                    </tr>
                                    <tr class="woocommerce-table__line-item order_item">
                        
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#" style="color:red;font-weight:bold;">Pièce jointe</a>
                                        </td>
                                        <td class="woocommerce-table__product-name product-name">
                                            <a href="#">####</a>
                                        </td> 
                                        
                                    </tr>
                                </tbody>
                        
                            </table>

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
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($evenement->created_at)->format('d.m.Y') }}
                                </p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>


            </aside>
        </div>
    </div>
</section>




<div class="divider-40 divider-xl-50"></div>


@endsection
