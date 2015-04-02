<?php namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ActorRequest;
use Illuminate\Http\Request;

class ActorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
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
	public function show($slug)
	{
        //$actor = Actor::findOrFail($id);
        $actor = Actor::where('slug', $slug)->first();
        return view('actors.show', compact('actor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $actor = Actor::findOrFail($id);

        return view('actors.edit', compact('actor'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param ActorRequest $request
     * @return Response
     */
	public function update($id, ActorRequest $request)
	{
        $actor = Actor::findOrFail($id);
        $actor->update($request->all());

        flash()->success('De acteur werd succesvol gewijzigd');
		return redirect('actors');
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

}
