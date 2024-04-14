@extends('template')
@section('titre')
Ferry {{$ferry->nom}}
@endsection
@section('contenu')
<div class="container">
<h1> {{$ferry->nom}}</h1>
<img src="../photos/{{$ferry->photo}}">
<br>
<br>
<p> Longueur : {{$ferry->longueur}}</p>
<p>Largeur : {{$ferry->largeur}}</p>
<p> Vitesse : {{$ferry->vitesse}}</p>
<br>
<h5>Liste des équipements :</h5>
@foreach($ferry->equipements as $equipement)
<li>
    {{$equipement->libelle}}
</li>
@endforeach
</div>
<div class="d-flex justify-content-center mt-4">
    <a class="btn btn-info" href="{{url()->previous()}}"> Retour</a>
</div>
@endsection