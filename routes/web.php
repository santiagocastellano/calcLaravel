<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajax',function(){
    return view('mensaje');
 });
 
// Route::post('/getmsg','AjaxController@index');
 //Route::post('/ajax','AjaxController@index');
 //Route::get('/getRequest','AjaxController@index');
 Route::post('/register',function(){
     if(Request::ajax()){
         return Response::json(Request::all());
     }
 });
 //Route::get('ajax', function(){ return view('ajax'); });
 Route::post('/postajax','AjaxController@post');
 /*Route::post('/postajax',function(){
    if(Request::ajax()){
        return 'getRequest comleto' ;
    }

});*/
Route::get('/getRequest',function(){
    if(Request::ajax()){
        return 'getRequest comleto' ;
    }

});