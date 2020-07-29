<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    public function user() {
        $this->belongsTo('user');
    }
}
