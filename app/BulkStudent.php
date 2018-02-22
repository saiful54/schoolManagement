<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BulkStudent extends Model
{
    protected $table ="bulk_student";
    protected $primaryKey ="id";
    protected $fillable=['name', 'class', 'section', 'dept'];
}
