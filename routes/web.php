<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
    return view('crud');
});

Route::get('/select',[CrudController::class,'show'])
	->name('select');

Route::get('/insert',function(){
	return view('insert');
})->name('insert');

Route::post('/insert',[CrudController::class,'insert']);

Route::get('/update',function(){
	return view('update');
})->name('update');

Route::post('/update',[CrudController::class,'update']);

Route::get('/delete',function(){
	return view('delete');
})->name('delete');

Route::post('/delete',[CrudController::class,'delete']);