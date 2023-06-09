<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\ContactController;




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

Route::get('/index', [GymController::class,'index'])->name('index');



Route::get('/registre',function(){
    return view('gym.registre');
})->name('registre');


Route::get('/about', function(){
    return view('gym.about');
})->name('about');

Route::get('/classe', function(){
    return view('gym.classe');
})->name('classe');

Route::get('/calendrier', function(){
    return view('gym.calendrier');
})->name('calendrier');


// contact
Route::get('/contact', function(){
    return view('gym.contact');
})->name('contact');

// backend
Route::post('/contact/store', [ContactController::class,'contact'])->name('contact.store');

 // backend price

Route::get('/index/price/create', [GymController::class,'create2'])->name('index.price');
Route::post('/index/price/store', [GymController::class,'store2'])->name('index.pricestore');







//backend services
Route::get('/index/service/create', [GymController::class,'create'])->name('index.service');
Route::post('/index/service/store', [GymController::class,'store'])->name('index.servicestore');



//backend user and trainer
Route::resource('trainer',trainerController::class);
Route::resource('user',userController::class);

