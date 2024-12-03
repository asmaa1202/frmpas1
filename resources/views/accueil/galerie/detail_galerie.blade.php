@extends('layout.master')

@section('custom-css')

<style>

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

<section class="ls s-py-90 s-py-xl-160">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="vertical-item content-padding hero-bg">
                    <div class="item-media">
                        <div class="owl-carousel" data-margin="0" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-dots="true">
                            <a href="{{asset('assets/images/gallery/04.jpg')}}" class="photoswipe-link" data-width="850" data-height="400">
                                <img src="{{asset('assets/images/gallery/04.jpg')}}" alt="img">
                            </a>
                            <a href="{{asset('assets/images/gallery/05.jpg')}}" class="photoswipe-link" data-width="850" data-height="400" data-iframe="https://www.youtube.com/embed/mcixldqDIEQ">
                                <img src="{{asset('assets/images/gallery/05.jpg')}}" alt="img">
                            </a>
                            <a href="{{asset('assets/images/gallery/06.jpg')}}" class="photoswipe-link" data-width="850" data-height="400" data-iframe="//player.vimeo.com/video/1084537">
                                <img src="{{asset('assets/images/gallery/06.jpg')}}" alt="img">
                            </a>
                            <a href="{{asset('assets/s/gallery/07.jpg')}}" class="photoswipe-link" data-width="850" data-height="400">
                                <img src="{{asset('assets/s/gallery/07.jpg')}}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="item-content">
                        <h5>
                            Lorem Ipsum Dolor
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aliquam atque beatae, fugit iste iure minima molestias nemo numquam pariatur provident quasi quos reiciendis sint sunt unde velit voluptatibus. Ab accusamus, aliquam consequatur optio porro quos sequi sit tempora tempore tenetur, velit vitae, voluptatum.
                        </p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/" class="fa bg-icon rounded-icon fa-facebook" title="facebook"></a>
                            <a href="https://twitter.com/" class="fa bg-icon rounded-icon fa-twitter" title="twitter"></a>
                            <a href="https://www.linkedin.com/" class="fa bg-icon rounded-icon fa-linkedin" title="linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- PhotoSwipe CSS and JS (ensure these are linked) -->
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5.3.0/dist/photoswipe.css">
<script src="https://unpkg.com/photoswipe@5.3.0/dist/photoswipe.umd.min.js"></script>

<section class="gallery-section">
    <div class="container-fluid">
        <div class="row">
            <!-- Loop through your images here -->
            {{-- @foreach($images as $image) --}}
                <div class="col-md-4 mb-3">
                    <a href="{{asset('assets/images/gallery/04.jpg')}}" data-pswp-width="850" data-pswp-height="400" target="_blank" class="gallery-item">
                        <img src="{{asset('assets/images/gallery/04.jpg')}}" alt="Image description" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{asset('assets/images/gallery/04.jpg')}}" data-pswp-width="850" data-pswp-height="400" target="_blank" class="gallery-item">
                        <img src="{{asset('assets/images/gallery/04.jpg')}}" alt="Image description" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{asset('assets/images/gallery/04.jpg')}}" data-pswp-width="850" data-pswp-height="400" target="_blank" class="gallery-item">
                        <img src="{{asset('assets/images/gallery/04.jpg')}}" alt="Image description" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <a href="{{asset('assets/images/gallery/04.jpg')}}" data-pswp-width="850" data-pswp-height="400" target="_blank" class="gallery-item">
                        <img src="{{asset('assets/images/gallery/04.jpg')}}" alt="Image description" class="img-fluid">
                    </a>
                </div>

                {{-- @endforeach --}}
        </div>
    </div>
</section>

<!-- PhotoSwipe Gallery -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!-- Initialize PhotoSwipe -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const pswpElement = document.querySelectorAll('.pswp')[0];
    const items = Array.from(document.querySelectorAll('.gallery-item')).map(link => ({
        src: link.href,
        w: link.getAttribute('data-pswp-width'),
        h: link.getAttribute('data-pswp-height')
    }));

    Array.from(document.querySelectorAll('.gallery-item')).forEach((link, index) => {
        link.onclick = (e) => {
            e.preventDefault();
            const gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, { index });
            gallery.init();
        };
    });
});
</script>



<div class="divider-40 divider-xl-50"></div>


@endsection
