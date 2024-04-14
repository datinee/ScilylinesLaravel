@extends('template')
@section('titre')
Les Ferries
@endsection
@section('contenu')
<center>
<div class="container mt-4">
    <h1 style="color:#478bf1">Les Ferries</h1>
<br>
<a href="{{ route('ferry.create') }}" class="btn btn-info">Ajouter un ferry</a>
<br>
<br>
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($ferries as $ferry)

        <tr>

            <td>{{$ferry->nom}} </td>


            <td><a class="btn btn-success" href="{{route('ferry.show', $ferry->id)}}">Voir</a></td>

            <td>
                <form action="{{route('ferry.destroy', $ferry->id)}}" method="post">
                    @csrf
                    @method ('delete')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center mt3">
    <a href="{{route('pdf')}}" class="btn btn-outline-primary">Générer un PDF</a>
</div>
<br>
<div class="d-flex justify-content-center mt3">
    <a href="" class="btn btn-outline-primary">Déconnexion</a>
</div>

</div>
</center>
@endsection