<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassicStudyExercise extends Model
{
    protected $table = 'classic_study_exercises';

    protected $fillable = [
        'topic_id',
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct',
    ];
}
