<h1>Series list</h1>

@foreach ($series as $serie)
    <a href="{{ action('SeriesController@show', $serie->id) }}">{{ $serie-> title }}</a>
@endforeach