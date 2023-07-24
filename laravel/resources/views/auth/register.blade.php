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
			<img src="{{ asset('images/undraw_Sign_up_n6im.png') }}" width="400" height="380" alt="">
		</div>
		<div class="col-7 offset-1">
			<div class="row bg-dark">
				<p class="text-white fw-bold mt-3 fs-3 mx-auto text-center">Inscription Administrateur</p>
			</div></br>
			<div class="row">
                <div class="container bloc">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nom -->
                        <div class="mt-4">
                            <input id="nom" class="form-control block mt-1 w-full" type="text" placeholder="NOM" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Prenom -->
                        <div class="mt-4">
                            <input id="prenom" class="form-control block mt-1 w-full" type="text" placeholder="PRENOM(S)" name="prenom" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <input id="email" class="form-control block mt-1 w-full" type="email" placeholder="EMAIL" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4 relat">

                            <input id="password" class="form-control block mt-1 w-full"
                                            type="password" placeholder="MOT DE PASSE" name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="password-icon">
                                <i id="fa-eye" class="fas fa-eye"></i>
                                <i id="fa-eye-slash" class="fas fa-eye-slash"></i>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4 relat">

                            <input id="confirmed" class="form-control block mt-1 w-full" type="password" placeholder="CONFIRMEZ LE MOT DE PASSE" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('confirmation')" class="mt-2" />
                            <div class="password-icon">
                                <i id="fa-eye" class="fas fa-eye"></i>
                                <i id="fa-eye-slash" class="fas fa-eye-slash"></i>
                            </div>
                        </div>

                        <div class="mx-auto mt-4">
                            <a class="underline fw-bold text-sm text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button type="submit" class="btn btn-primary pl-5 fw-bold">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
</div></br></br></br>
@include('layouts.footer')
<script src="{{ asset('js/script.js') }}"></script></body>
</html>

