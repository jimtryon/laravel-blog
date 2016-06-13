<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Setup authentication views
Setup account page (own account page)
Setup account routes (someone elses account page)

Setup post migration
Setup post model
Setup post controller
Setup post view 
*/
