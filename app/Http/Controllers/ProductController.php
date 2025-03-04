<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // ESTE METODO ES PARA LISTAR LOS PRODUCTOS

        return view("products.index");
    }

    public function create(){ // Formulario para crear un producto
    
        return view("products.create");
    }

    public function show(){ // Mostrar un producto con detalles 
        return view("products.show");


}
}