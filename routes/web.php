<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\libraryController;

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
//     return view('welcome');
// });
Route::get('/aregister',[libraryController::class,'register']);
Route::post('/insert',[libraryController::class,'insert']);
Route::get('/login',[libraryController::class,'login']);
Route::post('/loginaction',[libraryController::class,'loginaction']);
 Route::get('/adashboard',[libraryController::class,'adashboard']);
 Route::get('/addbook',[libraryController::class,'addbook']);
 Route::post('/bookinsert',[libraryController::class,'bookinsert']);
 Route::get('/viewbook',[libraryController::class,'viewbook']);
Route::get('/edit/{id}',[libraryController::class,'edit']);
Route::post('/editaction/{id}',[libraryController::class,'editaction']);
Route::get('/delete/{id}',[libraryController::class,'delete']);

Route::get('/registerstudent',[libraryController::class,'registerstudent']);
Route::post('/studentinsert',[libraryController::class,'studentinsert']);
Route::get('/viewstudent',[libraryController::class,'viewstudent']);
Route::get('/sedit/{id}',[libraryController::class,'sedit']);
Route::post('/seditaction/{id}',[libraryController::class,'seditaction']);
Route::get('/sdelete/{id}',[libraryController::class,'sdelete']);
Route::get('/issuebook/{id}',[libraryController::class,'issuebook']);
Route::post('/issuebookinsert',[libraryController::class,'issuebookinsert']);
Route::get('/viewissue',[libraryController::class,'viewissue']); 
Route::get('/return/{id}',[libraryController::class,'return']); 
Route::get('/reissue/{id}',[libraryController::class,'reissue']);
Route::post('/reissueaction/{id}',[libraryController::class,'reissueaction']);
    

