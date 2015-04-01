<h1>Acteurs</h1>

@if (count($actors))
    @foreach ($actors as $actor)
        {{ $actor->firstname }} {{ $actor->lastname }}
    @endforeach
@else
    Geen acteurs gevonden
@endif