<?php

use App\View\Components\Login;
use App\View\Components\LoginForm;
use Illuminate\Support\Facades\Blade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::view('test', 'test');

Route::prefix('components')->group(function () {
    Route::get('login-form', fn () => Blade::renderComponent(new LoginForm()))->name('login-form');
    Route::post('login', fn (Request $request) => Blade::renderComponent(new Login($request)))->name('login');;
});
