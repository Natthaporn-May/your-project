<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Run103Controller extends Controller
{
    function index()
    {
     return view('runner103');
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
