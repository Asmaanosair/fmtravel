<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    public function program()
    {
        return $this->belongsTo('App\program');
    }
}
