@extends('plongeurDash.layout.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .remaining-days-warning {
        color: red;
        font-weight: bold;
        margin-top: 5px;
        animation: pulse 1s infinite;
    }
    .highlight {
        color: green;
        font-weight: bold;
    }
    @keyframes pulse {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.5;
            transform: scale(1.1);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    .dropzone .dz-preview-single .dz-preview-img {
        width: 50% !important;
    }
.signal-button {
    animation: pulse-signal 1.5s infinite;
    border-width: 2px; /* Pour rendre le contour plus visible */
    font-weight: bold;
}

@keyframes pulse-signal {
    0% {
        transform: scale(1);
        /* box-shadow: 0 0 5px rgba(248, 84, 84, 0.8); */
    }
    50% {
        transform: scale(1.1);
        /* box-shadow: 0 0 15px rgb(231, 50, 50); */
    }
    100% {
        transform: scale(1);
        /* box-shadow: 0 0 5px rgba(248, 84, 84, 0.8); */
    }
}

</style>
@section('content')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-4.png') }});">
    </div>
    <!--/.bg-holder-->


    <div class="card-body position-relative">
        <div class="row">
            <div class="{{ isset($active_licence) ? 'col-lg-6' : 'col-lg-8' }}">
                
                <div class="d-flex align-items-center">
                    <img class="rounded me-3" src="{{ Auth::guard('plongeurs')->user()->image }}" alt="" width="100">
                  
                    <div class="ms-1 ms-sm-3">
                        <p class="fw-semi-bold mb-3 mb-sm-2 fs-1"><a href="#">{{ Auth::guard('plongeurs')->user()->nom }} {{ Auth::guard('plongeurs')->user()->prenom }}</a>
                  
                        </p>
                        <div class="row align-items-center gx-0 gy-2">
                            <div class="col-auto me-2">
                                <h6 class="client mb-0">
                                        <svg
                                            class="svg-inline--fa fa-user fa-w-14" data-fa-transform="shrink-3 up-1" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="user" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""
                                            style="transform-origin: 0.4375em 0.4375em;">
                                            <g transform="translate(224 256)">
                                                <g transform="translate(0, -32)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                    <path fill="currentColor"
                                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                        transform="translate(-224 -256)"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <span>{{ ucfirst(Auth::guard('plongeurs')->user()->type_plongeur->type) ?? '--' }}</span>&nbsp;&nbsp;{{ $active_licence ? '#'.$active_licence->custom_id : '' }}
                                </h6>
                            </div>

                            <div class="col-auto lh-1 me-3">
                                @if(isset($active_licence) && $active_licence->statut == 'accepter')
                                    <small class="badge rounded badge-subtle-success false">Actif</small>
                                @else
                                    <small class="badge rounded badge rounded badge-subtle-danger false">Inactif</small>
                                @endif
                            </div>
                                
                            


                            <div class="col-auto">
                                <h6 class=" {{ now()->month !== 12 ? 'mb-0 text-500' : 'remaining-days-warning' }}">{{ $remainingDays }} jours restants</h6>
                            </div>
                        </div>


                        <div class="row align-items-center gx-0 gy-2" style="margin-top:.5px;">
                            <div class="col-auto me-2">
                                <h6 class="client mb-0">
                                  
                                        {{-- <svg
                                            class="svg-inline--fa fa-user fa-w-14" data-fa-transform="shrink-3 up-1" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="user" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""
                                            style="transform-origin: 0.4375em 0.4375em;">
                                            <g transform="translate(224 256)">
                                                <g transform="translate(0, -32)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                    <path fill="currentColor"
                                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                        transform="translate(-224 -256)"></path>
                                                </g>
                                            </g>
                                        </svg><!-- <span class="fas fa-user" data-fa-transform="shrink-3 up-1"></span> Font Awesome fontawesome.com --> --}}
                                        <span>{{ Auth::guard('plongeurs')->user()->club->nom }}</span>
                                   </h6>
                            </div>
                            <div class="col-auto lh-1 me-3">
                                @if(isset($adhesion_club))
                                    <small class="badge rounded badge-subtle-success false">Actif</small>
                                @else
                                    <small class="badge rounded badge rounded badge-subtle-danger false">Inactif</small>
                                @endif
                            </div>
                          
                        </div>

                      

                    </div>
                       
                  
                        
                </div>
                
            </div>
            
               
            @if(isset($active_licence) && $active_licence->statut == 'accepter')

                 <div class="d-flex flex-column justify-content-center align-items-end" style="height: 100%; position: absolute; bottom: 0; right: 0; width: fit-content;">
                    
                    @if(empty($active_licence_next_year) && now()->month == 12)
                    <div class="mb-2">
                        <button class="btn btn-danger signal-button" data-bs-toggle="modal" data-bs-target="#licenceModal">
                            Demande de licence
                        </button>
                    </div>
                    @elseif(isset($active_licence_next_year) && now()->month == 12 && ($active_licence_next_year->statut == 'en cours' || $active_licence_next_year->statut == 'en_cours_validation'))
                    <div class="mb-2">
                        <button class="btn" style="background: #279e5b; color: white;">
                            Votre demande a été envoyée
                        </button>
                    </div>
                    @endif
                    <div>
                        <a href="{{ route('attestation.licence', Auth::guard('plongeurs')->user()->id) }}" 
                           class="btn btn-primary" target="__blank">
                            <i class="bi bi-file-earmark-arrow-down-fill"></i> Attestation de licence
                        </a>
                    </div>
                    
                </div>
                
                
            @elseif(isset($active_licence) && ($active_licence->statut == 'en cours' || $active_licence->statut == 'en_cours_validation'))
                <div class="col-lg-6 d-flex justify-content-end align-items-center flex-wrap">
                    <button class="btn" style="background: #279e5b; color: white;">
                        Votre demande a été envoyée
                    </button>
                </div>
            @elseif(empty($active_licence))
                <div class="col-lg-4 d-flex justify-content-end align-items-center flex-wrap">   
                    <button class="btn btn-danger signal-button" data-bs-toggle="modal" data-bs-target="#licenceModal">
                        Demande de licence
                    </button>
                </div>
            @endif
        </div>
    </div>




</div>
{{-- <div class="card mb-3">
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-1.png') }});">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                                    data-countup="{&quot;endValue&quot;:58.386,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    58.39k</div><a class="fw-semi-bold fs--1 text-nowrap"
                                    href="../app/e-commerce/customers.html">Voir tout<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-2.png') }});">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions Express</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-5.png') }});">
                            </div>
                            <!--/.bg-holder-->

                            <div class="card-body position-relative">
                                <h6>Missions Normales</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card"
                                style="background-image:url({{ asset('dashboard/img/icons/spot-illustrations/corner-7.png') }});">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Missions Garantie Réparation</h6>
                                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                    data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">
                                    23.43k</div><a class="fw-semi-bold fs--1 text-nowrap" href="#">Voir tout
                                    <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Modal Licence -->
