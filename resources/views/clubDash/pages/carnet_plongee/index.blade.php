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
                <h3>Carnets de plongée</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 mb-lg-0">

    <div class="card-body fs--1">
        <div class="row">
            @foreach ($carnets_plongee as $carnet_plongee)
            <div class="col-md-6 h-100">
                <div class="d-flex btn-reveal-trigger">
                    <div class="calendar">
                        <span
                            class="calendar-month">{{ $carnet_plongee->created_at->locale('fr-FR')->format('F') }}</span>
                        <span
                            class="calendar-day">{{ $carnet_plongee->created_at->locale('fr-FR')->format('d') }}</span>
                        <span class="mt-2 ">{{ $carnet_plongee->created_at->locale('fr-FR')->format('Y') }}</span>
                    </div>
                    <div class="flex-1 position-relative ps-3">
                        <h6 class="">
                            <a class="dropdown-item text-danger fs-0 mb-0" role="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $carnet_plongee->id }}">{{ $carnet_plongee->lieu }}</a>
                        </h6>
                        <div class="modal fade" id="staticBackdrop{{ $carnet_plongee->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                            Détails carnet de plongee
                                        </h5>

                                        <button type="button"
                                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="header-content">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div
                                                    class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3 mb-3">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">#ID</p>
                                                                </div>
                                                                <div class="col-4">: {{$carnet_plongee->id}}</div>
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">Niveau</p>
                                                                </div>
                                                                <div class="col-4">:
                                                                    {{$carnet_plongee->equipePlongeur[0]->plongeur->niveau->label}}
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">Nom/prénom</p>
                                                                </div>
                                                                <div class="col-4">:
                                                                    {{$carnet_plongee->equipePlongeur[0]->plongeur->nom . " " . $carnet_plongee->equipePlongeur[0]->plongeur->prenom}}
                                                                </div>
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">Site</p>
                                                                </div>
                                                                <div class="col-4">: {{$carnet_plongee->site}}</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">Instructeur</p>
                                                                </div>
                                                                <div class="col-4">:
                                                                    {{$carnet_plongee->instructeur->nom . " " . $carnet_plongee->instructeur->prenom }}
                                                                </div>
                                                                <div class="col-2">
                                                                    <p class="fw-semi-bold mb-2">Date</p>
                                                                </div>
                                                                <div class="col-4">: {{$carnet_plongee->created_at}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <img src="{{asset("dashboard/img/cacher.png")}}" alt="..."
                                                                width="100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3 mb-2">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Visibilité</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->visibilite }}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Temperature</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{count($carnet_plongee->equipePlongeur) > 0 ? $carnet_plongee->equipePlongeur[0]->dt_mn : ""}}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Profondeur</p>
                                                        </div>
                                                        <div class="col-2">: {{$carnet_plongee->profondeur}} m
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="h-100 rounded border-lg border-1 d-flex flex-lg-column justify-content-between p-lg-3">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Equipe</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->equipe->nom }}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Heure départ</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{ $carnet_plongee->equipePlongeur[0]->heure_depart}}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Heure sortie</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->heure_sortie}}
                                                        </div>
                                                        {{--  --}}
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">P départ</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->p_depart }}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">P sortie</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{ $carnet_plongee->equipePlongeur[0]->p_sortie}}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Paliers Oxy</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->paliere_oxy}}
                                                        </div> {{--  --}}
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Paliers 12</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->paliere_12 }}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Paliers 9</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{ $carnet_plongee->equipePlongeur[0]->paliere_9}}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Paliers 6</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->paliere_6}}
                                                        </div>
                                                        {{--  --}}
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Paliers 3</p>
                                                        </div>
                                                        <div class="col-2">:
                                                            {{$carnet_plongee->equipePlongeur[0]->paliere_3 }}
                                                        </div>
                                                        <div class="col-2">
                                                            <p class="fw-semi-bold mb-2">Observation</p>
                                                        </div>
                                                        <div class="col">:
                                                            {{ $carnet_plongee->equipePlongeur[0]->observation}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-1">Directeur : <a href="#!"
                                class="text-700">{{ $carnet_plongee->directeur->nom . ' ' . $carnet_plongee->directeur->prenom }}</a>
                        </p>

                        <p class="text-1000 mb-1">Site : {{ $carnet_plongee->site }}</p>
                        <p class="text-1000 mb-1">Temps : {{ $carnet_plongee->temps }}</p>
                        <p class="text-1000 mb-1">Support : {{ $carnet_plongee->support }}</p>

                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection