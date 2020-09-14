<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = ['street', 'city', 'state', 'number', 'neighborhood', 'complement', 'user_id'];
}
