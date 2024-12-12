{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }
        .card-text {
            font-size: 0.95rem;
            color: #555;
        }
        h1 {
            font-size: 20px;
            font-weight: bold;
            color: #444;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
{{-- </head>
<body> --}}
@extends('layout.master')

@section('content')

<section class="page_title ds s-parallax s-overlay s-pt-160 s-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1>Programme Annuel Des Sessions Et Des Formations <br> De Specialites 2024-2025</h1>
                
            </div>

        </div>
    </div>
</section>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Sessions Fédérales de Monitorats</h5>
                    <p class="card-text"><strong>Lieu:</strong> Belyounech</p>
                    <p class="card-text"><strong>Date:</strong> Déc-24</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Sessions Fédérales de Monitorats</h5>
                    <p class="card-text"><strong>Lieu:</strong> M'diq</p>
                    <p class="card-text"><strong>Date:</strong> Mars-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Sessions Fédérales de Monitorats</h5>
                    <p class="card-text"><strong>Lieu:</strong> Casablanca</p>
                    <p class="card-text"><strong>Date:</strong> Avr-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Sessions Fédérales de Monitorats</h5>
                    <p class="card-text"><strong>Lieu:</strong> Al Hoceima</p>
                    <p class="card-text"><strong>Date:</strong> Nov-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Session Fédérale Spécialité Photographie pour Moniteur, P1.</h5>
                    <p class="card-text"><strong>Lieu:</strong> A DEFINIR</p>
                    <p class="card-text"><strong>Date:</strong> Janv-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Session Fédérale Spécialité Nitrox pour Moniteur. P1 et P2.</h5>
                    <p class="card-text"><strong>Lieu:</strong> A DEFINIR</p>
                    <p class="card-text"><strong>Date:</strong> Févr-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Session Fédérale Spécialité Secourisme pour Moniteur et P1.</h5>
                    <p class="card-text"><strong>Lieu:</strong> A DEFINIR</p>
                    <p class="card-text"><strong>Date:</strong> Avr-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Session Fédérale Spécialité Oxygénothérapie pour Moniteur et P1.</h5>
                    <p class="card-text"><strong>Lieu:</strong> A DEFINIR</p>
                    <p class="card-text"><strong>Date:</strong> Oct-25</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Session Fédérale Spécialité TIV pour Moniteur et P1.</h5>
                    <p class="card-text"><strong>Lieu:</strong> A DEFINIR</p>
                    <p class="card-text"><strong>Date:</strong> Nov-25</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
