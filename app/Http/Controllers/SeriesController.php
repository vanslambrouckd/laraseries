<?php namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SerieRequest;
use App\Serie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

//use Illuminate\Http\Request;
//use Request;

class SeriesController extends Controller {

	/**
	 * Display a listing of series.
	 *
	 * @return Response
	 */
	public function index()
	{
        //Session::flash('flash_message', Carbon::create());
        //Session::flash('flash_message_important', true);

        //flash()->error(Carbon::create());
        //flash()->overlay('info', 'TItel');
        //flash('fdjqskl');

        $series = Serie::orderBy('title', 'asc')->get();
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
        return view('series.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(SerieRequest $request)
	{
        /*
         * methode 1: validatie in de controller
         */
        $this->validate($request, [
           'title' => 'required|min:3',
            'teaser' => 'required',
            'description' => 'required',
            'airdate' => 'required|date|date_format:d/m/Y'
        ]);

        $serie = Serie::create($request->all());
        //$serie->save();

        flash()->success('De serie werd succesvol toegevoegd.'); //meer info? flashnotifier.php (custom package composer require laracasts/flash)
        return redirect('series');
	}

    /**
     * Route model binding (zie app\Providers\RouteServiceProvider
     *
     * @param Serie $serie
     * @internal param int $id
     * @return Response
     */
	public function show(Serie $serie)
	{
		//
        //$serie = Serie::findOrFail($id);
        $episodes = $serie->episodes()->orderBy('airdate', 'desc')->get();
        //TODO: kijken waarom protected $dates['airdate'] niet werkt (carbon) met route model binding)


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
        $serie = Serie::findOrFail($id);

        return view('series.edit', compact('serie'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param SerieRequest $request
     * @return Response
     */
	public function update($id, SerieRequest $request)
	{
        /*
         * methode 2: validatie via request class
         */
		$serie = Serie::findOrFail($id);
        $serie->update($request->all());

        return redirect('series');
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

        dd('destroy');
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
