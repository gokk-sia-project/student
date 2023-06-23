<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserGrades extends Model{

    protected $table = 'get_grades';

    public $timestamps = false;
    protected $primaryKey = 'student_id';

}