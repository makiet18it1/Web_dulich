<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articlepage extends Model
{
    protected $table= "article";
    public $timestamps= false;
    public function comment()
    {
        return $this->hasMany('App\comment','IDArticle','IDArticle');
    }
}
