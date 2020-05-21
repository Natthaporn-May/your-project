<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class People extends Model {
        protected $table='info';
	protected $fillable = ['First','id'];
}
