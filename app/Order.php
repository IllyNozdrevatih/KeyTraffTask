<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'requests';

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }

    public function operator()
    {
        return $this->belongsTo('App\Operator');
    }
}
