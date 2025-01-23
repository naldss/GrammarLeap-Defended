<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatsSentenceSorter extends Model
{
    protected $table = 'user_stats_sentencesorter';
    protected $fillable = [
        'user_id',
        'total_points',
        'numOfGames',
        'numOfWins',
        'numOfLosses',
    ];
}
