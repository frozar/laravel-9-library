@extends('layouts.main')

@section('main')
<h1>{{$livre->titre}} {{$livre->auteur->prenom}} {{$livre->auteur->nom}}</h1>
@endsection