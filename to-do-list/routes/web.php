<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  The base landing page
Route::get('/home', function () {
    return view('welcome');
});

/* 
* Display All Tasks
*/
Route::get('/', function () {
    return view('tasks');
});

/* 
* Add A New Task
*/
Route::post('/task', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create The Task...
});

/* 
* Delete An Existing Task
*/
Route::delete('/task/{id}', function($id) {
//
});