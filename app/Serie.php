<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

	//
    protected $fillable = [
      'title',
        'teaser',
        'body',
        'airdate'
    ];

    /*
     * velden definieren die als carbon instances moeten ingesteld worden
     */
    protected $dates = [
        'airdate'
    ];

    public function episodes(){
        return $this->hasMany('\App\Episode');
    }

    public function actors()
    {
        return $this->hasMany('\App\Actor');
    }

    public function genres(){
        return $this->belongsToMany('\App\Genre');
    }

    public function setAirdateAttribute($date)
    {
        $this->attributes['airdate'] = Carbon::createFromFormat('d/m/Y', $date);
    }

    /*
    public function getAirdateAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
    */
}
