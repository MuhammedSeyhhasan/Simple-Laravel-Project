<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
use Illuminate\Database\Schema\IndexDefinition;
use Faker\Guesser\Name;


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



Route::get('/', [StaticController::class , 'index'])  -> name('home.index'); 
Route::get('/contact', [StaticController::class , 'contact'])-> name('home.contact');
Route::get('/about',  [StaticController::class , 'about']) -> name('home.about');
Route::get('/com',  [StaticController::class , 'com']) -> name('home.com');

Route::resource('computers', ComputersController::class); 




/*
Route::get('/store', function () {
   $filter = request('style');

    return 'This page is viewing 
    <span style= "color: red">'.$filter.'</span>' ;
});
*/