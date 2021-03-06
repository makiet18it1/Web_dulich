<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table= "bill";
    public $timestamps= false;
    public function detail()
    {
        return $this->hasMany('App\detailbill','IDBill','IDBill');
    }
}
