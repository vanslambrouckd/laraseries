@extends('app')

@section('content')
    <div class="row">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>


        <h1>Acteurs</h1>

        @if (count($actors))
            <ul>
            @foreach ($actors as $actor)
                <li>
                    <a href="{{ action('ActorsController@show', $actor->id) }}">{{ $actor->present()->fullName() }}</a>
                </li>
            @endforeach
            </ul>
        @else
            Geen acteurs gevonden
        @endif
    </div>
@endsection