@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Demandes</title>
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
                <h3>Demandes</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>

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
                        <th style="width: 60px;">ID</th>
                        <th style="min-width: 200px;">Club</th>
                        <th style="min-width: 200px;">Date Demande</th>
                        <th style="min-width: 280px;">Ville</th>
                       <th style="min-width: 180px;">E-mail</th>
                       <th style="min-width: 180px;">Année</th>
                       <th style="min-width: 180px;">Liste de bureau</th>
                       <th style="min-width: 180px;">PV</th>
                       <th style="min-width: 180px;">Récépissé</th>
                       <th style="min-width: 180px;">Attestation paiement</th>

                        <th style="width: 80px;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($adhesions as $item)
                        <tr id="row{{ $item->id }}">
                            <td class="align-middle text-center">{{ $item->id }}</td>
                            <td class="align-middle white-space-nowrap py-2">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <img class="rounded-circle" src={{ asset($item->club->image ?? 'dashboard/img/team/avatar.png') }}
                                            alt={{ $item->club->nom }}>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0 fs--1">{{ $item->club->nom ?? '--' }}</p>
                                    </div>
                                </div>
                            </td>
                            {{-- <td class="align-middle">{{ $item->club->nom }}</td> --}}
                            <td class="align-middle">{{ $item->created_at ?? '--' }}</td> 
                            <td class="align-middle">{{ $item->email ?? '--'}}</td>
                            <td class="align-middle">{{ $item->ville ?? '--' }}</td>
                            <td class="align-middle">{{ $item->annee ?? '--' }}</td>
           
                            <td class="align-middle">
                                <a href="{{ route('club.read.document', ['id' => $item->club->id, 'type'=>'liste_bureau_document']) }}" target="_blank">
                                    <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                </a>
                            </td>
    
                            <td class="align-middle">
                                <a href="{{ route('club.read.document', ['id' => $item->club->id, 'type'=>'pv_document']) }}" target="_blank">
                                    <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                </a>
                            </td>
    
                            <td class="align-middle">
                                <a href="{{ route('club.read.document', ['id' => $item->club->id, 'type'=>'recepisse_document']) }}" target="_blank">
                                    <svg class="svg-inline--fa fa-file fa-w-12 text-900 fs-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                </a>
                            </td>
    
                            <td class="align-middle">
                                <a href="{{ route('adhesion.read.document', $item->id) }}" target="_blank">
                                    Attestation de Paiement
                                </a>
                            </td>

                            <td class="py-2 align-middle white-space-nowrap text-center">
                                <div class="dropdown font-sans-serif position-static">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                        type="button" id="order-dropdown-0" data-bs-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg
                                            class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                            </path>
                                        </svg>
                                    </button>
                                        
                                    <div class="dropdown-menu dropdown-menu-end border py-0"
                                        aria-labelledby="order-dropdown-0">
                                        <div class="py-2">
                                          
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop1{{ $item->id }}">
                                                Accepter
                                            </button>

                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop2{{ $item->id }}">
                                                Refuser
                                            </button>

                                            <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop{{ $item->id }}">Supprimer</a>
                                            </div>
                                    </div>
                                    
                                </div>
                                                
                                <div class="modal fade" id="staticBackdrop{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                    Vous voulez supprimer cette ligne
                                                </h5>
                                                <button type="button"
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" id="colseModal{{ $item->id }}"
                                                    data-bs-dismiss="modal">Non</button>
                                                <button type="button" class="btn btn-primary" id="liveToastBtn"
                                                    onclick="deleteDemande({{ $item->id }})">Oui</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal fade" id="staticBackdrop1{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                    Voulez-vous accepter cette demande ?
                                                </h5>
                                                <button type="button"
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Non</button>
                                                
                                                <!-- Formulaire pour action Laravel -->
                                                <form action="{{ route('adhesion.statut', ['id' => $item->id, 'statut' => 'accepter']) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">
                                                        Oui
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                                    Voulez-vous refuser cette demande ?
                                                </h5>
                                                <button type="button"
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Non</button>
                                                
                                                <!-- Formulaire pour action Laravel -->
                                                <form action="{{ route('adhesion.statut', ['id' => $item->id, 'statut' => 'refuser']) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">
                                                        Oui
                                                    </button>
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
    </div>
</div>
</div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    async function deleteDemande(id) {
            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/demandes/${id}`);
                if (response.status === 200) {
                    const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                <strong class="me-auto">FRMPAS</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                ${response.data.message}
                            </div>
                        </div>
                    </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                    const rowElement = document.getElementById(`row${id}`);
                    rowElement.remove();
                }
            } catch (err) {
                const notif =
                    `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur servenu
                        </div>
                    </div>
                </div>`;
                const notElement = document.getElementById("notification");
                notElement.innerHTML = notif;
                const toastTrigger = document.getElementById('liveToastBtn')
                const toastLiveExample = document.getElementById('liveToast')
                if (toastTrigger) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            }

        }
</script>
@endsection