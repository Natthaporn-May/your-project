<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Run102Controller extends Controller
{

    function index()
    {
        $data=DB::table('Runnerinfo') 
		->leftjoin('pyt2019','pyt2019.pyt2019_id','=','Runnerinfo.id')
		->leftjoin('pyt2018','pyt2018.pyt2018_id','=','Runnerinfo.id')
		->select('Runnerinfo.id','Runnerinfo.First','Runnerinfo.Last','pyt2019.pyt2019_PYT166','pyt2019.pyt2019_PYT120','pyt2019.pyt2019_PYT100','pyt2019.pyt2019_PYT70','pyt2019.pyt2019_NPT50','pyt2019.pyt2019_PNK30','pyt2019.pyt2019_WFL15','pyt2018.pyt2018_rank','pyt2018.pyt2018_PYT166','pyt2018.pyt2018_PYT100','pyt2018.pyt2018_PYT66','pyt2018.pyt2018_DPS45','pyt2018.pyt2018_RTC23')
		->get();	
		

	return view('runner102', compact('data'));
	

   }

}
?>
