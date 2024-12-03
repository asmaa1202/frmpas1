@extends('plongeurDash.layout.master')

@section('content')
<div class="card mb-3">
    <div class="card-header position-relative">
        <div class="row">
            <div class="col-6">
                <h5 class="mb-0 mt-1">Tous les cours</h5>
                {{-- <div class="bg-holder d-none d-md-block bg-card"
                    style="background-image:url({{ asset('dashboard/img/illustrations/corner-6.png') }});">
                </div> --}}
                <!--/.bg-holder-->
            </div>
            <div class="col-6">

                <div class="col-6 d-xl-none">
                    <button class="btn btn-sm p-0 btn-link position-relative" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">
                        <svg class="svg-inline--fa fa-filter fa-w-16 fs-0 text-700" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-filter fs-0 text-700"></span> Font Awesome fontawesome.com -->
                    </button>
                </div>
                {{-- <div class="col">
                <form class="position-relative">
                    <input class="form-control form-control-sm search-input lh-1 rounded-2 ps-4" type="search"
                        placeholder="Search..." aria-label="Search">
                    <div class="position-absolute top-50 start-0 translate-middle-y ms-2"><svg
                            class="svg-inline--fa fa-search fa-w-16 text-400 fs--1" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-search text-400 fs--1"></span> Font Awesome fontawesome.com -->
                    </div>
                </form>
            </div> --}}
                <div class="col position-sm-relative position-absolute top-0 end-0 me-3 me-sm-0 p-0">
                    <div class="row g-0 g-md-3 justify-content-end">
                        <div class="col-auto">
                            <form class="row gx-2">
                                <div class="col-auto d-none d-lg-block"><small class="fw-semi-bold">Filtrer par:</small>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions">
                                        @foreach ($niveaux as $niveau)
                                        <option value={{$niveau->id}}>{{$niveau->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-3 g-3">
    @foreach ($cours as $item)
    <article class="col-md-6 col-xxl-4">
        <div class="card h-100 overflow-hidden">
            <div class="card-body p-0 d-flex flex-column justify-content-between">
                <div>
                    <div class="hoverbox text-center"><a class="text-decoration-none" target="__balnk__"
                            href="{{ $item->lien }}" data-gallery="attachment-bg">
                            <img src="{{$item->icon}}" height="230px" style="padding: 35px;" />
                        </a>
                        <div class="hoverbox-content flex-center pe-none bg-holder overlay overlay-2">
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="fs-0 mb-2">
                            <a class="text-dark" target="_blank" href="{{ $item->lien }}">{{ $item->nom }}</a>
                        </h5>
                        <h5 class=" fs-0">{{ $item->created_at }}
                        </h5>
                    </div>
                </div>
                <div class="row g-0 mb-3 align-items-end">
                    <div class="col ps-3">
                        <h4 class="fs-1 text-warning d-flex align-items-center">
                            <span>{{ $item->niveau->label }}</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @endforeach
</div>
@endsection