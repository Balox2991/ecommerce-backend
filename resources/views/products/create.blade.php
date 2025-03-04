@extends('layout.app')

@section('content')

<div class="container form-container content">
    <h2 class="text-center">Crear Nuevo Producto</h2>
    <form>
        <div class="form-group">
            <label for="productName">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName" placeholder="Ingrese el nombre del producto">
        </div>
        <div class="form-group">
            <label for="productDescription">Descripción del Producto</label>
            <textarea class="form-control" id="productDescription" rows="4" placeholder="Ingrese una descripción del producto"></textarea>
        </div>
        <div class="form-group">
            <label for="productPrice">Precio</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Ingrese el precio del producto">
        </div>
        <div class="form-group">
            <label for="productCategory">Categoría</label>
            <select class="form-control" id="productCategory">
                <option value="electronica">Electrónica</option>
                <option value="ropa">Ropa</option>
                <option value="libros">Libros</option>
                <option value="alimentos">Alimentos</option>
                <option value="deportes">Deportes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-orange btn-block">Crear Producto</button>
    </form>
</div>

@endsection
    
