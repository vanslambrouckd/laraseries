<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Actor extends Model {

	//
    use PresentableTrait;

    protected $presenter = '\App\ActorPresenter';

    public function serie(){
        return $this->belongsTo('App\Serie');
    }
}
