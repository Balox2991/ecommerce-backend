@extends('layout.app')

@section('content')
  <!-- Vista del Producto -->
  <div class="container py-5 product-container">
    <div class="row">
      <!-- Columna para la imagen del producto -->
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500" alt="Producto" class="img-fluid product-img">
      </div>

      <!-- Columna para los detalles del producto -->
      <div class="col-md-6">
        <h2>Nombre del Producto</h2>
        <p class="text-muted">$25.99</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor eros non augue fermentum, ut vulputate neque sollicitudin. Phasellus non urna augue. Curabitur quis placerat leo.</p>
        <button class="btn btn-orange">Añadir al carrito</button>
      </div>
    </div>
  </div>

  @endsection
