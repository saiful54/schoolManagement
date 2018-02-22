<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table ="new";
    protected $primaryKey ="id";
    protected $fillable=['name', 'fname', 'address'];
}
