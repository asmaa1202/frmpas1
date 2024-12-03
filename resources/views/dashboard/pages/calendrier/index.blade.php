@extends('dashboard.layout.master')
@section('title')
<title>FRMPAS - Calendriers</title>
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
                <h3>Calendriers</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>

        </div>
    </div>
</div>

<div class="card overflow-hidden">
    <div class="card-header">
        <div class="row gx-0 align-items-center">
            <div class="col-auto d-flex justify-content-end order-md-1">
                <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button" data-event="prev"
                    data-bs-toggle="tooltip" title="Previous"><span class="fas fa-arrow-left"></span></button>
                <button class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button" data-event="next"
                    data-bs-toggle="tooltip" title="Next"><span class="fas fa-arrow-right"></span></button>
            </div>
            <div class="col-auto col-md-auto order-md-2">
                <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
            </div>
            <div class="col col-md-auto d-flex justify-content-end order-md-3">
                <button class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Aujourd'hui</button>
            </div>
            <div class="col-md-auto d-md-none">
                <hr />
            </div>
            <div class="col-auto d-flex order-md-0">
                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                    data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Ajouter</button>
            </div>
            <div class="col d-flex justify-content-end order-md-2">
                <div class="dropdown font-sans-serif me-md-2">
                    <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                        type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport"
                        aria-haspopup="true" aria-expanded="false"><span data-view-title="data-view-title">Vue
                            mensuelle</span><span class="fas fa-sort ms-2 fs--1"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter"><a
                            class="active dropdown-item d-flex justify-content-between" href="#!"
                            data-fc-view="dayGridMonth">Vue mensuelle<span class="icon-check"><span class="fas fa-check"
                                    data-fa-transform="down-4 shrink-4"></span></span></a><a
                            class="dropdown-item d-flex justify-content-between" href="#!"
                            data-fc-view="timeGridWeek">Vue hebdomadaire<span class="icon-check"><span
                                    class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                            class="dropdown-item d-flex justify-content-between" href="#!"
                            data-fc-view="timeGridDay">Vue quotidienne<span class="icon-check"><span
                                    class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                            class="dropdown-item d-flex justify-content-between" href="#!"
                            data-fc-view="listWeek">Affichage de liste<span class="icon-check"><span
                                    class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                            class="dropdown-item d-flex justify-content-between" href="#!" data-fc-view="listYear">Vue
                            de l'année<span class="icon-check"><span class="fas fa-check"
                                    data-fa-transform="down-4 shrink-4"></span></span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0 scrollbar">
        <div class="calendar-outline" id="appCalendar"></div>
    </div>
    <div class="modal fade" id="eventDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border"></div>
        </div>
    </div>
    <div class="modal fade" id="addEventModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content border">
                <form id="addEventForm" method="POST" autocomplete="off" action="{{ route('calendrier.store') }}">
                    @csrf
                    <div class="modal-header px-x1 bg-light border-bottom-0">
                        <h5 class="modal-title">Ajouter Calendrier</h5>
                        <button class="btn-close me-n1" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-x1">
                        <div class="mb-3">
                            <label class="fs-0" for="titre">Title</label>
                            <input class="form-control" id="titre" type="text" name="titre" required="required" />
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="date_debut">Date début</label>
                            <input class="form-control datetimepicker" id="date_debut" type="text" required="required"
                                name="date_debut" placeholder="yyyy/mm/dd hh:mm"
                                data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="date_fin">Date fin</label>
                            <input class="form-control datetimepicker" id="date_fin" type="text" required="required"
                                name="date_fin" placeholder="yyyy/mm/dd hh:mm"
                                data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="encadrant">Encadrant</label>
                            <select class="form-select js-choice" id="encadrant" size="1" name="encadrant"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Choisissez l'encadrant</option>
                                @foreach ($users as $user)
                                <option value={{ $user->id }}>{{ $user->nom . ' ' . $user->prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="eventLabel">Type</label>
                            <select class="form-select js-choice" id="type" name="type" onchange="handleChangeType()">
                            </select>
                        </div>
                        <div class="mb-3" id="niveau-element" style="display: none">
                            <label class="fs-0" for="niveau">Niveau</label>
                            <select class="form-select js-choice" id="niveau" name="niveau"
                                onchange="handleChangeNiveau()">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="plongeurs">Plongeurs</label>
                            <select class="form-select js-choice" id="plongeurs" name="plongeurs" multiple="multiple">
                            </select>
                        </div>
                        <div class="mb-3" id="exercices-element" style="display: none">
                            <label class="fs-0" for="exercices">Exercices</label>
                            <select class="form-select js-choice" id="exercices" name="exercices" multiple="multiple">
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="observation">Observation</label>
                            <textarea class="form-control" rows="3" name="observation" id="observation"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end align-items-center bg-light border-0"><a
                            class="me-3 text-600" role="button" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                        <button class="btn btn-primary px-4" id="sauvgarder_calendrier"
                            type="submit">Sauvgarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/choices/choices.min.js') }}></script>
<script>
    const niveauElement = document.getElementById('niveau');
        let choicesNiveau = new Choices(niveauElement, {
            removeItemButton: true,
            placeholder: true
        });
        const plongeursElement = document.getElementById('plongeurs');
        let choicesPlongeurs = new Choices(plongeursElement, {
            removeItemButton:true,
            placeholder: true
        });
        const exercicesElement = document.getElementById('exercices');
        let choicesExercices = new Choices(exercicesElement, {
            removeItemButton:true,
            placeholder: true
        });
        const typeElement = document.getElementById('type');
        let choicesType = new Choices(typeElement, {
            removeItemButton:true,
            placeholder: true
        });
        choicesType.setChoices([
            {value: "Sortie loisir", label: "Sortie loisir"},
            {value: "Sortie formation", label: "Sortie formation"},
            {value: "Sortie association", label: "Sortie association"},
            {value: "Formation de niveau", label: "Formation de niveau"}
        ]);
        async function handleChangeType() {
            const type = document.getElementById("type").value;
            document.getElementById("niveau").value = "";
            if(type === "Formation de niveau") {
                choicesPlongeurs.clearStore();
                document.getElementById("niveau-element").style.display = "block";
                choicesNiveau.setChoices(async () => {
                    try{
                        const res = await axios.get("/dashboard/niveaux");
                        return res.data.map(el => ({value: el.id, label: el.label}));
                    } catch (err) {
                        console.error(err);
                    }
                }
                );
            } else {
                document.getElementById("exercices-element").style.display = "none";
                choicesNiveau.clearStore();
                choicesPlongeurs.clearStore();
                document.getElementById("niveau-element").style.display = "none";
                choicesPlongeurs.setChoices(async () => {
                        try{
                            const res = await axios.get("/dashboard/plongeurs/api");
                            return res.data.map(el => ({
                                value: el.id,
                                label: el.label,
                                choices: el.plongeurs.map((plongeur) => ({
                                    value: plongeur.id,
                                    label: plongeur.nom + " " + plongeur.prenom
                                }))}));
                        } catch (err) {
                            console.error(err);
                        }
                    }
                );
            }
        }

        async function handleChangeNiveau() {
            choicesPlongeurs.clearStore();
            choicesExercices.clearStore();
            if(niveauElement.value) {
                document.getElementById("exercices-element").style.display = "block";
                choicesPlongeurs.setChoices(async () => {
                        try{
                            const res = await axios.get(`/dashboard/plongeurs/niveau/${niveauElement.value}`);
                            return res.data.map(el => ({value: el.id, label: el.nom + " " + el.prenom}));
                        } catch (err) {
                            console.error(err);
                        }
                    }
                );
                choicesExercices.setChoices(async () => {
                        try{
                            const res = await axios.get(`/dashboard/exercices/niveau/${niveauElement.value}`);
                            return res.data.map(el => ({ value: el.id, label: el.label }));
                        } catch (err) {
                            console.error(err);
                        }
                    }
                );
            } else {
                document.getElementById("exercices-element").style.display = "none";
            }

        }
</script>
@endsection