@extends('layouts.main')

@section('main')
<div class="d-flex justify-content-center">
    <h1>{{$titre}}</h1>
</div>


@include('components.addlivres')
<div class="d-flex justify-content-center">
    <!-- Button trigger modal -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">LIVRE</th>
                <th scope="col">AUTEUR</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $cle=> $livre)
            <tr>
                <th scope="row">1</th>
                <td>{{ $livre->titre }}</td>
                <td>{{$livre->auteur->nom}} {{$livre->auteur->prenom}}</td>
                <td>

                    @include('components.updatelivres')

                    <form method="post" action="/livres/{{ $livre->id }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sur to delete {{ $livre->titre }} ?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection