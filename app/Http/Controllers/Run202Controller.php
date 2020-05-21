<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\People;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
class Run202Controller extends Controller
{
public function find()
{	
return view('runner202');			
}		
public function findSearch()
{			
$search = Input::get ( "search" );		
$test = People::where ( 'First', 'LIKE', '%' . $search . '%' )->orWhere ( 'id', 'LIKE', '%' . $search . '%' )->get ();
if (count ( $test ) > 0)
return view ( 'runner202' )->withDetails ( $test )->withQuery ( $search );
else
return view ( 'runner202' )->withMessage ( 'No Details found. Try to search again !' );		
}
}
