@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Ajouter cours</title>
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
                <h3>Ajouter un cours</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('cours.index') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Retour
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row gx-2">
                    <div class="mb-3">
                        <label class="form-label" for="nom">Nom :</label>
                        <input class="form-control" id="nom" type="text" />
                    </div>
                    <div>
                        <label for="niveau">Niveaux :</label>
                        <select class="form-select js-choice" id="niveau" size="1" name="niveau"
                            data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                            <option value="">Choisissez le niveau</option>
                            @foreach ($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->label }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <div id="frame">

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                            <script src="/resumable.js"></script>

                            <div class="resumable-drop">
                                <a class="resumable-browse"><u>selectionner le cours sur votre ordinateur</u></a>
                            </div>
                            <div class="uploadProgressBar"></div>
                            <ul class="resumable-list"></ul>

                        </div>
                        {{-- <label for="formFile" class="form-label">Document :</label>
                        <input class="form-control" type="file" name="file" onchange="handleChangeImage()"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">Vous avez presque fini!</h5>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Annuler</button>
                <button class="btn btn-primary me-3" id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>

<div id="notification"></div>


@endsection


@section('javascript')
<script src="/uploadLargeFile.js"></script>
<script src={{ asset('dashboard/vendors/choices/choices.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>

<script>
    initLargeUpload('{{ route('chunkUpload') }}', $('.uploadProgressBar'));
    var file = "";

    function handleChangeImage() {
        file = document.querySelector('input[type=file]').files[0];
        console.log({
            file
        });
    }
    async function addCours() {
        try {

            let formData = new FormData();
            formData.append("nom", document.getElementById("nom").value);
            formData.append("niveau", document.getElementById("niveau").value);



            const res = await axios.post('/dashboard/cours/ajouter', formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                }
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
                                ${res.data.message}
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
                document.getElementById("nom").value = "";
                document.getElementById("niveau").value = "";
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
            const toastTrigger = document.getElementById('liveToastBtn');
            const toastLiveExample = document.getElementById('liveToast');
            if (toastTrigger) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
            }
        }

    }
</script>
@endsection