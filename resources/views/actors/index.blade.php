@extends('app')

@section('content')


    <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>

    <h1>Actors list</h1>

    @foreach ($actors as $actor)

        <a href="{{ action('ActorsController@show', $actor->id) }}">{{ $actor->firstname }} {{ $actor->lastname }}</a>
    @endforeach
@endsection