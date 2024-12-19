@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Ajouter club</title>
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
                <h3>Ajouter un club</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <button class="btn btn-primary me-3" role="button" onclick="addclub()" id="liveToastBtn">
                    <i class="far fa-save me-1"></i>
                    Enregistrer
                </button>
                <a href="{{ route('plongeurs.index') }}" role="button" class="btn btn-outline-primary">
                    <span class="pe-1">Retour</span>
                    <span class="fas fa-arrow-right" data-fa-transform="shrink-3"></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-3 btn-reveal-trigger">
            <div class="card-header position-relative min-vh-25 mb-8">
                <div class="cover-image">
                    <div class="bg-holder rounded-3 rounded-bottom-0"
                        style="background-image:url(/images/federation.png);">
                    </div>
                </div>
                <div class="avatar avatar-5xl avatar-profile shadow-sm img-thumbnail rounded-circle">
                    <div class="h-100 w-100 rounded-circle overflow-hidden position-relative">
                        <img src={{ asset('/dashboard/img/team/avatar.png') }} width="200" alt=""
                            data-dz-thumbnail="data-dz-thumbnail" id="image" />
                        <input class="d-none" id="image_club" type="file" onchange="handleChageImage()"
                            accept="image/png, image/gif, image/jpeg" />
                        <label class="mb-0 overlay-icon d-flex flex-center" for="image_club"><span
                                class="bg-holder overlay overlay-0"></span><span
                                class="z-1 text-white dark__text-white text-center fs--1"><span
                                    class="fas fa-camera"></span><span class="d-block">Ajouter</span></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information principales</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
             
                    <div class="col-lg-6">
                        <label class="form-label" for="nom_club">Nom du club</label>
                        <input class="form-control" id="nom_club" type="text" name="nom_club"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="abreviation">Abréviation</label>
                        <input class="form-control" id="abreviation" type="text" name="abreviation"/>
                    </div>

                   {{-- <div class="col-sm-12">
                        <label class="form-label" for="adresse">adresse</label>
                        <input class="form-control" id="adresse" type="text" />
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <label class="form-label" for="date_creation">Legal structure</label>
                        <input class="form-control" id="date_creation" type="date" />
                    </div> --}}
                    <div class="col-lg-6">
                        <label for="legal_structure">Structure légale <span class="text-danger">*</span></label>
                        <select class="form-select js-choice" id="legal_structure" size="1" name="legal_structure"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez la région</option>
                            
                            <option value="societe">Société</option>
                            <option value="association">Association</option>
                            
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="date_creation">Date de création</label>
                        <input class="form-control" id="date_creation" type="date" />
                    </div>
                    {{-- <div class="col-lg-6">
                        <label class="form-label" for="document">Document</label>
                        <input class="form-control" id="document" type="file" name="document" />
                    </div> --}}
                    <div class="col-lg-6">
                        <label class="form-label" for="email_club">Adresse courriel</label>
                        <input class="form-control" id="email_club" type="email" name="email_club" placeholder="XXXX@XXX.XXX"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tel_club">Téléphone</label>
                        <input class="form-control" id="tel_club" type="tel" />
                    </div>
                    <h6 class="fw-bold">Type</h6>
                    <div class="ps-2 mt-0">
                        <div class="row mx-2">
                            @foreach($type_sportifs as $type)
                            <div class="form-check mb-0 lh-1 col-2">
                                <input class="form-check-input types" type="checkbox" value="{{ $type->type }}" name="types[]"
                                    id="{{ $type->type }}" />
                                <label class="form-check-label mb-0" for="{{ $type->type }}">{{ $type->type }}
                                </label>
                            </div>
                            @endforeach

                            <div class="form-check mb-0 lh-1 col-2">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" id="is_federal" type="checkbox" />
                                    <label class="form-check-label" for="is_federal">Fédéral</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2" style="margin-bottom:15px;">
        <div class="sticky-sidebar">
            <div class="card mb-3 overflow-hidden">
                <div class="card-header">
                    <h5 class="mb-0">Coordonnées</h5>
                </div>
                <div class="card-body bg-light">
                    <div class="mb-2">
                        <label for="region">Région <span class="text-danger">*</span></label>
                        <select class="form-select js-choice" id="region" size="1" name="region"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Choisissez la région</option>
                            
                            <option value="Nord">Nord</option>
                            <option value="Centre">Centre</option>
                            <option value="Sud">Sud</option>
                            
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="adresse_club">Adresse</label>
                        <input class="form-control" id="adresse_club" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="code_postal">Code postal</label>
                        <input class="form-control" id="code_postal" type="text" />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="ville_club">Ville</label>
                        <input class="form-control" id="ville_club" type="text" />
                    </div>
                    {{-- <div class="mb-2">
                        <label class="form-label" for="region">Région</label>
                        <input class="form-control" id="region" type="text" />
                    </div> --}}
                   
                </div>

            </div>
           
        </div>
    </div>
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Documents d'affiliations</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                
                    <div class="col-lg-6">
                        <label class="form-label" for="Statut_document">Statut conforme à la loi 30-09</label>
                        <input class="form-control" id="Statut_document" type="file" name="Statut_document"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="liste_bureau_document">liste de bureau à jour</label>
                        <input class="form-control" id="liste_bureau_document" type="file" />
                    </div>
                   <div class="col-lg-6">
                        <label class="form-label" for="pv_document">PV de la dernière assemblée générale</label>
                        <input class="form-control" id="pv_document" type="file" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="recepisse_document">Récépissé Provisoire ou définitive</label>
                        <input class="form-control" id="recepisse_document" type="file" name="recepisse_document"/>
                    </div>
                 
                    <div class="col-lg-6">
                        <label class="form-label" for="fiche_technique_document">Fiche technique</label>
                        <input class="form-control" id="fiche_technique_document" type="file" name="fiche_technique_document"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="ompic_document">Ompic</label>
                        <input class="form-control" id="ompic_document" type="file" name="ompic_document"/>
                    </div>
                   <div class="col-lg-6">
                        <label class="form-label" for="demande_accreditation_document">Demande d'accréditation</label>
                        <input class="form-control" id="demande_accreditation_document" type="file" name="email_personnel" placeholder="XXXX@XXX.XXX"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="attetation_paiemeent">Paiement des frais d'affiliation (3000dhs)</label>
                        <input class="form-control" id="attetation_paiemeent" type="file" />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Information personnels</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row g-3">
                
                    <div class="col-lg-6">
                        <label class="form-label" for="nom">Nom du président</label>
                        <input class="form-control" id="nom" type="text" name="nom"/>
                    </div>
                   <div class="col-sm-6">
                        <label class="form-label" for="prenom">Prénom du président</label>
                        <input class="form-control" id="prenom" type="text" />
                    </div>
                    {{-- <div class="col-lg-6">
                        <label class="form-label" for="cin">CIN</label>
                        <input class="form-control" id="cin" type="text" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="date_naissance">Dat naissance</label>
                        <input class="form-control" id="date_naissance" type="date" name="date_naissance"/>
                    </div> --}}
                 
                    {{-- <div class="col-lg-6">
                        <label class="form-label" for="tel_portable">Téléphone portable</label>
                        <input class="form-control" id="tel_portable" type="tel" name="tel_portable"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tel_fixe">Téléphone fixe</label>
                        <input class="form-control" id="tel_fixe" type="tel" name="tel_fixe"/>
                    </div> --}}
                   <div class="col-lg-6">
                        <label class="form-label" for="email_personnel">Adresse courriel</label>
                        <input class="form-control" id="email_personnel" type="email" name="email_personnel" placeholder="XXXX@XXX.XXX"/>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="password">Mot de passe</label>
                        <input class="form-control" id="password" type="text" />
                    </div>
                    
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-primary me-3" onclick="addclub()" id="liveToastBtn">
                            <i class="far fa-save me-1"></i>
                            Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="notification"></div>
