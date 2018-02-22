<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table= "class";
    protected $primaryKey= "id";
    protected $fillable=['id', 'class_name', 'num_name'];
}
