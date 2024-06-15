<?php

use App\Http\Controllers\MyController;
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
    return view('index');
});
Route::get('about',function(){
    return view('about');
    });
    Route::get('contact',function(){
        return view('contact');
        });
        
        Route::get('student',[MyController::class,'selectData']);
        Route::get('insert',function(){
            return view('insert');
        });
        Route::post('insert',[MyController::class,'insertData']);

        Route::get('select',[MyController::class,'selectStudentData']);
        Route::get('edituser/{id}',[MyController::class,'editData']);
        Route::post('edituser/{id}',[MyController::class,'updateData']);
        Route::get('remove/{id}',[MyController::class,'removeData']);