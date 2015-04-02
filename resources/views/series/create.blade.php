@extends('app')

@section('content')
<h1>Serie toevoegen</h1>


@include('errors.list')

{!! Form::open(['url' => '/series']) !!}
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
        {!! Form::input('date', 'airdate', Carbon\Carbon::now()->format('d/m/Y'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Toevoegen', ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
@endsection