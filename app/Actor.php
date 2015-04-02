<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Actor extends Model {

	//
    use PresentableTrait;

    protected $presenter = '\App\ActorPresenter';

    protected $fillable = [
        'firstname',
        'lastname',
        'birthname',
        'slug',
        'birthday',
        'biography'
    ];

    /*
     * velden definieren die als carbon instances moeten ingesteld worden
     */
    protected $dates = [
        'birthday'
    ];

    public function serie(){
        return $this->belongsTo('App\Serie');
    }

    public function setBirthdayAttribute($date){
        //dd($date);
        $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y', $date);
    }

    public function getBirthdayAttribute($date){
        //dd($date);
        return Carbon::parse($date)->format('d/m/Y');
    }
}
