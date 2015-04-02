@extends('app')

@section('content')
   <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>

   <h1>Actors list</h1>

   @if (count($actors))
       <ul class="list-group">
       @foreach ($actors as $actor)
           <li class="list-group-item">
                <div class="pull-right">
                    <a class="btn btn-xs btn-primary" href="{{ action('ActorsController@edit', $actor->id) }}"><span class="glyphicon glyphicon-pencil"></span>wijzig</a>
                    <a class="btn btn-xs btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span>verwijder</a>
                </div>

               <a href="{{ action('ActorsController@show', $actor->slug) }}">{{ $actor->present()->fullName() }}</a>
           </li>
       @endforeach
       </ul>
   @endif
@endsection