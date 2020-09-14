<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{

    protected $fillable = ['number', 'user_id'];
}
