<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\OperationsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/services', function () {
//    return redirect('about');
//});

//Route::get('/contact/{name}', function ($name) {
//    return view('contact', ['name' => $name]);
//});

//Route::view('about', '/about', ['name' => 'Taylor']);

//Route::get('/user/{id}', [UserController::class, 'index']);

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/form', [UsersController::class, 'form']);
Route::post('/users/save', [UsersController::class, 'save']);
Route::get('/users/logout', function() {
    if(session()->has('user')) {
        session()->pull('user', NULL);
    }
    return redirect('login');
});

//Route::get('user', 'UserController@show');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Route::group(['middleware' => ['sensitive_pages'] ], function(){
//    Route::get('/users/form', [UsersController::class, 'form']);
//    Route::post('/users/save', [UsersController::class, 'save']);
//});

Route::view('about', '/about')->middleware('protected_routes');

Route::get('members/list',[MembersController::class, 'index']);
Route::get('members/new',[MembersController::class, 'new']);
Route::post('members/save',[MembersController::class, 'save']);
Route::get('members/delete/{id}', [MembersController::class, 'delete']);
Route::get('members/edit/{id}', [MembersController::class, 'edit']);
Route::post('members/update',[MembersController::class, 'update']);

Route::get('operations',[OperationsController::class, 'index']);