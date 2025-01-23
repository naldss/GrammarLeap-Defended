<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatsSentenceFixer extends Model
{
    protected $table = 'user_stats_sentencefixer';
    protected $fillable = [
        'user_id',
        'total_points',
        'numOfGames',
        'numOfWins',
        'numOfLosses',
    ];
}
