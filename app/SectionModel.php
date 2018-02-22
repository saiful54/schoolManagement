<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionModel extends Model
{
    protected $table= "section";
    protected $primaryKey= "id";
    protected $fillable=['id', 'section_name', 'class_id', 'teacher_name'];
}
