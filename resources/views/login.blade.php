@extends('modele')

@section('content')
<div class="container-lg">

<p class="text-center">Connexion</p>

<form class="mx-auto" action="{{route('login')}}" method="post">

    Identifiant (Email)
    <input type="email" name="email" value="{{old('email')}}">
    @error('email')
    {{ $message }}
    @enderror
    <br>

    Mot de passe
    <input type="password" name="mdp">
    @error("mdp")
    {{ $message }}
    @enderror
    <br>
    <input type="submit" value="Connexion">

    @csrf
</form>

<p> Nouvel/le utilisateur/trice ? <a href="register">Créez votre compte</a>

    
@endsection