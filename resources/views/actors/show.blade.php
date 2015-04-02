@extends('app')

@section('content')
    <div class="clearfix">
        <a class="btn btn-primary btn-xs pull-right" href="{{ action('ActorsController@index') }}">&laquo;Terug</a>
    </div>

    @include('actors._actorinfo');
@endsection