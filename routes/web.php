<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminHomeController;
use App\Http\Controllers\adminProductController;


Route::get('/', function () {
    return view('welcome');
});

route::get('/admin',[adminHomeController::class,'admin']);
route::get('/category',[adminHomeController::class,'category']);
route::get('/product',[adminHomeController::class,'product']);



route::post('/admin/addCategory',[adminHomeController::class,'addCategory']);
route::get('/category/delete/{id}',[adminHomeController::class,'deleteCategory']);
route::post('/category/update',[adminHomeController::class,'updateCategory']);

route::post('/admin/addProduct',[adminProductController::class,'addProduct']);



