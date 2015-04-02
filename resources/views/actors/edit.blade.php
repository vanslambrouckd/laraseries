@extends('app')

@section('content')
    <h1>Acteur wijzigen</h1>

    @include('errors.list')

    {!! Form::model($actor, ['method' => 'PATCH', 'action' => ['ActorsController@update', $actor->id]]) !!}
        {!! Form::hidden('id', $actor->id) !!}
        <div class="form-group">
            {!! Form::label('firstname', 'Voornaam:') !!}
            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastname', 'Achternaam:') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('birthname', 'Geboortenaam:') !!}
            {!! Form::text('birthname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('birthday', 'Geboortedatum:') !!}
            {!! Form::input('date', 'birthday', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('biography', 'Bio:') !!}
            {!! Form::textarea('biography', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::button('<span class="glyphicon glyphicon-floppy-disk"></span> Wijzigen', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection