<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlcoholicBeverage extends Model
{
    protected $casts = [
        'sweet_flg'       => 'boolean',
        'acid_flg'        => 'boolean',
        'salt_flg'        => 'boolean',
        'bitter_flg'      => 'boolean',
        'spice_flg'       => 'boolean',
        'astringency_flg' => 'boolean',
        'umami_flg'       => 'boolean',
    ];
}