@endsection

@section('javascript')
<script src={{ asset('dashboard/vendors/inputmask/inputmask.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    let file;
        const image = document.getElementById("image");

        function handleChageImage() {

            file = document.querySelector('input[type=file]').files[0];
            // FileReader support
            if (file) {
                var fr = new FileReader();
                fr.onload = function() {
                    image.src = fr.result;
                }
                fr.readAsDataURL(file);
            }
        }
        
        async function addclub() {
            try {
                let formData = new FormData();

 
                // const fileDocument = document.getElementById("document").files[0];
                // if (fileDocument) {
                //     // alert(fileDocument);
                //     formData.append("document", fileDocument);
                // }
               
                // console.log(document.querySelector(".type:checked").value);
                image.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
                // alert(document.getElementById("document").value);
            
                formData.append("image_club", file);
                // formData.append("document", document.getElementById("document").value);
                formData.append("nom_club", document.getElementById("nom_club").value);
                formData.append("abreviation", document.getElementById("abreviation").value);
                formData.append("legal_structure", document.getElementById("legal_structure").value);
                formData.append("date_creation", document.getElementById("date_creation").value);
                formData.append("email_club", document.getElementById("email_club").value);
                formData.append("tel_club", document.getElementById("tel_club").value);
                formData.append("adresse_club", document.getElementById("adresse_club").value);
                formData.append("code_postal", document.getElementById("code_postal").value);
                formData.append("ville_club", document.getElementById("ville_club").value);
                formData.append("region", document.getElementById("region").value);

                formData.append("nom", document.getElementById("nom").value);
                formData.append("prenom", document.getElementById("prenom").value);
                // formData.append("cin", document.getElementById("cin").value);
                // formData.append("date_naissance", document.getElementById("date_naissance").value);
                // formData.append("tel_portable", document.getElementById("tel_portable").value);
                // formData.append("tel_fixe", document.getElementById("tel_fixe").value);
                formData.append("email_personnel", document.getElementById("email_personnel").value);
                formData.append("password", document.getElementById("password").value);
                // formData.append("type", document.querySelectorAll(".type:checked").value);
                formData.append("is_federal", document.getElementById("is_federal").value);
                const checkedValuesTypes = Array.from(document.querySelectorAll(".types:checked")).map(el => el.value);
                // alert(checkedValuesTypes);
                // Ajouter le tableau de valeurs à FormData
                formData.append("types", JSON.stringify(checkedValuesTypes));

                const Statut_document = document.getElementById("Statut_document").files[0];
                if (Statut_document) {
                    // alert(Statut_document);
                    formData.append("Statut_document", Statut_document);
                }

                const liste_bureau_document = document.getElementById("liste_bureau_document").files[0];
                if (liste_bureau_document) {
                    // alert(liste_bureau_document);
                    formData.append("liste_bureau_document", liste_bureau_document);
                }

                const pv_document = document.getElementById("pv_document").files[0];
                if (pv_document) {
                    // alert(pv_document);
                    formData.append("pv_document", pv_document);
                }

                const recepisse_document = document.getElementById("recepisse_document").files[0];
                if (recepisse_document) {
                    // alert(recepisse_document);
                    formData.append("recepisse_document", recepisse_document);
                }

                const fiche_technique_document = document.getElementById("fiche_technique_document").files[0];
                if (fiche_technique_document) {
                    // alert(fiche_technique_document);
                    formData.append("fiche_technique_document", fiche_technique_document);
                }

                const ompic_document = document.getElementById("ompic_document").files[0];
                if (ompic_document) {
                    // alert(ompic_document);
                    formData.append("ompic_document", ompic_document);
                }

                const demande_accreditation_document = document.getElementById("demande_accreditation_document").files[0];
                if (demande_accreditation_document) {
                    // alert(demande_accreditation_document);
                    formData.append("demande_accreditation_document", demande_accreditation_document);
                }

                const attetation_paiemeent = document.getElementById("attetation_paiemeent").files[0];
                if (attetation_paiemeent) {
                    // alert(attetation_paiemeent);
                    formData.append("attetation_paiemeent", attetation_paiemeent);
                }
                const res = await axios.post('/dashboard/clubs', formData, {
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
                    file = "";
                    image_club.src = 'http://localhost:8000/dashboard/img/team/avatar.png';
                  

                    document.getElementById("image_club").value = "";
                    // document.getElementById("document").value = "";
                    document.getElementById("nom_club").value = "";
                    document.getElementById("abreviation").value = "";
                    document.getElementById("legal_structure").value = "";
                    document.getElementById("date_creation").value = "";
                    document.getElementById("email_club").value = "";
                    document.getElementById("tel_club").value = "";
                    document.getElementById("adresse_club").value = "";
                    document.getElementById("code_postal").value = "";
                    document.getElementById("ville_club").value = "";
                    document.getElementById("region").value = "";

                    document.getElementById("nom").value = "";
                    document.getElementById("prenom").value = "";
                    // document.getElementById("cin").value = "";
                    // document.getElementById("date_naissance").value = "";
                    // document.getElementById("tel_portable").value = "";
                    // document.getElementById("tel_fixe").value = "";
                    document.getElementById("email_personnel").value = "";
                    document.getElementById("password").value = "";
                    document.getElementById("is_federal").checked = false;
                    document.querySelectorAll(".types:checked").forEach(el => {
                        el.checked = false;
                    });
                    // document.querySelector(".type:checked").value = "";
                    // document.getElementById("password").value = "";
                    document.getElementById("Statut_document").value = "";
                    document.getElementById("liste_bureau_document").value = "";
                    document.getElementById("pv_document").value = "";
                    document.getElementById("recepisse_document").value = "";
                    document.getElementById("fiche_technique_document").value = "";
                    document.getElementById("ompic_document").value = "";
                    document.getElementById("demande_accreditation_document").value = "";
                    document.getElementById("attetation_paiemeent").value = "";

                }

            } catch (err) {
                alert(err);
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