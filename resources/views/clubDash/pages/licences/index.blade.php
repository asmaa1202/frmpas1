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
                <h3>Demandes {{ $statut }}</h3>
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
                        <th style="width: 60px;">ID</th>
                        <th style="min-width: 200px;">Membre</th>
                        <th style="min-width: 200px;">Type Membre</th>
                        <th style="min-width: 200px;">Date Demande</th>
                        <th style="min-width: 280px;">E-mail</th>
                        <th style="min-width: 180px;">Club</th>
                        <th style="min-width: 180px;">Niveau</th>
                        <th style="min-width: 180px;">Année</th>
                        <th style="min-width: 180px;">Document</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @foreach ($licences as $item)
                        <tr id="row{{ $item->id }}">
                            <td class="align-middle text-center">{{ $item->custom_id ?? '--'}}</td>
                            <td class="align-middle white-space-nowrap py-2">
                                <div class="d-flex d-flex align-items-center">
                                    <div class="avatar avatar-xl me-2">
                                        <img class="rounded-circle" src={{ $item->plongeur->image }}
                                            alt={{ $item->plongeur->nom }}>
                                    </div>
                                    <div class="flex-1">
                                        <p class="mb-0 fs--1">{{ $item->plongeur->nom }} {{ $item->plongeur->prenom }}</p>
                                    </div>
                                </div>
                            </td>
                            {{-- <td class="align-middle">{{ $item->plongeur->nom }}</td> --}}
                            <td class="align-middle">{{ $item->type_membre->type }}</td>
                            <td class="align-middle">{{ $item->created_at }}</td>
                            <td class="align-middle">{{ $item->plongeur->email }}</td>
                            <td class="align-middle">{{ optional($item->plongeur->club)->nom ?? '--' }}</td>
                            <td class="align-middle">{{ $item->plongeur->niveau->label }}</td>
                            <td class="align-middle">{{ $item->annee }}</td>
                            <td class="align-middle">
                                <a href="{{ route('club.licence.read.document', $item->id) }}" target="__blank">
                                    Attestation de Paiement
                                </a>
                            </td>
                          
                        </tr>
                    @endforeach
                </tbody>
            </table>
           

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
    async function deleteDemande(id) {
            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/demandes-licence/${id}`);
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
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectAllCheckbox = document.getElementById('select_all');
        const individualCheckboxes = document.querySelectorAll('.demande_check');

      
        selectAllCheckbox.addEventListener('change', function () {
            individualCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // document.getElementById('send_requests').addEventListener('click', function () {
        //     const selectedValues = Array.from(individualCheckboxes)
        //         .filter(checkbox => checkbox.checked)
        //         .map(checkbox => checkbox.value);

        //     console.log(selectedValues); 
        //     alert('IDs sélectionnés : ' + selectedValues.join(', '));
        // });
    });

        

        document.getElementById('send_requests').addEventListener('click', async function () {

            const selectedIds = Array.from(document.querySelectorAll('.demande_check:checked')).map(checkbox => checkbox.value);

            if (selectedIds.length === 0) {
                // alert("Veuillez sélectionner au moins une demande.");
                 const notif =
                        `<div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                                    <strong class="me-auto">ASAAM</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    ${res.data.message}
                                </div>
                            </div>
                        </div>`;
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                return;
            }

            try {
                const response = await axios.post('/club/update-licences', {
                    ids: selectedIds,
                    statut: 'en_cours_validation'
                });

                if (response.status === 200) {
                    alert('Les licences ont été mises à jour avec succès.');
                    location.reload(); // Recharger la page pour actualiser les données
                }
            } catch (error) {
                console.error(error);
                alert("Une erreur s'est produite lors de la mise à jour.");
            }
        });
</script>
@endsection