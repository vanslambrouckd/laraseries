@extends('app')

@section('content')
    <div class="row">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>


        <h1>Acteurs</h1>

        @if (count($actors))
            @foreach ($actors as $actor)
                {{ $actor->firstname }} {{ $actor->lastname }}
            @endforeach
        @else
            Geen acteurs gevonden
        @endif
    </div>
@endsection