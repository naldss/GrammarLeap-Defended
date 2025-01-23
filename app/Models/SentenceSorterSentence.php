<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentenceSorterSentence extends Model
{
    protected $table = 'sentence-sorter_table';

    protected $fillable = [
        'sentence', 'type', 'difficulty',
    ];
}
