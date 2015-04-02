@extends('app')

@section('content')
    {!! Breadcrumbs::render('series_detail') !!}

    <div class="clearfix">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('SeriesController@show_actors', $serie->id) }}">&laquo;Terug</a>
        <h1>{{ $serie->title }}</h1>

        <p>
        {{ $serie->description }}
        </p>

    </div>

    <h1>Acteur</h1>

    @include('actors._actorinfo');
@endsection