<div class="modal fade" id="licenceModal" tabindex="-1" aria-labelledby="licenceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="licenceModalLabel">Télécharger l'attestation de paiement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
         
                <form action="/upload" class="dropzone" id="my-dropzone">
                    <div class="dz-message">
                        Glissez-déposez ou cliquez pour télécharger l'attestation de paiement (PDF, image).
                    </div>
                </form>
                
            
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" onclick="demandeLicence({{ Auth::guard('plongeurs')->user()->id }})">Envoyer</button>
            </div>
        </div>
    </div>
</div>
<div id="notification"></div>

@section('javascript')

<script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/min/dropzone.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
  // Configuration de Dropzone
  var myDropzone = new Dropzone("#my-dropzone", {
    url: "/plongeur/demande-licence",  // URL pour l'upload
    paramName: "file",  // Nom du paramètre pour l'envoi du fichier
    maxFilesize: 3,  // Taille max du fichier (en Mo)
    maxFiles: 1,  // Limiter à un seul fichier
    acceptedFiles: ".jpg,.jpeg,.png,.gif,.pdf",  // Types de fichiers acceptés
    addRemoveLinks: true,  // Permet d'ajouter des liens de suppression
  
    init: function () {
            this.on("maxfilesexceeded", function (file) {
                this.removeAllFiles(); // Supprimer le fichier précédent
                this.addFile(file); // Ajouter le nouveau fichier
            });

            this.on("thumbnail", function (file) {
                if (!file.type.startsWith("image/")) {
                    // Remplacer l'aperçu par une icône ou une image de dossier
                    file.previewElement.querySelector("img").src = "{{asset('assets/img/image-file-2.png')}}"; // Remplacez par le chemin de votre icône de dossier
                }
            });

            this.on("removedfile", function (file) {
                console.log("Fichier supprimé : ", file.name);
                // Ajoutez ici une requête pour supprimer le fichier côté serveur si nécessaire
            });

            this.on("success", function (file, response) {
                console.log("Fichier téléchargé avec succès : ", response);
            });

            this.on("error", function (file, errorMessage) {
                console.error("Erreur lors du téléchargement : ", errorMessage);
            });
        }
   
  });

  // Supprimer tous les fichiers
  document.getElementById('remove-all-files').addEventListener('click', function() {
    myDropzone.removeAllFiles(true);  // true pour forcer la suppression du fichier du DOM
    console.log("Tous les fichiers ont été supprimés.");
  });


    async function demandeLicence(id) {
        try {
            // Vérifiez que Dropzone a un fichier accepté
            const files = myDropzone.getAcceptedFiles();
            // if (files.length === 0) {
            //     alert("Aucun fichier sélectionné.");
            //     return;
            // }

            // Créer un FormData et ajouter le fichier
            let formData = new FormData();
            formData.append("document", files[0]);

            // Envoyer le fichier à Laravel via axios
            const res = await axios.post(`/plongeur/demande-licence/${id}`, formData, {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            });

            // Notification de succès
            if (res.status === 200) {
                // const notif = `
                //     <div class="toast-container position-fixed bottom-0 end-0 p-3">
                //         <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                //             <div class="toast-header">
                //                 <div style="width: 15px;height: 15px;background: green;border-radius: 3px;margin-right: 5px;"></div>
                //                 <strong class="me-auto">FRMPAS</strong>
                //                 <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                //             </div>
                //             <div class="toast-body">
                //                 ${res.data.message}
                //             </div>
                //         </div>
                //     </div>`;
                // document.getElementById("notification").innerHTML = notif;

                // const toastLiveExample = document.getElementById('liveToast');
                // const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                // toastBootstrap.show();
                location.reload();
            }
        } catch (err) {
            console.error(err);
            // Notification d'erreur
            const notif = `
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div style="width: 15px;height: 15px;background: red;border-radius: 3px;margin-right: 5px;"></div>
                            <strong class="me-auto">FRMPAS</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Erreur survenue lors de l'envoi de la demande.
                        </div>
                    </div>
                </div>`;
            document.getElementById("notification").innerHTML = notif;

            const toastLiveExample = document.getElementById('liveToast');
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastBootstrap.show();
        }
    }
</script>

@endsection
@endsection