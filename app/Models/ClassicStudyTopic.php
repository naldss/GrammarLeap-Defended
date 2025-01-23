<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassicStudyTopic extends Model
{
    protected $table = 'classic_study_topics';

    protected $fillable = [
        'topic_id',
        'level',
        'title',
        'sub_title',
        'definition',
    ];
}
