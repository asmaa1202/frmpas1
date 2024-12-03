@extends('plongeurDash.layout.master')

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
    {{-- <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                    <div class="position-relative z-1" data-bs-theme="light">
                        <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                        <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                    </div>
                    <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4 px-5">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="modal-auth-name">Name</label>
                            <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="modal-auth-email">Email address</label>
                            <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                        </div>
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="modal-auth-password">Password</label>
                                <input class="form-control" type="password" autocomplete="on"
                                    id="modal-auth-password" />
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                                <input class="form-control" type="password" autocomplete="on"
                                    id="modal-auth-confirm-password" />
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                            <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms
                                </a>and <a href="#!">privacy policy</a></label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                name="submit">Register</button>
                        </div>
                    </form>
                    <div class="position-relative mt-5">
                        <hr />
                        <div class="divider-content-center">or register with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span
                                    class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a>
                        </div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                                    class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="eventDetailsModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border"></div>
        </div>
    </div>
    <div class="modal fade" id="addEventModal" tabindex="-1">
        <div class="modal-dialog">
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
                            <label class="fs-0" for="instructeur">Encadrant</label>
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
                            <select class="form-select" id="type" name="type">
                                <option value="" selected="selected">None</option>
                                <option value="Sortie loisir">Sortie loisir</option>
                                <option value="Sortie formation">Sortie formation</option>
                                <option value="Sortie association">Sortie association</option>
                                <option value="Formation de niveau">Formation de niveau</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="fs-0" for="observation">Observation</label>
                            <textarea class="form-control" rows="3" name="observation" id="observation"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-end align-items-center bg-light border-0"><a
                            class="me-3 text-600" href="../app/events/create-an-event.html">Annuler</a>
                        <button class="btn btn-primary px-4" id="sauvgarder_calendrier"
                            type="submit">Sauvgarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div id="notification"></div>
@endsection



@section('javascript')
<script src={{ asset('dashboard/vendors/choices/choices.min.js') }}></script>
<script src={{ asset('dashboard/vendors/inputmask/inputmask.min.js') }}></script>
@endsection