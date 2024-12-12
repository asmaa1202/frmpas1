@extends('clubDash.layout.master')

@section('title')
<title>FRMPAS - Détails plongeur</title>
@endsection

@section('css')
<link href={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }} rel="stylesheet">
@endsection

@section('content')
<div class="card mb-3">
    <div class="card-body d-flex flex-wrap flex-between-center">
        <div>
            <h6 class="text-primary">Plongeur</h6>
            <h5 class="mb-0">{{ $plongeur->prenom . ' ' . $plongeur->nom }}
                ({{ $plongeur->niveau ? $plongeur->niveau->label : "" }})</h5>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card font-sans-serif mb-3">
            <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center"><img class="rounded-3"
                    src="{{ $plongeur->image }}" alt="" width="112" />
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Email</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"
                                    href="mailto:goodguy@nicemail.com">: {{ $plongeur->email }}</a><span
                                    class="badge rounded-pill badge-subtle-success d-none d-md-inline-block ms-2"><span>Vérifié</span><span
                                        class="fas fa-check ms-1" data-fa-transform="shrink-4"></span></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">CIN</td>
                            <td class="p-1 text-600">: {{ $plongeur->cin }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 "> :
                                    {{ $plongeur->telephone_portable }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Genre</td>
                            <td class="p-1 text-600">: {{ $plongeur->genre }}</td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body align-items-center">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Enseignement</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : {{ $plongeur->enseignement }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Qualifications</td>
                            <td class="p-1 text-600">: {{ $plongeur->qualifications }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Crée le</td>
                            <td class="p-1 text-600">: {{ $plongeur->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Crée par</td>
                            <td class="p-1 text-600">:
                                {{ $plongeur->createur->nom . " " . $plongeur->createur->prenom }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Adresse</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : {{ $plongeur->adresse }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Code postal</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : {{ $plongeur->code_postal }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Ville</td>
                            <td class="p-1 text-600">: {{ $plongeur->code_postal }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Pays</td>
                            <td class="p-1 text-600">: {{ $plongeur->pays }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Date de naissance:</td>
                            <td class="p-1 text-600">: {{ $plongeur->date_de_naissance }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card font-sans-serif">
            <div class="card-body align-items-center">
                <table class="table table-borderless fs--1 fw-medium mb-0">
                    <tbody>
                        <tr>
                            <td class="p-1" style="width: 35%;">Profession</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : {{ $plongeur->profession }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone portable</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">
                                    : {{ $plongeur->telephone_portable }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Téléphone fixe</td>
                            <td class="p-1 text-600">: {{ $plongeur->telephone_fixe }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">N° licence</td>
                            <td class="p-1 text-600">: {{ $plongeur->n_licence }}</td>
                        </tr>
                        <tr>
                            <td class="p-1" style="width: 35%;">Date de visite medicale</td>
                            <td class="p-1 text-600">: {{ $plongeur->date_visite_medicale }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="row ">
    <div class="col-xxl-12 order-xxl-1 order-lg-2 order-2">
        <div class="card h-100" id="paymentHistoryTable"
            data-list='{"valueNames":["course","invoice","date","amount","status"],"page":5}'>
            <div class="card-header d-flex flex-between-center">
                <h5 class="mb-0 text-nowrap py-2 py-xl-0">Plongées</h5>
            </div>
            <div class="card-body" style="min-height: 300px;">
                <div class="table-responsive scrollbar">
                    <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "{{asset('dashboard/vendors/datatables.net/fr-FR.json')}}"
                    }}'>
                        <thead class="bg-light text-900 font-sans-serif">
                            <tr>
                                <th>ID</th>
                                <th>Équipe</th>
                                <th>Heure de départ</th>
                                <th>Heure de sortie</th>
                                <th>Profondeur</th>
                                <th>DT_mn</th>
                                <th>P_départ</th>
                                <th>P_sortie</th>
                                <th>Paliere 12</th>
                                <th>Paliere 9</th>
                                <th>Paliere 6</th>
                                <th>Paliere 3</th>
                                <th>Paliere oxygéne</th>
                                <th>Observetion </th>
                                <th>Crée par</th>

                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($plongeur->carnet_plongee_details as $item)
                            <tr id="row{{ $item->id }}" class="fw-semi-bold">
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">{{ $item->id }} </td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->equipe->nom }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->heure_depart }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->heure_sortie }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->prof_m }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->dt_mn }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->p_depart }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->p_sortie }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->paliere_12 }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->paliere_9 }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->paliere_6 }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->paliere_3 }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->paliere_oxy }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->observation }}</td>
                                <td class="align-middle white-space-nowrap pe-6 py-3 date">
                                    {{ $item->createur->nom . " " . $item->createur->prenom }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}></script>
@endsection