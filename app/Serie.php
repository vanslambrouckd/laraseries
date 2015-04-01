<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

	//

    public function episodes(){
        return $this->hasMany('\App\Episode');
    }

    public function actors()
    {
        return $this->hasMany('\App\Actor');
    }
}
