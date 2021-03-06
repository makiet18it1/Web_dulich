<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class money extends Model
{
    protected $table= "money";
    public $timestamps= false;
    public function tour()
    {
        return $this->belongsTo('App\money','IDTour','IDTour');
    }
}
