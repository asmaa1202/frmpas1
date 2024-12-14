@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Cours</title>
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
                <h3>Cours</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('cours.create') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-plus me-1" data-fa-transform="shrink-3"></span>Ajouter
                </a>
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
        <div id="tableExample">

            <div class="table-responsive">
                <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "{{asset('dashboard/vendors/datatables.net/fr-FR.json')}}"
                    }}'>
                    <thead class="bg-200 text-900">
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="min-width: 70px;">Document</th>
                            <th style="min-width: 220px;">Nom</th>
                            <th style="min-width: 220px;">Niveau</th>
                            <th style="min-width: 220px;">Crée par</th>
                            <th style=" width: 80px;">Actions</th>


                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($cours as $item)
                        <tr id="row{{ $item->id }}">
                            <td class="align-middle text-center">{{ $item->id }}</td>
                            <td class="text-center align-middle">
                                @if ($item->lien)
                                <a href="{{ $item->lien }}" target=”_blank”>Cours</a>
                                @endif
                            </td>
                            <td class="align-middle">{{ $item->nom }}</td>
                            <td class="align-middle">
                                {{ $item->niveau != null && $item->niveau->label != null ? $item->niveau->label : null }}
                            </td>
                            <td class="align-middle">{{ $item->createur->nom . ' ' . $item->createur->prenom }}</td>
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
                                        <!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-0"
                                        aria-labelledby="order-dropdown-0">
                                        <div class="py-2">
                                            {{-- <a class="dropdown-item"
                                                        href="{{ route('cours.show', ['id' => $item->id]) }}">Modifier</a>
                                            <div class="dropdown-divider"></div> --}}
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
                                                <button type="button" class="btn btn-primary" id="liveToastBtn"
                                                    onclick="deleteCours({{ $item->id }})">Oui</button>

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
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev">
                    <span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
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
    async function deleteCours(id) {
            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/cours/${id}`);
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