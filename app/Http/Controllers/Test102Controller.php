<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Test102Controller extends Controller
{

    function index()
    {
        $data=DB::table('runner') 
		->leftjoin('PYT2019','PYT2019.PYT2019_ID','=','runner.runner_ID')
		->leftjoin('PYT2018','PYT2018.PYT2018_ID','=','runner.runner_ID')
		->select('runner.FirstName','runner.LastName','PYT2019.PYT2019_PYT166','PYT2019.PYT2019_PYT120','PYT2019.PYT2019_PNK30','PYT2018.PYT2018_PYT166','PYT2018.PYT2018_PYT100','PYT2018.PYT2018_PYT66')
		->get();	
		

	return view('join_table102', compact('data'));
	

   }

}
?>
