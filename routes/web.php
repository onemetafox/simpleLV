<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Inertia\Inertia;

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
Route::get('/', function(){
    $page_info['title'] = 'Landing Page';
    $page_info['description'] = 'This is the landing page';
    return inertia('Landing', ["page_info"=>$page_info])->withViewData(['page_info'=>$page_info]);
});
Route::get('auth/login', function(){
    $page_info['title'] = 'Login Page';
    $page_info['description'] = 'This is the login page';
    return Inertia::render('auth/Login', compact('title'));
});
Route::get('auth/register', function(){
    return Inertia::render('auth/Register');
});
Route::get('users', [UserController::class, 'index']);
Route::get('users/get/{id}', [UserController::class, 'show']);
// Route::middleware(['auth'])->group(function(){
    
// });
