<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
protected $table='runner';	
protected $filable=['id','first_name','last_name'];
}
