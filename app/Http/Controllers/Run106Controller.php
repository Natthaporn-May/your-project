<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Run106Controller extends Controller
{
    function index()
    {
     $data = DB::table('Runnerinfo')->orderBy('id', 'asc')->paginate(10);
     return view('runner106', compact('data'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $sort_by = $request->get('sortby');
      $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
      $data = DB::table('Runnerinfo')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('First', 'like', '%'.$query.'%')
                    ->orWhere('Last', 'like', '%'.$query.'%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(10);
      return view('runner106_data', compact('data'))->render();
     }
    }
}
?>
