<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatsTenseChallenge extends Model
{
    protected $table = 'user_stats_tensechallenge';
    protected $fillable = [
        'user_id',
        'total_points',
        'numOfGames',
        'numOfWins',
        'numOfLosses',
    ];
}
