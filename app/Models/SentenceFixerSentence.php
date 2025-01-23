<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentenceFixerSentence extends Model
{
    protected $table = 'sentence-fixer_table';
    protected $fillable = [
        'sentence',
        'difficulty',
    ];
}
