<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    protected $table ="teacher";
    protected $primaryKey ="id";
    protected $fillable=['fname', 'lname', 'dob', 'age', 'email', 'phone', 'address', 'regDate', 'jobtype', 'photo'];
}
