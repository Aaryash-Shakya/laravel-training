<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "hello world";
});

// Route::get('/about', function(){
//     return "hello from about";
// });

// Route::get('/about/{name}', function($name){
//     return "hello ".$name;
// });

// Route::get('/about/{name}/{age}', function($name,$age){
//     return "Hello ".$name." of age ".$age;
// });


// Route::view('/about','about');

// Route::get('/about/{name}', function($name){
//     return view('about', compact('name'));
// });


// Route::get('/contact', function(){
//     $list = ['Nepal','Kathmandu','India'];
//     return view('contact',compact('list'));
// });


// Route::post();


Route::get('/', [PageController::class, 'index']);
Route::get('/about',[PageController::class,'aboutus']);