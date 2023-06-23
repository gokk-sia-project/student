<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserCourses extends Model{

    protected $table = 'courses';
    protected $fillable = [
        'course_name',
    ];

    public $timestamps = false;
    protected $primaryKey = 'course_id';

}