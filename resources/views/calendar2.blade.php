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
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #444;
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #84e1fd;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .page-title{
            font-family: 'emoji';
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
                <h1 class="page-title">Programme Annuel Des Sessions Et Des Formations <br> De Specialites 2024-2025</h1>
                
            </div>

        </div>
    </div>
</section>

<div class="container my-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Événement</th>
                <th>Lieu</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sessions Fédérales de Monitorats</td>
                <td>Belyounech</td>
                <td>Déc-24</td>
            </tr>
            <tr>
                <td>Sessions Fédérales de Monitorats</td>
                <td>M'diq</td>                
                <td>Mars-25</td>
            </tr>
            <tr>
                <td>Sessions Fédérales de Monitorats</td>
                <td>Casablanca</td>
                <td>Avr-25</td>
            </tr>
            <tr>
                <td>Sessions Fédérales de Monitorats</td>
                <td>Al Hoceima</td>
                <td>Nov-25</td>
            </tr>
            <tr>
                <td>Session Fédérale Spécialité Photographie pour Moniteur, P1</td>
                <td>A DEFINIR</td>
                <td>Janv-25</td>
            </tr>
            <tr>
                <td>Session Fédérale Spécialité Nitrox pour Moniteur. P1 et P2</td>
                <td>A DEFINIR</td>
                <td>Févr-25</td>
            </tr>
            <tr>
                <td>Session Fédérale Spécialité Secourisme pour Moniteur et P1</td>
                <td>A DEFINIR</td>
                <td>Avr-25</td>
            </tr>
            <tr>
                <td>Session Fédérale Spécialité Oxygénothérapie pour Moniteur et P1</td>
                <td>A DEFINIR</td>
                <td>Oct-25</td>
            </tr>
            <tr>
                <td>Session Fédérale Spécialité TIV pour Moniteur et P1</td>
                <td>A DEFINIR</td>
                <td>Nov-25</td>
            </tr>
        </tbody>
    </table>
    <div class="text-end mb-3">
        <a href="{{ asset('calendrier.pdf') }}" download class="btn btn-primary">
            <i class="bi bi-download"></i> Télécharger le Calendrier
        </a>
    </div>
    
</div>
@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
