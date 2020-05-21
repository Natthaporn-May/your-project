<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('Runnerinfo')->orderBy('id', 'asc')->get(); 
    }else{
      $value=DB::table('Runnerinfo')->where('id', $id)->first();
    }
    return $value;
  
  }
}
