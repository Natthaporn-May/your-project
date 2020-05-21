<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Run104Controller extends Controller
{
    function index()
    {
     return view('runner104');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('Runnerinfo')
		->leftjoin('pyt2019','pyt2019.pyt2019_id','=','Runnerinfo.id')
                ->leftjoin('pyt2018','pyt2018.pyt2018_id','=','Runnerinfo.id')
                ->select('Runnerinfo.id','Runnerinfo.First','Runnerinfo.Last','pyt2019.pyt2019_PYT166','pyt2019.pyt2019_PYT120','pyt2019.pyt2019_PYT100','pyt2019.pyt2019_PYT70','pyt2019.pyt2019_NPT50','pyt2019.pyt2019_PNK30','pyt2019.pyt2019_WFL15','pyt2018.pyt2018_rank','pyt2018.pyt2018_PYT166','pyt2018.pyt2018_PYT100','pyt2018.pyt2018_PYT66','pyt2018.pyt2018_DPS45','pyt2018.pyt2018_RTC23')
	->Where('id', 'like', '%'.$query.'%')
         ->orWhere('First', 'like', '%'.$query.'%')
         ->orWhere('Last', 'like', '%'.$query.'%')
        ->orWhere('IDNumber', 'like', '%'.$query.'%')
	->orWhere('Passport', 'like', '%'.$query.'%')
        ->orderBy('id', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('Runnerinfo')
        	->leftjoin('pyt2019','pyt2019.pyt2019_id','=','Runnerinfo.id')
                ->leftjoin('pyt2018','pyt2018.pyt2018_id','=','Runnerinfo.id')
                ->select('Runnerinfo.id','Runnerinfo.First','Runnerinfo.Last','pyt2019.pyt2019_PYT166','pyt2019.pyt2019_PYT120','pyt2019.pyt2019_PYT100','pyt2019.pyt2019_PYT70','pyt2019.pyt2019_NPT50','pyt2019.pyt2019_PNK30','pyt2019.pyt2019_WFL15','pyt2018.pyt2018_rank','pyt2018.pyt2018_PYT166','pyt2018.pyt2018_PYT100','pyt2018.pyt2018_PYT66','pyt2018.pyt2018_DPS45','pyt2018.pyt2018_RTC23') 
	->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->id.'</td>
         <td>'.$row->First.'</td>
         <td>'.$row->Last.'</td>
         <td>'.$row->IDNumber.'</td>
	<td>'.$row->Passport.'</td>
	<td> '.$row->pyt2019_PYT166.' </td>
                <td> '.$row->pyt2019_PYT120.' </td>
                <td> '.$row->pyt2019_PYT100.' </td>
                <td> '.$row->pyt2019_PYT70.' </td>
                <td> '.$row->pyt2019_NPT50.' </td>
                <td> '.$row->pyt2019_PNK30.' </td>
                <td> '.$row->pyt2019_WFL15.' </td>
                <td> '.$row->pyt2018_rank.' </td>
                <td> '.$row->pyt2018_PYT166.' </td>
                <td> '.$row->pyt2018_PYT100.' </td>
                <td> '.$row->pyt2018_PYT66.' </td>
                <td> '.$row->pyt2018_DPS45.'</td>
                <td> '.$row->pyt2018_RTC23.' </td>          
</tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
