<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    public function requests()
    {
        return $this->hasMany('App\Order');
    }
}
