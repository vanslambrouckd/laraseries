@extends('app')

@section('content')


    <div class="clearfix">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('SeriesController@show', $serie->id) }}">&laquo;Terug</a>
        <h1>{{ $serie->title }}</h1>

        <p>
        {{ $serie->description }}
        </p>
    </div>

    <h1>Actors list</h1>

    @if (count($serie->actors))
        <ul class="list-group">
        @foreach ($serie->actors as $actor)
            <li class="list-group-item">
                <a href="{{ action('SeriesController@show_actor', [$serie->id, $actor->id]) }}">{{ $actor->present()->fullName() }}</a>
            </li>
        @endforeach
        </ul>
    @endif
@endsection