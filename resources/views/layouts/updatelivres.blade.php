@extends('layouts.main')

@section('contenu')
@include('ajout')

<h1>Liste de livres</h1>

<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Livre</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Supression</th>
            <th scope="col">Modification</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($livres as $cle => $livre)


        <tr>
            <th scope="row">{{ $livre->id }}</th>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->auteur->nom }}</td>
            <td>{{ $livre->auteur->prenom}}</td>
            <td>
                {{-- <a href="/layouts/{{ $livre->id }}" class="btn btn-sm btn-danger">Suppression</a> --}}
                <form method="post" action="/livres/{{ $livre->id }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">
                        Suppression</button>
                </form>

            </td>
            {{-- <td><a href="{{ " /livres/{{ $livre->id }}">Modifier</a></td> --}}
        </tr>


        @endforeach

    </tbody>
</table>



<a href="/livres">back</a>

@endsection