@extends('plongeurDash.layout.master')

@section('content')
    <div class="content">
        <div class="card overflow-hidden mb-3" data-bs-theme="light">
            <div class="card-body bg-black">
                <div class="bg-holder rounded-3"
                    style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/course-details-bg.png') }})">
                </div>
                <!--/.bg-holder-->

                <div class="row">
                    <div class="col-xl-10 position-relative">
                        <div class="row g-3 align-items-center">
                            <div class="col-lg-5">
                                <div class="position-relative">
                                    <div class="bg-holder rounded-1 overlay"
                                        style="background-image:url({{ $blog->image }})">
                                    </div>
                                    <!--/.bg-holder-->
                                    <a class="text-decoration-none position-relative d-block py-7 text-center"
                                        href="{{ $blog->image }}" data-gallery="attachment-bg"><img class="rounded-1"
                                            src="{{ asset('dashboard/img/icons/play.svg') }})" width="60"
                                            alt="" /></a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <h6 class="fw-semi-bold text-400">Blog by <a class="text-info"
                                        href="../../../app/e-learning/trainer-profile.html">{{ $blog->createur->nom . '' . $blog->createur->prenom }}</a>
                                </h6>
                                <h2 class="fw-bold text-white"> {{ $blog->title }}</h2>
                                @foreach (explode(',', $blog->tag) as $tag)
                                    <span class="badge bg-info" style="font-size: 12;">{{ $tag }}</span>
                                @endforeach
                                <p class="mb-0 fw-medium text-400">
                                    {{ $blog->description }}

                            </div>
                        </div>
                        <hr class="text-secondary text-opacity-50" />
                        <ul class="list-unstyled d-flex flex-wrap gap-3 fs--1 fw-semi-bold text-300 mt-3 mb-0">
                            <li><span><i class="fas fa-calendar-alt"></i> </span>{{ $blog->created_at }} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
           <div class="card-header">
            <h5 class="card-title">Contenu</h5>
            <div class="card-body">{!! $blog->content !!}</div>
           </div>
        </div>
    </div>
@endsection
