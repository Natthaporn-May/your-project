<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Run109Controller extends Controller
{

    function index(Request $request)
{
     if(request()->ajax())
     {
      if(!empty($request->filter_gender))    

{
$data=DB::table('run') 
		->select('id','First','Last','Gender','Country')
		->where('Gender', $request->filter_gender)
		->where('Country', $request->filter_country)
		->get();	
		
        }
else
      {
       $data = DB::table('run')
	->select('id','First','Last','Gender','Country')
         ->get();
      }

return datatables()->of($data)->make(true);
     }  
      $country_name = DB::table('run')
          ->select('Country')
          ->groupBy('Country')
          ->orderBy('Country', 'ASC')
          ->get();
     return view('runner109', compact('country_name'));

   }



}

?>
