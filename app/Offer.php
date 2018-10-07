<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
