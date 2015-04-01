<a href="{{ action('SeriesController@index') }}">Terug</a>
<h1>{{ $serie->title }}</h1>

{{ $serie->description }}


<a href="{{ action('SeriesController@show_actors', $serie->id) }}">Acteurs</a>

<h2>Episode list</h2>
@if (count($episodes))
    @foreach ($episodes as $episode)
        {{ $episode->title }}

        {{ $episode->teaser }}
        <hr />
    @endforeach
@else
    Geen episodes gevonden
@endif