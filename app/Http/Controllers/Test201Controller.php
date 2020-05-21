<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 *
 */
class Test201Controller extends Controller
{

public function hello(){
	return 'Hello from WelcomeController';
}

public function index(){
return view('test201')
->with('title', 'Laravel 5 Training')
->with('subtitle','An introduction to Laravel 5');
}

public function info(){
return view('test201')
->with([
'title' => 'Laravel Training',
'subtitle' => 'An introduction to Laravel '
]);

}

}
?>
