<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nibble extends Model
{
    protected $table = 'Nibbles';

    public function flavor()
    {
        return $this->belongsTo('App\Flavor');
    }
}
