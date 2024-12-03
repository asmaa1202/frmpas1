@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Carnets de plongée</title>
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
                <h3>Carnets de plongée</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('carnet_plongee.create') }}" role="button" class="btn btn-outline-primary">
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
    <div class="card-body position-relative" style="min-height: 500px;">
        <div class="table-responsive">
            <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "{{asset('dashboard/vendors/datatables.net/fr-FR.json')}}"
                    }}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th style="min-width: 220px;">Lieu</th>
                        <th style="min-width: 80px;">Date</th>
                        <th style="min-width: 120px;">Directeur</th>
                        <th style="min-width: 120px;">Instructeur</th>
                        <th style="min-width: 120px;">Site</th>
                        <th style="min-width: 120px;">Support</th>
                        <th style="min-width: 120px;">Temps</th>
                        <th style="min-width: 120px;">Courant</th>
                        <th style="min-width: 120px;">Visibilité</th>
                        <th style="min-width: 120px;">Mer</th>
                        <th style="min-width: 120px;">T eau</th>
                        <th style="min-width: 120px;">Plongée</th>
                        <th style="min-width: 180px;">Crée par</th>
                        <th style="width: 60px;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($carnets_plongee as $item)
                    <tr id="row{{ $item->id }}">
                        <td class="text-center align-middle">{{ $item->id }}</td>
                        <td class="align-middle">{{ $item->lieu }}</td>
                        <td class="align-middle">{{ $item->creted_at }}</td>
                        <td class="align-middle">{{ $item->id_directeur }}</td>
                        <td class="align-middle">{{ $item->id_instructeur }}</td>
                        <td class="align-middle">{{ $item->site }}</td>
                        <td class="align-middle">{{ $item->support }}</td>
                        <td class="align-middle">{{ $item->temps }}</td>
                        <td class="align-middle">{{ $item->courant }}</td>
                        <td class="align-middle">{{ $item->visibilite }}</td>
                        <td class="align-middle">{{ $item->mer }}</td>
                        <td class="align-middle">{{ $item->t_eau }}</td>
                        <td class="align-middle">{{ $item->plongee }}</td>
                        <td class="align-middle">{{ $item->createur->nom . " " . $item->createur->prenom }}</td>
                        <td class="py-2 align-middle white-space-nowrap text-center">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                                    id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><svg
                                        class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0"
                                    aria-labelledby="order-dropdown-0">
                                    <div class="py-2">
                                        <a class="dropdown-item"
                                            href="/dashboard/carnet-plongee/{{ $item->id }}/equipes/ajouter">Modifier</a>
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
                                                data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                id="colseModal{{ $item->id }}" data-bs-dismiss="modal">Non</button>
                                            <button type="button" class="btn btn-primary"
                                                onclick="deletePlongeur({{ $item->id }})"
                                                id="btn-confirmation-delete">Oui</button>
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

<div id="notification"></div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    async function deletePlongeur(id) {

                try {
                    const btnClose = document.getElementById(`colseModal${id}`);
                    btnClose.click();
                    const response = await axios.delete(`/dashboard/plongeurs/${id}`);
                    if (response.status === 200) {
                        const notif =
                            `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                        <strong class="me-auto">ASAAM</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                       ${response.data.message}
                                    </div>
                                </div>
                            </div>`;
                        const notElement = document.getElementById("notification");
                        notElement.innerHTML = notif;
                        const toastTrigger = document.getElementById('btn-confirmation-delete')
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
                                        <strong class="me-auto">ASAAM</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                       Erreur servenu
                                    </div>
                                </div>
                            </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const toastTrigger = document.getElementById('btn-confirmation-delete');
                    const toastLiveExample = document.getElementById('liveToast');
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                }

            }
</script>
@endsection