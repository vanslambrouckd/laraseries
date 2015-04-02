@extends('app')

@section('content')
    {!! Breadcrumbs::render('home') !!}

    <div class="row-md-12">
        <h1>Series list</h1>

        <dl>
            @foreach ($series as $serie)
                <dt>
                    <div class="pull-right">
                        <a class="btn btn-xs btn-primary" href="{{ action('SeriesController@edit', $serie->id) }}"><span class="glyphicon glyphicon-pencil"></span>wijzig</a>
                        <a class="btn btn-xs btn-danger" href="{{ action('SeriesController@destroy', $serie->id) }}"><span class="glyphicon glyphicon-trash"></span>verwijder</a>
                    </div>

                    <a href="{{ action('SeriesController@show', $serie->id) }}">{{ $serie-> title }}</a>
                </dt>
                <dd class="clearfix" style="border-bottom: solid 1px #9d9d9d;">
                   {{ $serie->teaser }}
                </dd>
            @endforeach
        </dl>

    </div>

@endsection