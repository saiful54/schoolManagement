<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table ="student";
    protected $primaryKey ="id";
    protected $fillable=['name', 'fname', 'address','classes', 'section', 'dept', 'phone', 'photo'];
}
