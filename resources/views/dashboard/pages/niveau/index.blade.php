@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Niveaux</title>
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
                <h3>Niveau</h3>
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
<div id="notification"></div>

<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <table id="example" class="table table-bordered data-table table-striped fs--1 mb-0" data-options='{"paging":true,"scrollY":"600px","searching":true,"scrollCollapse":true,"scrollX":true, "language": {
                        "url": "{{asset('dashboard/vendors/datatables.net/fr-FR.json')}}"
                    }}'>
            <thead class="bg-200 text-900">
                <tr>
                    <th style="min-width: 60px;">ID</th>
                    <th style="min-width: 70px;">Image</th>
                    <th style="min-width: 180px;">Tag</th>
                    <th style="min-width: 180px;">Title</th>
                    <th style="min-width: 180px;">Utilisateur</th>
                    <th style="width: 80px">Actions</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($blogs as $item)
                <tr id="row{{ $item->id }}">
                    <td class="text-center align-middle">{{ $item->id }}</td>
                    <td class="text-center align-middle">
                        <img src={{ $item->image }} alt={{ $item->title }} width="60px" />
                    </td>
                    <td class="align-middle">
                        @foreach (explode(',', $item->tag) as $tag)
                        <span class="badge bg-info">{{ $tag }}</span>
                        @endforeach
                    </td>
                    <td class="align-middle">{{ $item->title }}</td>
                    <td class="align-middle">{{ $item->createur->nom . ' ' . $item->createur->prenom }}</td>

                    <td class="align-middle">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-link p-0" type="button" style="color: brown" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $item->id }}">
                                <span class="fas fa-trash" data-fa-transform="shrink-3"></span>
                            </button>



                            <a href="{{ route('blogs.show', ['id' => $item->id]) }}" role="button"
                                class="btn btn-link p-0" style="color: rgba(42, 87, 252, 0.788)">
                                <span class="fas fa-edit" data-fa-transform="shrink-3"></span>
                            </a>
                        </div>
                    </td>

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
                                    <button type="button" class="btn btn-secondary" id="colseModal{{ $item->id }}"
                                        data-bs-dismiss="modal">Non</button>
                                    <button type="button" class="btn btn-primary"
                                        onclick="deleteNiveau({{ $item->id }})">Oui</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
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
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/datatables.net/jquery.dataTables.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}></script>
<script src={{ asset('dashboard/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    async function deleteNiveau(id) {

            try {
                const btnClose = document.getElementById(`colseModal${id}`);
                btnClose.click();
                const response = await axios.delete(`/dashboard/blogs/${id}`);
                if (response.status === 200) {
                    const notif =
                        "<div class='alert alert-success alert-dismissible d-flex align-items-center' role='alert'><div class='ml-2'>" +
                        response.data.message +
                        "</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                    const notElement = document.getElementById("notification");
                    notElement.innerHTML = notif;
                    const rowElement = document.getElementById(`row${id}`);
                    rowElement.remove();

                    setTimeout(() => {
                        notElement.removeChild(notElement.firstChild);
                    }, "3000")

                } else {
                    console.log("Error");
                }
            } catch (err) {
                console.log({
                    err
                });
            }

        }
</script>
@endsection