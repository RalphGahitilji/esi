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
@include('layouts.header') </br></br>
<div class="container">
	<div class="row align-center">
		<div class="col-4">
			<img src="{{ asset('images/undraw_Completed_03xt.png') }}" width="400" height="380" alt="">
		</div>
		<div class="col-7 offset-1">
			<div class="row bg-dark">
				<p class="text-white fw-bold mt-3 fs-3 mx-auto text-center">Inscription Administrateur</p>
			</div></br>
            <form action="{{route('save')}}" method="post" class="formulaire"><br>
					@csrf
					<div class="bg-white">
						<input type="text" name="nom" class="form-control" id="username" placeholder="NOM">
						<input type="text" name="prenom" class="form-control" id="username" placeholder="PRENOM(S)" required autocomplete="off">
						<input type="Email" name="email" class="form-control" id="email" placeholder="EMAIL" required>
						<input type="password" name="password" class="form-control" id="password" placeholder="MOT DE PASSE" required>
						<input type="password" name="passwordconfirm" class="form-control" id="passwordconfirm" placeholder="CONFIRME LE MOT DE PASSE" required>
						<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
							<button type="submit" class="text-center btn btn-primary "><span class="fw-bold">INSCRIPTION</span></button><br><br></br>
						</a>
					</div><br>
            </form>
		</div>
	</div>
</div></br></br></br>
@include('layouts.footer')
</body>
</html>