<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function getPrice()
    {
        $price = 0;
        foreach ($this->orders as $order)
        {
            $price += $order->price;
        }


        return $price;
    }

    public function getCount()
    {
        $count = 0;
        foreach ($this->orders as $order)
        {
            $count +=  $order->count;
        }


        return $count;
    }
}
