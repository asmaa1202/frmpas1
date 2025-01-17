@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Mon Compte</title>
@endsection

@section('content')
@if (isset($message) && $message)
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5" aria-live="polite" aria-atomic="true">
    <div class="toast show align-items-center text-white bg-success border-0" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ $message }}
            </div>
            <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <h3>Profile</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>

        </div>
    </div>
</div>


<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body bg-light">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom</label>
                        <div class="has-validation">
                            <input class="form-control @error('nom') is-invalid @enderror" id="nom"
                                value="{{ old('nom', auth()->user()->nom) }}" name="nom">
                            @error('nom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="prenom">Prénom</label>
                        <div class="has-validation">
                            <input class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom"
                                value="{{ old('prenom', auth()->user()->prenom) }}">
                            @error('prenom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="email">E-mail</label>
                        <div class="has-validation">
                            <input class="form-control @error('email') is-invalid @enderror" id="email1" name="email"
                                value="{{ old('email', auth()->user()->email) }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Mot de passe</label>
                        <div class="has-validation">
                            <input class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" type="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Confirmez le mot de passe</label>
                        <input class="form-control" id="password_confirmation" type="password"
                            name="password_confirmation" autocomplete="new-password">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary" onclick="modifierCompte()"
                            id="liveToastBtn">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>
@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    async function modifierCompte() {
            try {
                const nom = document.getElementById("nom").value;
                const prenom = document.getElementById("prenom").value;
                const email = document.getElementById("email1").value;
                const password = document.getElementById("password").value;
                const password_confirmation = document.getElementById("password_confirmation").value;

                const response = await axios.put(`/dashboard/mon-compte`, {
                    nom,
                    prenom,
                    email,
                    password,
                    password_confirmation
                });
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
                }
            } catch (err) {
                alert(err)
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