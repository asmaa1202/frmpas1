@extends('clubDash.layout.master')

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
                <h3>Plongeurs non licenciés</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
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
                        <th style="width: 60px;">
                            <input type="checkbox" id="select_all"> Tous (<span id="request-counter">{{ count($plongeursSansLicence) }}</span>)
                        </th>
                        <th style="min-width: 200px;">Membre</th>
                        <th style="min-width: 200px;">Genre</th>
                        <th style="min-width: 200px;">Type Membre</th>
                        <th style="min-width: 200px;">CIN</th>
                        <th style="min-width: 280px;">E-mail</th>
                       <th style="min-width: 180px;">Club</th>
                       <th style="min-width: 180px;">Niveau</th>
                       <th style="min-width: 180px;">Année</th>
                       {{-- <th style="min-width: 180px;">Document</th> --}}
                        <th style="width: 80px;">Actions</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($plongeursSansLicence as $item)
                        <tr id="row{{ $item->id }}">
                            <td class="align-middle text-center">
                                <input type="checkbox" class="demande_check" value="{{ $item->id }}">
                            </td>
                            <td class="align-middle white-space-nowrap py-2">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <img class="rounded-circle" src={{ $item->image }}
                                            alt={{ $item->nom }}>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0 fs--1">{{ $item->nom }} {{ $item->prenom }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">{{ $item->genre }}</td>
                            <td class="align-middle">{{ $item->type_plongeur->type }}</td>
                            {{-- <td class="align-middle">{{ $item->plongeur->nom }}</td> --}}
                            <td class="align-middle">{{ $item->cin }}</td>
                            <td class="align-middle">{{ $item->email }}</td>
                            <td class="align-middle">{{ optional($item->club)->nom ?? '--' }}</td>
                            <td class="align-middle">{{ $item->niveau->label ?? '--' }}</td>
                            <td class="align-middle">{{ $item->annee }}</td>
                            {{-- <td class="align-middle">
                                <a href="{{ route('club.licence.read.document', $item->id) }}" target="_blank">
                                    Certificat médical
                                </a>
                            </td> --}}
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
                                                                
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <button id="send_requests" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#licenceModal">Envoyer les demandes</button> --}}
            <button id="send_requests" class="btn btn-primary">Envoyer les demandes</button>

        </div>
    </div>
</div>
</div>


<!-- Modal Licence -->
<div class="modal fade" id="licenceModal" tabindex="-1" aria-labelledby="licenceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="licenceModalLabel">Télécharger l'attestation de paiement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                   
                        <div class="col-lg-12">
                          
                            <input class="form-control" id="attestation_paiement" type="file" required/>
                        </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="demandeLicences()">Envoyer</button>
            </div>
        </div>
    </div>
</div>

<div id="notification"></div>
@endsection
@section('javascript')
<script src="{{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectAllCheckbox = document.getElementById('select_all');
        const individualCheckboxes = document.querySelectorAll('.demande_check');

        selectAllCheckbox.addEventListener('change', function () {
            individualCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    });

    document.getElementById('send_requests').addEventListener('click', async function () {
        const selectedIds = Array.from(document.querySelectorAll('.demande_check:checked')).map(checkbox => checkbox.value);

        if (selectedIds.length === 0) {
            const notif =
                `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            ${'Veuillez sélectionner au moins une demande.'}
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

            return; // Ne pas ouvrir le modal si aucune case n'est sélectionnée
        }

        const licenceModal = new bootstrap.Modal(document.getElementById('licenceModal'));
        licenceModal.show();
    });

    async function demandeLicences() {
        try {
            const selectedIds = Array.from(document.querySelectorAll('.demande_check:checked')).map(checkbox => checkbox.value);

            let formData = new FormData();
            
            const attestation_paiement = document.getElementById("attestation_paiement").files[0];
            if (attestation_paiement) {
                formData.append("attestation_paiement", attestation_paiement);
            }
            formData.append("ids", JSON.stringify(selectedIds));

            const res = await axios.post(`/club/demandes_licences_pour_non_licencies`, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            });

            if (res.status === 200) {
                const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">FRMPAS</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${'Les licences ont été mises à jour avec succès.'}
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

                // Fermeture du modal après soumission du formulaire
                const licenceModal = bootstrap.Modal.getInstance(document.getElementById('licenceModal'));
                if (licenceModal) {
                    licenceModal.hide(); // Ferme le modal
                }


                selectedIds.forEach(id => {
                    const rowElement = document.getElementById(`row${id}`);
                    rowElement.remove();
                });
                let counter = $('#request-counter');
                let requestCounter = parseInt(counter.text());
                counter.text(parseInt(requestCounter - selectedIds.length));
                
            }
        } catch (err) {
            const notif = `
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur survenue lors de l'envoi de la demande.
                        </div>
                    </div>
                </div>`;
            document.getElementById("notification").innerHTML = notif;

            const toastLiveExample = document.getElementById('liveToast');
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        }
    }
</script>






@endsection
