<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formdespesas extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
}
