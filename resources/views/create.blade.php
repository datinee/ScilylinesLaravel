@extends('template')
@section('titre')
Création d'un ferry
@endsection
@section('contenu')
<div class="container">
<br>
<h1>Création d'un ferry</h1>
<br>
<form action="{{route('ferry.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom du ferry">
        @error('nom')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="longueur" class="form-label">Longueur</label>
        <input type="text" class="form-control @error('longueur') is-invalid @enderror" name="longueur" id="longueur" placeholder="Longueur en mètres">
        @error('longueur')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="largeur" class="form-label">Largeur</label>
        <input type="text" class="form-control @error('largeur') is-invalid @enderror" name="largeur" id="largeur" placeholder="Largeur en mètres">
        @error('largeur')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="vitesse" class="form-label">Vitesse</label>
        <input type="text" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" id="vitesse" placeholder="Vitesse en noeuds">
        @error('vitesse')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nom" class="form-label">Télécharger la photo</label>
        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo">
        @error('photo')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="label">Equipements : </label><br>
        @php
            $i=0;
        @endphp
        @foreach($equipements as $equipement)
        <input
        type="checkbox"
        name="equipement_id[]"
        id="cbox{{$i++}}"
        onclick="activation(id,{{$equipement->id}})"
        value="{{$equipement->id}}"> {{$equipement->libelle}}
        <br>

        @endforeach
    </div>
    <div class="control">
        <button class="btn btn-primary">Envoyer</button>
    </div>
</form>
</div>
@endsection