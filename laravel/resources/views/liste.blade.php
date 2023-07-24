<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap-5.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/font-awesome/css/all.css') }}">
    <title>Document</title>
</head>
<body>
@include('layout.header')
<br><br> 
<h1 align="center" class="fw-bold fs-2">LISTE DES ETUDIANTS DE L'UFR</h1><br>
<div class="container">
    <table class="table table-striped-columns text-white text-center tableau fw-bold " border="1" width="100%"  id="tableau">
    <thead class="table-info">
        <tr class="">
            <th>N°</th>
            <th>Nom</th>
            <th>Prénom(s)</th>
            <th>Naissance</th>
            <th>Genre</th>
            <th>Entrée UFR</th>
            <th>Personne besoin</th>
            <th colspan="3" class=" text-center">Action</th>
        </tr>
    </thead>
    <tbody>
                @php
                    $ide = 1;
                @endphp

        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $etudiant->Nom }}</td>
            <td>{{ $etudiant->Prenoms }}</td>
            <td>{{ $etudiant->Naissance }}</td>
            <td>{{ $etudiant->Genre }}</td>
            <td>{{ $etudiant->Entree }}</td>
            <td>{{ $etudiant->Besoin }}</td>
            <!-- <td><a href="{{ url('delete', ['id' => $etudiant->id]) }}"><button type="button" onclick="supprimer()" class="btn btn-danger">Supprimer</button></a></td>
            <td><a href="{{ url('modifie', ['id' => $etudiant->id]) }}"><button type="button" onclick="afficher()" class="btn btn-light">Modifier</button></a></td> -->
            <td><a class="btn btn-primary" href="{{route('modifier',$etudiant->id)}}">Modifier</a></td>
            <td><a class="btn btn-danger" onclick='return confirm("Voulez-vous vraiment supprimer cet étudiant")' href="{{route('supprimer',$etudiants->id)}}">Supprimer</a</td>
            <td><a class="btn btn-dark" href="{{route('detail',$etudiants->id)}}">Details</a></td>
        </tr>
        @php
            $ide +=1;
        @endphp

        @endforeach
    </tbody>
</table>
<br>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col offset-1">
            <a href="{{ url('/') }}">
                <button type="button" class="bord-green"><i class="fas fa-home"></i> Accueil</button>
            </a>
        </div>
        <div class="col offset-5">
            <a href="{{ url('inscription') }}">
                <button type="button" class="bord-green"><i class="fas fa-list"></i> Inscription</button>
            </a>
        </div>
    </div>
</div>
<br><br>
@include('layout.footer')
<script src="{{ asset('styles/bootstrap-5.2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap-5.2/js/bootstrap.bundle.js.map') }}"></script>
<script src="{{ asset('styles/bootstrap-5.2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('Script/index.js') }}"></script>
<script src="{{ asset('styles/bootstrap-5.2/js/bootstrap.min.js') }}"></script>
</body>
</html>
