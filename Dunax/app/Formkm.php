<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formkm extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'data_i',
        'data_f',
    ];
}
