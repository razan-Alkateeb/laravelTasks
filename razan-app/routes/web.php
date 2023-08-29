<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Home;

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
//     return 'welcome razan';
// });


// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);



// Route::match(['get', 'post'], '/', function () {
//     return 'welcome razan from match';
// });

 
// Route::any('/', function () {
//     // ...
// });


// Route :: get ('/user/{id}', function ($id) {
//     echo 'user id '.$id;
// });


// Route :: get ('user/{name?}', function ($name = 'Guest') {
//     echo $name;
// });



// Route:: get ('/', function () {
//    return view('laravel');
// });



Route::get('/login', function () {
    return view('task1.login');
});


Route::get('/home', function () {
    return view('task1.home');
});


Route::get('/check', [LoginController::class, 'index'])->name('loginController');








