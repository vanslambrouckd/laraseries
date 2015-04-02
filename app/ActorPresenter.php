<?php

namespace App;
use Laracasts\Presenter\Presenter;

class ActorPresenter extends Presenter {
    public function fullName(){
        return $this->firstname.' '.$this->lastname;
    }
} 