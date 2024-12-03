@extends('dashboard.layout.master')
@section('title')
<title>FRMPAS - Ajouter carnet de plongée</title>
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
                <h3>Ajouter un carnet de plongée</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" role="button" onclick="addCarnetPlongee()" id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
                <a href="{{ route('carnet_plongee.index') }}" role="button" class="btn btn-outline-primary">
                    <span class="pe-1">Retour</span>
                    <span class="fas fa-arrow-right" data-fa-transform="shrink-3"></span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Carnet de plongée</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                    <div class="col-lg-3">
                        <label class="form-label" for="lieu">Lieu</label>
                        <input class="form-control" id="lieu" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label for="directeur">Directeur de plongée</label>
                        <select class="form-select js-choice" id="directeur" size="1" name="directeur"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez le directeur</option>
                            @foreach ($users as $user)
                            <option value={{ $user->id }}>{{ $user->nom . ' ' . $user->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="instructeur">Instructeur</label>
                        <select class="form-select js-choice" id="instructeur" size="1" name="instructeur"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez l'instructeur</option>
                            @foreach ($users as $user)
                            <option value={{ $user->id }}>{{ $user->nom . ' ' . $user->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="site">Site</label>
                        <input class="form-control" id="site" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="support">Support</label>
                        <input class="form-control" id="support" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="table">Table</label>
                        <input class="form-control" id="table" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="profondeur">Profondeur</label>
                        <input class="form-control" id="profondeur" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="dt">Dt</label>
                        <input class="form-control" id="dt" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="temps">Temps</label>
                        <input class="form-control datetimepicker" id="temps" type="text" placeholder="H:i"
                            data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="courant">Courant</label>
                        <input class="form-control" id="courant" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="vent">Vent</label>
                        <input class="form-control" id="vent" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="visibilite">Visibilité</label>
                        <input class="form-control" id="visibilite" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="mer">Mer</label>
                        <input class="form-control" id="mer" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="t_eau">T eau</label>
                        <input class="form-control" id="t_eau" type="text" />
                    </div>
                    <div class="col-lg-3">
                        <label class="form-label" for="plongee">Plongeé</label>
                        <input class="form-control" id="plongee" type="text" />
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
                <button class="btn btn-primary me-3" onclick="addCarnetPlongee()" id="liveToastBtn">
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
<script src={{ asset('dashboard/vendors/inputmask/inputmask.min.js') }}></script>
<script src={{ asset('dashboard/vendors/choices/choices.min.js') }}></script>
<script>
    async function addCarnetPlongee() {
            try {
                const lieu = document.getElementById("lieu").value;
                const directeur = document.getElementById("directeur").value;
                const instructeur = document.getElementById("instructeur").value;
                const site = document.getElementById("site").value;
                const support = document.getElementById("support").value;
                const table = document.getElementById("table").value;
                const profondeur = document.getElementById("profondeur").value;
                const dt = document.getElementById("dt").value;
                const temps = document.getElementById("temps").value;
                const courant = document.getElementById("courant").value;
                const vent = document.getElementById("vent").value;
                const visibilite = document.getElementById("visibilite").value;
                const mer = document.getElementById("mer").value;
                const t_eau = document.getElementById("t_eau").value;
                const plongee = document.getElementById("plongee").value;

                const res = await axios.post('/dashboard/carnet-plongee', {
                    lieu,
                    id_directeur: directeur,
                    id_instructeur: instructeur,
                    site,
                    support,
                    table,
                    profondeur,
                    dt,
                    temps,
                    courant,
                    vent,
                    visibilite,
                    mer,
                    t_eau,
                    plongee,
                });
                if (res.status === 200) {
                    window.location.href = `/dashboard/carnet-plongee/${res.data.id}/equipes/ajouter`;

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
                    const toastTrigger = document.getElementById('liveToastBtn');
                    const toastLiveExample = document.getElementById('liveToast');
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