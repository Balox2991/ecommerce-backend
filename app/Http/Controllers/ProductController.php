<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // ESTE METODO ES PARA LISTAR LOS PRODUCTOS

        echo"LISTADO DE PRODUCTOS DEL ECOMMERCE";

    }

    public function create(){ // Formulario para crear un producto
    
        echo"FORMULARIO PARA CREAR UN PRODUCTO : ";
    }

    public function show($name,$categoria=null){ // Mostrar un producto con detalles 


        if ($categoria == null){
            echo"El producto es : $name";
        }else{
            echo " el producto es $name , y su categoria es $categoria ";
        }
        

    }


}
