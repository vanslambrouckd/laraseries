@extends('app')

@section('content')
    <div class="clearfix">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>
    </div>

    <div class="row">
        <div class="col-md-4">

          <img src="http://placehold.it/350x350" alt="...">
        </div>
        <div class="col-md-8">
            <h1>{{ $actor->present()->fullname()}}</h1>

            {{ $actor->biography }}

            {{ $actor->birthname }}

            {{ $actor->birthday }}
        </div>
    </div>
@endsection