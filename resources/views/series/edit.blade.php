@extends('app')

@section('content')
<h1>Serie wijzigen</h1>


@include('errors.list')

{!! Form::model($serie, ['method' => 'PATCH', 'action' => ['SeriesController@update', $serie->id]]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Titel:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('teaser', 'Teaser:') !!}
        {!! Form::textarea('teaser', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Omschrijving:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('airdate', 'Uitzenddatum:') !!}
        {!! Form::input('date', 'airdate', $serie->airdate->format('d/m/Y'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::button('<span class="glyphicon glyphicon-floppy-disk"></span> Wijzigen', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
@endsection