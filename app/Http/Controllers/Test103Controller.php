<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Test103Controller extends Controller
{

    function index()
    {
<div class="container">
                <form action="/search-103" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                        placeholder="Search users"> <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                </span>
                        </div>
                </form>
        <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Runner details</h2>
        $data=DB::table('runner') 
		->leftjoin('PYT2019','PYT2019.PYT2019_ID','=','runner.runner_ID')
		->leftjoin('PYT2018','PYT2018.PYT2018_ID','=','runner.runner_ID')
		->select('runner.FirstName','runner.LastName','PYT2019.PYT2019_PYT166','PYT2019.PYT2019_PYT120','PYT2019.PYT2019_PNK30','PYT2018.PYT2018_PYT166','PYT2018.PYT2018_PYT100','PYT2018.PYT2018_PYT66')
		->get();	
		
	@endif
	</div>
</div>
echo "<pre>";
print_r($data)	

   }

}
?>
