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
		<div class="col-5">
			<img src="{{ asset('images/undraw_Educator_re_ju47.png') }}" width="500" height="380" alt="">
		</div>
		<div class="col-6 offset-1">
			<div class="row bg-dark">
			<marquee behavior="scroll" direction="left" width="100%" scrollamount="5" scrolldelay="15">
				<p class="text-white fw-bold mt-3 mx-auto text-center">Welcome to StudentGestion -Bienvenue à StudentGestion</p>
			</marquee><br>
			</div></br></br>
			<div class="row">
				<p class="fs-5 fw-bold redtext mt-3">Application de Gestion des cartes d'étudiants de l'ESI</p>
			</div>
			<div class="row">
				<p class="fs-5 fw-bold redtext mt-3">ESI Application for student cards management</p>
			</div>
			<div class="text-center row">
				<div class="text-center pt-4 mt-5">
				@if (Route::has('login'))
					<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
						@auth
							<a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Dashboard</span></button>
							</a>
							@else
							<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Connexion</span></button>
							</a>
							@if (Route::has('register'))
							<a href="{{ route('register') }}" class="p-5 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Inscription</span></button>
							</a>
							@endif
						@endauth
					</div>
				@endif
				</div>
			</div>
		</div>
	</div>
</div></br></br></br>
@include('layouts.footer')
</body>
</html>