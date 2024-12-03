@extends('layout.master')

@section('custom-css')

<style>
.text-limited {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Limite à 3 lignes */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis; /* Ajoute des points de suspension */

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
                <h1>Galerie</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Galerie
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<section class="ls s-pt-90 s-pb-60 s-pt-xl-155 s-pb-xl-130">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                {{-- <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-8">
                        <div class="filters gallery-filters text-lg-right">
                            <a href="#" data-filter="*" class="active selected">All</a>
                            <a href="#" data-filter=".kites">Kites</a>
                            <a href="#" data-filter=".kiteboarding">Kiteboarding</a>
                            <a href="#" data-filter=".windsurf">Windsurf</a>
                            <a href="#" data-filter=".sailing">Sailing</a>
                            <a href="#" data-filter=".kiteschool">Kiteschool</a>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters"> --}}

                    {{-- <div class="col-xl-4 col-sm-6 kiteboarding kiteschool">
                        {{-- @foreach($galeries as $galerie) --}}
                        {{-- <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/10.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5 class="text-limited">
                                    <a href="{{route('detail.galerie')}}">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h5>
                                <p class="text-right">12/11/2024</p>
                            </div>
                        </div> --}}
                        {{-- @endforeach --}}
                    {{-- </div> --}}

                    {{-- <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="images/gallery/10.jpg" alt="img">
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="link-anchor" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1">
                                    <a href="gallery-single.html">Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta">
                                    <a href="#">Kiteboarding</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-sm-6 sailing kites entertainment">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/12.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Amet consetetur sadipscing</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 windsurf kiteschool sailing">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/13.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Elitr sed diam nonumy</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 kiteboarding windsurf entertainment">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/14.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Tempor invidunt ut</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 sailing kites">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/15.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Labore et dolore magna</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 windsurf kiteschool kites entertainment">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/17.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Aliquyam erat sed diam</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 kiteboarding kiteschool sailing">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/18.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Voluptua vero</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 kiteboarding windsurf kites">
                        <div class="vertical-item item-gallery content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/19.jpg')}}" alt="img">
                            </div>
                            <div class="item-content dark-bg">
                                <h5>
                                    <a href="{{route('detail.galerie')}}">Eos et accusam justo duo</a>
                                </h5>
                            </div>
                        </div>
                    </div> --}}

                {{-- </div> --}}
                <!-- .isotope-wrapper-->
                <div class="row isotope-wrapper masonry-layout c-mb-60" data-filters=".gallery-filters">
                    @foreach($galeries as $galerie)
                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/10.jpg')}}" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="{{route('detail.galerie')}}">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="{{route('detail.galerie')}}">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/10.jpg')}}" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="{{route('detail.galerie')}}">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="{{route('detail.galerie')}}">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6 kiteboarding kiteschool">

                        <div class="vertical-item text-center ">
                            <div class="item-media">
                                <img src="{{asset('assets/images/gallery/10.jpg')}}" alt="img">
                            </div>
                            <div class="item-content pt-4">
                                <h6 class="mb-1 text-limited">
                                    <a href="{{route('detail.galerie')}}">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit</a>
                                </h6>
                                <p class="item-meta text-right">
                                    <a href="{{route('detail.galerie')}}">12/11/2024</a>
                                </p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>
</section>




<div class="divider-40 divider-xl-50"></div>


@endsection
