@extends('modele')

@section('content')
{{$sports}}

<div class="container-sm">
    <div class="col-6 col-sm-3 mx-auto">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Prix min" aria-label="Filtre prix min" aria-describedby="p_min">
            <button class="btn btn-outline-secondary" type="button" id="p_min">Filtrer</button>
        </div>
    </div>

    <div class="col-6 col-sm-3 mx-auto">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Prix max" aria-label="Filtre prix max" aria-describedby="p_min">
            <button class="btn btn-outline-secondary" type="button" id="p_max">Filtrer</button>
        </div>
    </div>
</div>
@endsection