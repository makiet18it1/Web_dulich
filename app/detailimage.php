<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailimage extends Model
{
    protected $table= "detailimage";
    public $timestamps= false;
    public function tour()
    {
        return $this->belongsTo('App\money','IDTour','IDTour');
    }
}
