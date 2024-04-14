    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=!, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Liste des ferries</title>
    </head>
    <body>
<center>
        <h1>{{$titre}}</h1>
        <h3>Date : {{$date}}</h3>

        @foreach($ferries as $ferry)
        <h1> {{$ferry->nom}}</h1>
<img src="{{ asset('photos/' . $ferry->photo) }}">
<p> Longueur : {{$ferry->longueur}}</p>
<p>Largeur : {{$ferry->largeur}}</p>
<p> Vitesse : {{$ferry->vitesse}}</p>
<h3>Liste des équipements :</h3>
@foreach($ferry->equipements as $equipement)
<li>
    {{$equipement->libelle}}
</li>
@endforeach
<br>
<hr>
@endforeach
</center>
    </body>
    </html>