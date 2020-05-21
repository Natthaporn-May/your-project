<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
function show(){
return view('user')-> with ('name','May')
	->with('title','Laravel Tutrial');
}

}
