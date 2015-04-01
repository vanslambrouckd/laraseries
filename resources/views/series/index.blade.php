@extends('app')

@section('content')
    <div class="row-md-12">
        <h1>Series list</h1>

        <dl>
            @foreach ($series as $serie)
                <dt><a href="{{ action('SeriesController@show', $serie->id) }}">{{ $serie-> title }}</a></dt>
                <dd>
                   {{ $serie->teaser }}
                </dd>
            @endforeach
        </dl>

    </div>

@endsection