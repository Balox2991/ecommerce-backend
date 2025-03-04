@extends('layout.app')
@section('content')
    <!-- Contenedor de productos -->
    <div class="container py-5">
        <h2 class="mb-4">Productos Disponibles</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Producto 1</h5>
                        <p class="card-text">$25.99</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor eros non augue fermentum.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Producto 2</h5>
                        <p class="card-text">$19.99</p>
                        <p class="card-text">Aenean vehicula quam ut dolor ultricies, a fringilla nulla lacinia. Vivamus et velit metus.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Producto 3</h5>
                        <p class="card-text">$30.99</p>
                        <p class="card-text">Pellentesque dapibus orci ac sapien convallis, in tincidunt leo laoreet. Curabitur non urna eget velit.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 4">
                    <div class="card-body">
                        <h5 class="card-title">Producto 4</h5>
                        <p class="card-text">$15.99</p>
                        <p class="card-text">Suspendisse tincidunt ligula vel eros ullamcorper, vel convallis odio efficitur. Fusce non augue purus.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 5">
                    <div class="card-body">
                        <h5 class="card-title">Producto 5</h5>
                        <p class="card-text">$45.99</p>
                        <p class="card-text">Etiam auctor nisi non arcu vulputate, et luctus urna faucibus. Morbi consequat vitae mi a tempus.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/500" class="card-img-top" alt="Producto 6">
                    <div class="card-body">
                        <h5 class="card-title">Producto 6</h5>
                        <p class="card-text">$10.99</p>
                        <p class="card-text">Curabitur tincidunt lectus non orci luctus, nec laoreet sapien lacinia. Mauris volutpat nisi eget urna.</p>
                        <a href="#" class="btn btn-orange">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection