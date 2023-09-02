<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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

// echo "블레이드 페이지 파일을 불러오기 바로전 <br/>";

Route::get('/', function () {
    return view('welcome');
});

Route::get('get',[NewController::class,"index"]);
Route::get('get/{id}',function($id){
    return view('routing',["id"=> $id,"data"=>""]);
});
