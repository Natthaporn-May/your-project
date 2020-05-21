<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinTableController extends Controller
{
    function index()
    {
     $data = DB::table('runner')
       ->join('pyt2019', 'pyt2019.ID', '=', 'runner.ID')
       ->join('pyt2018', 'pyt2018.ID', '=', 'runner.ID')
       ->select('runner.ID', 'runner.FirstName', 'runner.LastName', 'pyt2019.2019-PYT166','pyt2018.2018-PYT166')
       ->get();
     return view('join_table', compact('data'));
    }
}
?>
