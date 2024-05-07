<?php

use App\Http\Controllers\auth\authController;
use Faker\Factory;
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

Route::get('/', [authController::class, 'login']);
Route::post('/verifikasi-login', [authController::class, 'verifikasilogin']);
Route::post('/verifikasi-pendaftaran', [authController::class, 'verifikasipendaftaran']);

Route::get('/logout', [authController::class, 'logout']);
Route::get('/testing', function(){
    $faker = Factory::create('id_ID');
    dd($faker->phoneNumber);
});


// https://github.com/nurarifin256/inventory-dan-pos-maju-jaya-motor/tree/main