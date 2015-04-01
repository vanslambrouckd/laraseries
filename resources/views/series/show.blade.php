@extends('app')

@section('content')
    <div class="row">

    </div>
    <div class="clearfix">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('SeriesController@index') }}">&laquo;Terug</a>
        <h1>{{ $serie->title }}</h1>

        <p>
        {{ $serie->description }}
        </p>

        <a class="btn btn-xs btn-primary pull-right" href="{{ action('SeriesController@show_actors', $serie->id) }}"><span class="glyphicon glyphicon-user"></span>&nbsp;Acteurs</a>
    </div>



    <h2>Episode list</h2>
    @if (count($episodes))
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item">
                    <a class="list-group-item-heading">{{ $episode->title }}</a>
                    <div class="list-group-item-text">
                        {{ $episode->teaser }}
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger">
        Geen episodes gevonden
        </div>
    @endif
@endsection