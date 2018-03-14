<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public $table = 'contact';

    public $fillable = ['username','email','tel','city'];

}