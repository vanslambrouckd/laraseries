@extends('app')

@section('content')
    <h1>Actors list</h1>

    @foreach ($actors as $actor)

        <a href="{{ action('ActorsController@show', $actor->id) }}">{{ $actor->firstname }} {{ $actor->lastname }}</a>
    @endforeach
@endsection