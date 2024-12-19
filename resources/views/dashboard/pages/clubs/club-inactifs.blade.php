@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Clubs</title>
@endsection

@section('css')
<link href={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }} rel="stylesheet">
@endsection

@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Clubs Inactifs</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('clubs.create') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="table-responsive">
            <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "{{asset('dashboard/vendors/datatables.net/fr-FR.json')}}"
                    }}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th style="min-width: 20px;">ID</th>
                        <th style="min-width: 200px;">Nom</th>
                        <th style="min-width: 200px;">Abrév</th>
                        <th style="min-width: 280px;">E-mail</th>
                        <th style="min-width: 180px;">Ville</th>
                        <th style="min-width: 180px;">Crée le</th>
                        <th style="min-width: 180px;">Statut</th>
                        <th style="min-width: 180px;">Liste de bureau</th>
                        <th style="min-width: 180px;">PV</th>
                        <th style="min-width: 180px;">Récépissé</th>
                        <th style="min-width: 180px;">Fiche technique</th>
                        <th style="min-width: 180px;">Ompic</th>
                        <th style="min-width: 180px;">Demande d'accréditation</th>

                        {{-- <th style="min-width: 180px;">Adhésion</th> --}}
                     
                        <th style="min-width: 180px;">Adhésion</th>
                        <th style="width: 80px;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach($clubs  as $club)
                    <tr id="row1">
                        <td class="align-middle text-center">{{ $club->id }}</td>
                        <td class="align-middle white-space-nowrap py-2">
                            <div class="d-flex d-flex align-items-center">
                                <div class="avatar avatar-xl me-2">
                                    <img class="rounded-circle" src={{ asset($club->image ?? 'dashboard/img/team/avatar.png') }}
                                        alt={{ $club->nom }}>
                                </div>
                                <div class="flex-1">
                                    <p class="mb-0 fs--1">{{ $club->nom }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">{{ $club->abreviation }}</td>
                        <td class="align-middle">{{ $club->email }}</td>
                        <td class="align-middle">{{ $club->ville  }}</td>
                        <td class="align-middle">{{ $club->date_creation ?? '--'}}</td>
                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'Statut_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'liste_bureau_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'pv_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'recepisse_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'fiche_technique_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'ompic_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>

                        <td class="align-middle">
                            <a href="{{ route('club.read.document', ['id' => $club->id, 'type'=>'demande_accreditation_document']) }}" target="__blank">
                                <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                            </a>
                        </td>
                        {{-- <td class="align-middle"> 
                            {!! $club->has_active_adhesion 
                                ? '<span class="badge bg-success">Actif</span>' 
                                : '<span class="badge bg-danger">Inactif</span>' !!}
                        </td> --}}
                        
                        <td class="align-middle"> 
                            <span class="badge bg-danger">Inactif</span>
                        </td>

                        <td class="py-2 align-middle white-space-nowrap text-center">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-{{ $club->id }}" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-{{ $club->id }}">
                                    <div class="py-2">
                                        <a class="dropdown-item" href="{{ route('clubs.edit', $club) }}">Modifier</a>

                                        <form action="{{ route('clubs.toggleActivation', $club->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                {{ $club->is_active ? 'Désactiver' : 'Activer' }}
                                            </button>
                                        </form>
                                        
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $club->id }}">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="modal fade" id="deleteModal-{{ $club->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel-{{ $club->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel-{{ $club->id }}">Confirmer la suppression</h5>
                                            <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer le club <strong>{{ $club->nom }}</strong> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                            <form action="{{ route('clubs.destroy', $club) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev">
                <span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
        </div> --}}
    </div>
</div>
<div id="notification"></div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
@endsection