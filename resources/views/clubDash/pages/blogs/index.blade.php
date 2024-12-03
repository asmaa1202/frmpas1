@extends('plongeurDash.layout.master')

@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Blogs</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('blogs.create') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                </a>
            </div>
        </div>
    </div>
</div>

@foreach ($blogs as $item)
<article class="card mb-3 overflow-hidden">

    <div class="card-body p-0">
        <div class="row g-0">
            <div class="col-md-4 col-lg-3">
                <div class="hoverbox h-md-100"><a class="text-decoration-none"
                        href="{{route('plongeur.blogs.details', ['id' => $item->id])}}"
                        data-gallery="attachment-bg"><img class="h-100 w-100 object-fit-cover" src="{{ $item->image }}"
                            alt="" /></a>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 p-x1">
                <div class="row g-0 h-100">
                    <div class="col-lg-8 col-xxl-9 d-flex flex-column pe-x1">
                        <div class="d-flex gap-2 flex-wrap mb-3">
                            @foreach (explode(',', $item->tag) as $tag)
                            <span class="badge bg-info" style="font-size: 12;">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <h3 class="mt-3 mt-sm-0 fs-0 fs-lg-1">
                            <a href="{{route('plongeur.blogs.details', ['id' => $item->id])}}"> {{ $item->title }} </a>
                            </a>
                        </h3>
                        <h5 class="fs-0">
                            {{ $item->createur->nom . ' ' . $item->createur->prenom }}
                        </h5>

                        <p class="fs--1 mt-2 d-none d-lg-block">{{ $item->description }}</p>
                        <div class="flex-1 d-flex align-items-end fw-semi-bold fs--1"><span class="me-1 text-900">
                                {{ $item->created_at }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endforeach
<div class="d-flex justify-content-center mt-3">
    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev">
        <span class="fas fa-chevron-left"></span>
    </button>
    <ul class="pagination mb-0"></ul>
    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span
            class="fas fa-chevron-right"></span></button>
</div>
<div id="notification"></div>
@endsection