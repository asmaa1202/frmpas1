@extends('dashboard.layout.master')

@section('title')
<title>FRMPAS - Ajouter niveau</title>
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
<div id="notification"></div>
<div class="row g-0">
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" name="file" onchange="handleChageImage()">
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="row gx-2">
                    <div class="mb-3">
                        <label class="form-label" for="title">Titre :</label>
                        <input class="form-control" id="title" type="text" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tag">Tags :</label>
                        <input class="form-control js-choice" id="tags" type="text" name="tags" required="required"
                            size="1" data-options='{"removeItemButton":true,"placeholder":false}' />
                    </div>
                    <div class="mb-3">
                        <div class="min-vh-50">
                            <label class="form-label" for="content">Contenu :</label>
                            <textarea class="tinymce d-none" data-tinymce="data-tinymce" id="content"
                                name="content"></textarea>
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
                <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Annuler</button>
                <button class="btn btn-primary me-3" onclick="addNiveau()" id="liveToastBtn">
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
    var file = "";

        function handleChageImage() {
            file = document.querySelector('input[type=file]').files[0];

        }

        async function addNiveau() {
            try {
                let formData = new FormData();

                const tags = document.getElementById("tags").value;
                const title = document.getElementById("title").value;
                const content = document.getElementById("content").value;

                formData.append("image", file);
                formData.append("tags", tags);
                formData.append("title", title);
                formData.append("content", content);

                await axios.post('/dashboard/blogs/ajouter', formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    }
                });
            } catch (err) {
                console.log({
                    err
                });
            }

        }
</script>
@endsection