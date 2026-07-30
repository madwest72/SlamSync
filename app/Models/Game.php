<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'api_id',
        'hometeam_id',
        'awayteam_id',
        'start_date',
        'homescore',
        'awayscore',
        'status'
    ];

    public function homeTeam()
    {

        return $this->belongsTo(Team::class, 'hometeam_id', 'api_id');
    }
    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'awayteam_id', 'api_id');
    }
}