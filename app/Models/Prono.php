<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prono extends Model
{
    protected $fillable = [
        'api_id',
        'name',
        'logo',
        'conference'
    ];
}