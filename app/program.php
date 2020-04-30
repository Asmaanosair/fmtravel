<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    public function department()
    {
        return $this->belongsTo('App\department');
    }
    public function section()
    {
        return $this->hasMany('App\section');
    }
}
