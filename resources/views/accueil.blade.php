@extends('modele')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mx-auto">
            <p class="text-center">Jeux Olympiques de Paris 2024, le site officiel</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img src="https://media.lesechos.com/api/v1/images/view/5bf3c15b3e45462f491acfee/par_defaut/image.jpg" class="card-img-top" alt="Le Stade de France">
                <div class="card-body">
                  <h5 class="card-title">Tous les lieux</h5>
                  <p class="card-text">Découvrez la liste de tous les lieux de compétition.</p>
                  <a href="venues" class="btn btn-primary">Découvrir</a>
                </div>
            </div>
        </div>

        <div class="col mx-auto">
            <div class="card" style="width: 20rem;">
                <img src="https://media.istockphoto.com/id/965891266/fr/photo/billets-match-de-tournoi-2018.jpg?s=612x612&w=0&k=20&c=DEKxdgzjsys7ENsNiPkHRfp8Mao1RBG5FA77Nwggk8Y=" class="card-img-top" alt="Tickets pur un match">
                <div class="card-body">
                  <h5 class="card-title">Billeterie</h5>
                  <p class="card-text">Accédez à la billeterie pour assister aux Jeux Olympiques 2024.</p>
                  <a href="billets" class="btn btn-primary">Réserver</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 20rem;">
                <img src="https://media.lesechos.com/api/v1/images/view/5bf3c15b3e45462f491acfee/par_defaut/image.jpg" class="card-img-top" alt="Le Stade de France">
                <div class="card-body">
                  <h5 class="card-title">Tous les lieux</h5>
                  <p class="card-text">Découvrez la liste de tous les lieux de compétition.</p>
                  <a href="venues" class="btn btn-primary">Découvrir</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection