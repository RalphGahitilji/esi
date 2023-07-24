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
    <section ><br>
        <div class="container formul"><br><br>
            <div class="header">
                <p class="head" align="center">FORMULAIRE D'INSCRIPTION</p>
            </div><br>
            <form action="{{route('save')}}" method="post" class="formulaire">
                @csrf
                <div class="form-control">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="username" placeholder="Entrer votre nom">
                </div>
                <div class="form-control ">
                    <label for="">Prénom(s)</label>
                    <input type="text" name="prenom" id="username" placeholder="Entrer votre Prénom.s" required autocomplete="off">
                </div>
                <div class="form-control ">
                    <label for="">Email</label>
                    <input type="Email" name="email" id="email" placeholder="exemple@exmeple.com" required>
                </div>
                @error('email')
                    <p class="text-danger">Cet email existe déja </p>
                @enderror('email')
                <div class="form-control ">
                    <label for="">Telephone</label>
                    <input type="phone" name="phone" id="phone" placeholder="00 00 00 00" required>
                </div>
                @error('numero')
                    <p class="text-danger">Veillez saisir obligatoirement 8 chiffres </p>
                @enderror('numero')<br><br>
                <div class="row">
                    <div align="center">
                        <button type="submit"> <i class="fas fa-save"></i>ENREGISTRER</button><br><br><br>
                    </div>
                </div>
            </form>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col offset-1">
                    <a href="{{ url('/') }}">
                        <button type="button"> <i class="fa-solid fa-house"></i>  Acceuil</button>
                    </a>
                </div>
                <div class="col offset-5">
                    <a href="{{ url('liste') }}">
                        <button type="button"> <i class="fa-solid fa-list"></i>  Liste</button>
                    </a>
                </div>
            </div>
        </div><br>
    </section>
	@include('layout.footer')
	<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>