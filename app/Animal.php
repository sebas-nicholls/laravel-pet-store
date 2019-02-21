<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at','updated_at','deleted_at'];
    //
}
