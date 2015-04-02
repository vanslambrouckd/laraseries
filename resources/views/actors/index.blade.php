@extends('app')

@section('content')
   <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>

   <h1>Actors list</h1>

   @if (count($actors))
       <ul class="list-group">
       @foreach ($actors as $actor)
           <li class="list-group-item">
               <a href="{{ action('ActorsController@show', $actor->id) }}">{{ $actor->present()->fullName() }}</a>
           </li>
       @endforeach
       </ul>
   @endif
@endsection