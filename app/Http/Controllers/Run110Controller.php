<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Run110Controller extends Controller
{
    
        public function index()
        {
            $runs = DB::table("run")->pluck("First","id");
            return view('runner110',compact('runs'));
        }

        public function getStateList(Request $request)
        {
            $pyts2019 = DB::table("pyt2019")
            ->where("pyt2019_id",$request->pyt2019_id)
            ->pluck("pyt2019_first","pyt2019_id");
            return response()->json($pyts2019);
        }

        public function getCityList(Request $request)
        {
            $pyts2018 = DB::table("pyt2018")
            ->where("pyt2018_id",$request->pyt2018_id)
            ->pluck("pyt2018_first","pyt2018_id");
            return response()->json($pyts2018);
        }
}
