<?php namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {

	/**
	 * Display a listing of series.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        $series = Serie::all();
        return view('series.index', compact('series'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        $serie = Serie::findOrFail($id);
        $episodes = $serie->episodes()->orderBy('airdate', 'desc')->get();


        return view('series.show', compact('serie', 'episodes'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function show_actors($id)
    {
        $serie = Serie::findOrFail($id);

        return view('series.actors', compact('serie'));
    }

    public function show_actor($serie_id, $actor_id){

        $actor = Actor::findOrFail($actor_id);
        $serie = $actor->serie;
        return view('series.actor', compact('actor', 'serie'));
    }

}
