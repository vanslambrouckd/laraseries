@extends('app')

@section('content')

    <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>


    <h1>{{ $actor->firstname }} {{ $actor->lastname }}</h1>

    {{ $actor->biography }}

    {{ $actor->birthname }}

    {{ $actor->birthday }}
@endsection