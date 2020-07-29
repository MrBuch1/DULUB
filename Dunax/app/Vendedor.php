<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public function leitos() {
        return $this->hasMany('App\Formkm');
    }

    public function despesas() {
        return $this->hasMany('App\Formdespesas');
    }
}
