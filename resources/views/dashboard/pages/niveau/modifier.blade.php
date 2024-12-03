@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Modifier niveau</title>
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
                <h3>Ajouter un Niveau</h3>
                <p class="mb-0">Rapide, intelligent et vous pouvez voir toutes les analyses sur cette page.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-end align-items-center">
                <a href="{{ route('blogs.index') }}" role="button" class="btn btn-outline-primary">
                    <span class="fas fa-arrow-left me-1" data-fa-transform="shrink-3"></span>Retour
                </a>
            </div>
        </div>
    </div>
</div>



<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body ">
                <img src="{{ $blog->image }}" id="image" width="130">
                <div class="mb-3 ">
                    <label for="formFile" class="form-label">Image :</label>
                    <input class="form-control" type="file" value="{{ old('image', $blog->image) }}" name="file"
                        onchange="handleChangeImage()">
                </div>
            </div>
        </div>
        <div class="card mb-3">

            <div class="card-body">
                <div class="row gx-2">
                    <div class="mb-3">
                        <label class="form-label" for="title">Titre :</label>
                        <input class="form-control" id="title" value="{{ old('title', $blog->title) }}" type="text" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tag">Tags :</label>
                        <input class="form-control js-choice" id="tags" value="{{ old('tags', $blog->tag) }}"
                            type="text" name="tags" required="required" size="1"
                            data-options='{"removeItemButton":true,"placeholder":false}' />
                    </div>
                    <div class="mb-3">
                        <div class="min-vh-50">
                            <label class="form-label" for="content">Contenu :</label>
                            <textarea class="tinymce d-none" data-tinymce="data-tinymce" id="content"
                                name="content">{{ $blog->content }}</textarea>
                        </div>
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
                <button class="btn btn-primary me-3" onclick="modifierNiveau({{ $blog->id }})" id="liveToastBtn">
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
<script src={{ asset('dashboard/vendors/tinymce/tinymce.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script>
    let file;
        const image = document.getElementById("image");

        function handleChangeImage() {

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


        async function modifierNiveau(id) {
            try {
                let formData = new FormData();
                formData.append("image", file);
                formData.append("tags", document.getElementById("tags").value);
                formData.append("title", document.getElementById("title").value);
                formData.append("content", document.getElementById("content").value);
                const toastTrigger = document.getElementById('liveToastBtn');
                toastTrigger.disabled = true;
                const res = await axios.post(`/dashboard/blogs/modifier/${id}`, formData, {
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
                    const toastLiveExample = document.getElementById('liveToast')
                    if (toastTrigger) {
                        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                        toastBootstrap.show();
                    }
                    file = "";
                    toastTrigger.disabled = false;
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