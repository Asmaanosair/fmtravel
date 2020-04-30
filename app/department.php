<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public function programe()
    {
        return $this->hasMany('App\department');
    }

}
