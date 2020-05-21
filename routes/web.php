<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Data;
use App\People ;
use App\Run as RunModel;

Route::get('/',function(){
	return view('test');
}); 
Route::get('/search-101', function(){
	
	$q = Request::get('q');
	$user = User::
	where('FirstName','LIKE','%'.$q.'%')
	->orWhere('LastName','LIKE','%'.$q.'%')
	->orWhere('DateOfBirth','LIKE','%'.$q.'%')
	->orWhere('runner_ID','LIKE','%'.$q.'%')->get();    
if(count($user) > 0)
        return view('test')->withDetails($user)->withQuery ( $q );
    else return view ('test')->withMessage('No Details found. Try to search again !');
	dd($q);

});

Route::get('test','TestController@index');

Route::get('test-101','Test101Controller@index');

Route::get('test-102','Test102Controller@index');

Route::get('/test-103',function(){
        return view('join_table103');
});
Route::get('/search-103', function(){

        $q = Request::get('q');
        $user = User::
        where('FirstName','LIKE','%'.$q.'%')
        ->orWhere('LastName','LIKE','%'.$q.'%')
        ->orWhere('DateOfBirth','LIKE','%'.$q.'%')
        ->orWhere('runner_ID','LIKE','%'.$q.'%')->get();
if(count($user) > 0)
        return view('join_table103')->withDetails($user)->withQuery ( $q );
    else return view ('join_table103')->withMessage('No Details found. Try to search again !');
        dd($q);

});



Route::resource('user','UserController');

Route::get('run','Run101Controller@index');

Route::get('run-102','Run102Controller@index');

Route::get('/runner103','Run103Controller@index');
Route::get('/runner103/action', 'Run103Controller@action')->name('runner103.action');

Route::get('/runner104','Run104Controller@index');
Route::get('/runner104/action', 'Run104Controller@action')->name('runner104.action');

// Controller-name@method-name
Route::get('/page', 'PagesController@index'); // localhost:8000/
Route::get('/getUsers/{id}','PagesController@getUsers');

Route::get('runner105', ['uses'=>'Run105Controller@index', 'as'=>'runner105.index']);

Route::get('/runner106', 'Run106Controller@index');

Route::get('/runner106/fetch_data', 'Run106Controller@fetch_data');

Route::get ( '/runner107', function () {
	$data = Data::all ();
	return view ( 'runner107' )->withData ( $data );
} );
Route::post ( '/editItem', function (Request $request) {
	
	$rules = array (
			'fid' => 'required|alpha',
			'fname' => 'required|alpha',
			'lname' => 'required|alpha',
			'gender' => 'required|email',
			'IDNumber' => 'required',
			'Passport' => 'required|regex:/^[\pL\s\-]+$/u',
	);
	$validator = Validator::make ( Input::all (), $rules );
	if ($validator->fails ())
		return Response::json ( array (
				
				'errors' => $validator->getMessageBag ()->toArray () 
		) );
	else {
		
		$data = Data::find ( $request->fid );
		$data->First = ($request->fname);
		$data->Last = ($request->lname);
		$data->Gender = ($request->gender);
		$data->IDNumber = ($request->IDNumber);
		$data->Passport = ($request->Passport);
		$data->save ();
		return response ()->json ( $data );
	}
} );
Route::post ( '/deleteItem', function (Request $request) {
	Data::find ( $request->id )->delete ();
	return response ()->json ();
} );




Route::get ( '/runner108','Run108Controller@index'); 
Route::post ( '/editItem', function (Request $request) {

        $rules = array (
                        'fid' => 'required|alpha',
                        'fname' => 'required|alpha',
                        'lname' => 'required|alpha',
                        'gender' => 'required|email',
                        'IDNumber' => 'required',
                        'Passport' => 'required|regex:/^[\pL\s\-]+$/u',
        );
        $validator = Validator::make ( Input::all (), $rules );
        if ($validator->fails ())
                return Response::json ( array (

                                'errors' => $validator->getMessageBag ()->toArray ()
                ) );
        else {

                $data = Data::find ( $request->fid );
                $data->First = ($request->fname);
                $data->Last = ($request->lname);
                $data->Gender = ($request->gender);
                $data->IDNumber = ($request->IDNumber);
                $data->Passport = ($request->Passport);
                $data->save ();
                return response ()->json ( $data );
        }
} );
Route::post ( '/deleteItem', function (Request $request) {
        Data::find ( $request->id )->delete ();
        return response ()->json ();
} );


Route::resource('runner109','Run109Controller');


Route::get('dropdownlist','Run110Controller@index');
Route::get('get-state-list','Run110Controller@getStateList');
Route::get('get-city-list','Run110Controller@getCityList');

Route::get('test201','Test201Controller@info');


Route::get('/runner201',function(){
        return view('runner201');
});
Route::get('/search-201','Run201Controller@index');

Route::get('/runner205','Run205Controller@index');
