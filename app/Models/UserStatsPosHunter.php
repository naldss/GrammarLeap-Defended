<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatsPosHunter extends Model
{
    protected $table = 'user_stats_poshunter';
    protected $fillable = [
        'user_id',
        'total_points',
        'numOfGames',
        'numOfWins',
        'numOfLosses',
    ];
}
