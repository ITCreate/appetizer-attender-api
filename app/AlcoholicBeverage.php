<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlcoholicBeverage extends Model
{
    protected $table = 'alcoholic_beverages';

    public function flavor()
    {
        return $this->belongsTo('App\Flavor');
    }
}
