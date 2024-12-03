@extends('dashboard.layout.master')

@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Ajouter une formation</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" onclick="addFormations()" id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
                <a href="{{ route('formations.index') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Retour
                </a>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>
<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row gx-2">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="nom">Nom :</label>
                        <input class="form-control" id="nom" type="text" />
                    </div>
                    <div class="col-6 mb-3">
                        <label for="plongeur">Plongeur :</label>
                        <select class="form-select js-choice" id="plongeur" size="1" name="plongeur"
                            data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                            <option value="">Choisissez le plongeur</option>
                            @foreach ($plongeurs as $plongeur)
                            <option value="{{ $plongeur->id }}">{{ $plongeur->nom . ' ' . $plongeur->prenom }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="formateur">Formateur :</label>
                        <select class="form-select js-choice" id="formateur" size="1" name="formateur"
                            data-options='{"removeItemButton":true,"placeholder":true, "delimiter": ","}'>
                            <option value="">Choisissez le formateur</option>
                            @foreach ($formateurs as $formateur)
                            <option value="{{ $formateur->id }}">{{ $formateur->nom . ' ' . $formateur->prenom }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="heure_depart">Heure départ</label>
                        <input class="form-control datetimepicker" id="heure_depart" type="text" placeholder="H:i"
                            data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="heure_sortie">Heure sortie</label>
                        <input class="form-control datetimepicker" id="heure_sortie" type="text" placeholder="H:i"
                            data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="profondeur">Profondeur (m)</label>
                        <input class="form-control" id="profondeur" type="number" />
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="observation">Observation</label>
                        <textarea class="form-control" id="observation" rows="4"></textarea>
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
                <button class="btn btn-primary me-3" onclick="addFormations()" id="liveToastBtn">
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
    async function addFormations() {
            try {
                const nom = document.getElementById("nom").value;
                const plongeur = document.getElementById("plongeur").value;
                const formateur = document.getElementById("formateur").value;
                const heure_depart = document.getElementById("heure_depart").value;
                const heure_sortie = document.getElementById("heure_sortie").value;
                const prof_m = document.getElementById("profondeur").value;
                const observation = document.getElementById("observation").value;


                const res = await axios.post('/dashboard/formations', {
                    nom,
                    plongeur,
                    formateur,
                    heure_depart,
                    heure_sortie,
                    prof_m,
                    observation,
                });
                if (res.status === 200) {
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
                    const toastTrigger = document.getElementById('liveToastBtn')
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                    document.getElementById("nom").value = "";
                    document.getElementById("plongeur").value = "";
                    document.getElementById("formateur").value = "";
                    document.getElementById("heure_depart").value = "";
                    document.getElementById("heure_sortie").value = "";
                    document.getElementById("profondeur").value = "";
                    document.getElementById("observation").value = "";
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