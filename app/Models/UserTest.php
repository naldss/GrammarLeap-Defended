<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    protected $table = 'user_tests';
    protected $fillable = [
        'user_id',
        'pretest_taken',
        'pretest_score',
        'posttest_taken',
        'posttest_score',
    ];
}
