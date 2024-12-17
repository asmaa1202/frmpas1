@extends('layout.master')

@section('custom-css')

<style>

.vertical-item {

    height: 400px;
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
                <h1>Contact</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="./">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Contact
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

{{-- <section class="ls s-py-90 s-py-xl-160 c-gutter-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-50 mb-lg-0 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-call"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Phone</span>
                        </h5>
                        <p class="color-font">
                          	<a href="tel:+88003532455">+212 6 61 14 09 12</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
            <div class="col-lg-4 mb-50 mb-lg-0 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-placeholder"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Adresse</span>
                        </h5>
                        <p class="color-font">
                            <a href="https://maps.app.goo.gl/EYWVZa4SQKLGEGQo7" target="_blank">350 Lot Lina - 3ème étage - Sidi Maârouf - Casablanca 20520</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
            <div class="col-lg-4 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-email"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Email</span>
                        </h5>
                        <p class="color-font">
                            <a href="mailto:frmpas@frmpas.com">frmpas@frmpas.com</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="ls s-py-90 s-py-xl-160 c-gutter-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 ml-auto mr-auto animate" data-animation="pullDown">
                <div class="inner-wrap ds p-30 p-xl-40">
                    <div class="divider-15"></div>
                    <h5 class="mb-4 mt-0">Laisser un commentaire</h5>
                    <form class="c-mb-10 c-gutter-10" action="{{route('contact.us.store')}}" method="POST"id="contact_us" >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-placeholder">
                                    <label for="name">Nom <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-placeholder">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-placeholder">
                                    <label for="phone">Tel<span class="required">*</span></label>
                                    <input type="tel" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Tel">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-placeholder">
                                    <label for="subject">Sujet<span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Sujet">
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.97 8.03a.75.75 0 0 0-1.06 1.06l2.5 2.5a.75.75 0 0 0 1.06 0l4.5-4.5a.75.75 0 0 0-1.06-1.06L8 9.44 5.97 8.03z"/>
                                </svg> &nbsp;
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row mt-30 mt-xl-50">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{-- <button type="submit" name="contact_submit" class="btn btn-maincolor btn-medium">Envoyer
                                    </button> --}}
                                    <button type="submit" class="btn btn-maincolor btn-medium">Envoyer</button>

                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="divider-15"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls bottom-500-xl s-pb-90 s-pb-xl-0 text-center text-lg-left ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-50 mb-lg-0 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-call"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Phone</span>
                        </h5>
                        <p class="color-font">
                          	<a href="tel:+88003532455">+212 6 61 14 09 12</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
            <div class="col-lg-4 mb-50 mb-lg-0 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-placeholder"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Adresse</span>
                        </h5>
                        <p class="color-font">
                            <a href="https://maps.app.goo.gl/EYWVZa4SQKLGEGQo7" target="_blank">350 Lot Lina - 3ème étage - Sidi Maârouf - Casablanca 20520</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
            <div class="col-lg-4 height-100 animate" data-animation="pullDown">
                <div class="inner-wrap p-40 p-xl-70  hero-bg">
                    <div class="icon-box text-center text-md-center   title-size-medium">
                        <div class="icon-styled fs-50 color-darkgrey">
                            <i class="ico ico-email"></i>
                        </div>
                        <h5 class="text-center mt-30 color-darkgrey">
                            <span class="">Email</span>
                        </h5>
                        <p class="color-font">
                            <a href="mailto:frmpas@frmpas.com">frmpas@frmpas.com</a>
                        </p>
                    </div><!-- .icon-box -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls container-px-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class=" page_map" data-draggable="true" data-scrollwheel="true">


                    <div class="marker">
                        <div class="marker-address">sydney, australia, Liverpool street, 66</div>
                        <div class="marker-title">First Marker</div>
                        <div class="marker-description">

                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-map-marker"></i>
                                        </span>

                                        <span>
                                            Sydney, Australia, Liverpool street, 66
                                        </span>
                                    </span>
                                </li>

                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-phone"></i>
                                        </span>

                                        <span>
                                            1 (800) 123-45-67
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9d4d8d0d5f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <img class="marker-icon" src="images/map_marker_icon.png" alt="img">
                    </div>
                    <!-- .marker -->

                    <div class="marker">
                        <div class="marker-address">sydney, australia, Glenmore Road, 182</div>
                        <div class="marker-title">Second Marker</div>
                        <div class="marker-description">

                            <ul class="list-unstyled">
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-map-marker"></i>
                                        </span>

                                        <span>
                                            Sydney, Australia, Glenmore Road, 182
                                        </span>
                                    </span>
                                </li>

                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-phone"></i>
                                        </span>

                                        <span>
                                            1 (800) 123-45-67
                                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="icon-inline">
                                        <span class="icon-styled color-main">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                        <span>
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="422f232b2e02273a232f322e276c212d2f">[email&#160;protected]</a>
                                        </span>
                                    </span>
                                </li>
                            </ul>

                        </div>

                        <img class="marker-icon" src="images/map_marker_icon2.png" alt="img">
                    </div>
                    <!-- .marker -->

                    <div class="marker">
                        <div class="marker-address">sydney, australia, oxford street, 88</div>
                        <div class="marker-title">Third Marker</div>
                        <div class="marker-description">
                            <p><strong>Sydney, Australia, Oxford Street, 88</strong>.<br>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Aliquid cumque,
                                deserunt dolor.
                            </p>
                        </div>

                        <img class="marker-icon" src="images/map_marker_icon3.png" alt="img">
                    </div>
                    <!-- .marker -->

                    <div class="marker">
                        <div class="marker-address">sydney, australia, Liverpool street, 2</div>
                        <div class="marker-title">Fourth Marker</div>
                        <div class="marker-description">
                            <p><strong>Sydney, Australia, Liverpool Street, 2</strong>.<br>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Aliquid cumque,
                                deserunt dolor.
                            </p>
                        </div>

                        <img class="marker-icon" src="images/map_marker_icon4.png" alt="img">
                    </div>
                    <!-- .marker -->


                </div>
            </div>
        </div>
    </div>
</section>

@endsection