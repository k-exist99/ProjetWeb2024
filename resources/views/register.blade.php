@extends('modele')

@section('content')
<div class="container-fluid text-center">
    <div class="row">
    </div>
    <div class="row">
            <p class="h3">Créez votre compte</p>

            <form class="mx-auto" action="{{route('register')}}" method="post">
                Nom: 
                <input type="text" name="name">

                Email: 
                <input type="text" name="email">

                Mot de passe :
                <input type="password" name="mdp">
                <br>
                Confirmez votre mot de passe : <input type="password"
                                        name="mdp_confirmation">
                <input type="submit" value="Confirmer">
                @csrf
            </form>
    </div>
</div>
@endsection