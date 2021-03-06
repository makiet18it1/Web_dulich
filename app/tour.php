<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    protected $table= "tour";
    public $timestamps= false;
    public function money()
    {
        return $this->hasOne('App\money','IDTour','IDTour');
    }
    public function detailimage()
    {
        return $this->hasOne('App\detailimage','IDTour','IDTour');
    }
}
