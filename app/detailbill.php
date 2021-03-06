<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailbill extends Model
{
    protected $table= "detailbill";
    public $timestamps= false;
    public function bill()
    {
        return $this->belongsTo('App\bill','IDBill','IDBill');
    }
}
