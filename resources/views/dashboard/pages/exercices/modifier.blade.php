@extends('dashboard.layout.master')
@section('title')
<title>FRMPAS - Modifier exercice</title>
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
                <h3>Modifier une exercice</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" onclick="updateExercices({{ $exercice->id }})" id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
                <a href="{{ route('exercices.index') }}" role="button" class="btn btn-outline-primary">
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
                    <label for="obligatoire">Obligatoire :</label>
                    <div class="ps-2 mt-0 mb-3 d-flex">
                        <div class="form-check mb-0 mr-3 lh-1 me-3">
                            <input class="form-check-input obligatoire" type="radio" value="Oui" name="obligatoire"
                                {{ $exercice->obligatoire == 1 ? 'checked' : '' }} id="oui" />
                            <label class="form-check-label mb-0" for="oui">Oui</label>
                        </div>
                        <div class="form-check mb-0 lh-1">
                            <input class="form-check-input obligatoire" type="radio" value="Non" name="obligatoire"
                                {{ $exercice->obligatoire == 0 ? 'checked' : '' }} id="non" />
                            <label class="form-check-label mb-0" for="non">Non</label>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label" for="label">Label :</label>
                        <input class="form-control" id="label" type="text" value="{{ $exercice->label }}" />
                    </div>
                    <div class="col-6 mb-3">
                        <label for="niveau">Niveau :</label>
                        <select class="form-select js-choice" id="niveau" size="1" name="niveau"
                            data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                            <option value="">Choisissez le niveau</option>
                            @foreach ($niveaux as $niveau)
                            <option value={{ $niveau->id }} {{ $exercice->id_niveau == $niveau->id ? 'selected' : '' }}>
                                {{ $niveau->label }}
                            </option>
                            @endforeach
                        </select>
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
                <button class="btn btn-primary me-3" onclick="updateFormations({{ $exercice->id }})" id="liveToastBtn">
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
<script src={{ asset('dashboard/vendors/choices/choices.min.js') }}></script>
<script>
    async function updateFormations(id) {
            try {
                const obligatoire = document.querySelector(".obligatoire:checked").value;
                const label = document.getElementById("label").value;
                const niveau = document.getElementById("niveau").value;

                const res = await axios.put(`/dashboard/exercices/${id}`, {
                    obligatoire,
                    label,
                    niveau
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