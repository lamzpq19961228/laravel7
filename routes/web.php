<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

$admin_uid = Auth::id();
if ($admin_uid) {
    Route::get('/admin', 'AdminController@index');
}else{
    Route::get('/admin', 'AdminController@login');
}


Route::post('/webhooks', 'WebhooksController@Webhooks');
