<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\InventoryController;

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

Route::resource('companies', CompanyCRUDController::class);

Route::resource('inventory', InventoryController::class);

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth','verified']);

// Routing to the about us page

Route::get('/about-us', function () {
    return view('about');
});


// excluding a middle ware
Route::match(['post','get'], '/about-me', function () {
    return view('about-me');
})->withoutMiddleware([EnsureTokenIsValid::class]);

// excluding middlewares for group of routes

Route::withoutMiddleware(['auth','verified'])->group( function (){
    Route::get('/services', function () {});
    Route::get('/pricing', function () {});
    Route::get('/company-about-us', function () {});
});


Route::redirect('/about', '/about-us');

// handing variables and hidden data in laravel

Route::view('/welcome',['data' => 'james']);

// Requesting the parameters

Route::get('/about-case/{caseId?}', function (Request $request, $caseId) {
    return 'Case: '.$caseId;
});
