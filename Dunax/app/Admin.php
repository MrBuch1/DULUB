<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'data_i',
        'data_f',
    ];
}
