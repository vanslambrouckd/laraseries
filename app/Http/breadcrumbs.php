<?php

Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('series_detail', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Serie', route('series_detail'));
});


Breadcrumbs::register('series_actors', function($breadcrumbs, $page)
{
    //TODO deze link werkt niet, HIER DOORDOEN
    $serie = \App\Serie::findOrFail($id);

    $breadcrumbs->push($serie->title, route('series_actors', $serie->id));
});