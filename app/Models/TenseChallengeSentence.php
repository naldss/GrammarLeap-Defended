<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenseChallengeSentence extends Model
{
    protected $table = 'tense-challenge_table';

    protected $fillable = [
        'sentence', 'difficulty',
    ];

}
