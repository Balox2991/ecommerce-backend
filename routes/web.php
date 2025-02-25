<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', function () {
      echo"LISTADO DE PRODUCTOS DEL ECOMMERCE";
});

Route::get('/products/create', function () {
    echo"FORMULARIO PARA CREAR UN PRODUCTO : ";
});

Route::get('/products/{name}/{categoria?}', function ($name,$categoria=null) {
    if ($categoria == null){
        echo"El producto es : $name";
    }else{
        echo " el producto es $name , y su categoria es $categoria ";
    }
    
});








