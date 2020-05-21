<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Run108Controller extends Controller
{

    function index()
    {
        $data=DB::table('info') 
		->leftjoin('pyt2019','pyt2019.pyt2019_id','=','info.id')
		->leftjoin('pyt2018','pyt2018.pyt2018_id','=','info.id')
		->select('info.id','info.First','info.Last','info.Gender','info.IDNumber','info.Passport','pyt2019.pyt2019_PYT166','pyt2019.pyt2019_PYT120','pyt2019.pyt2019_PYT100','pyt2019.pyt2019_PYT70','pyt2019.pyt2019_NPT50','pyt2019.pyt2019_PNK30','pyt2019.pyt2019_WFL15','pyt2018.pyt2018_rank','pyt2018.pyt2018_PYT166','pyt2018.pyt2018_PYT100','pyt2018.pyt2018_PYT66','pyt2018.pyt2018_DPS45','pyt2018.pyt2018_RTC23')
		->get();	
		

	return view('runner108', compact('data'));
	

   }

}
?>
