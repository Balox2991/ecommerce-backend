<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista del Producto</title>
  <!-- Enlace a Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">UNAB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promociones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

  <div class="container py-5">
    <div class="row">
      <!-- Columna para la imagen del producto -->
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500" alt="Producto" class="img-fluid">
      </div>

      <!-- Columna para los detalles del producto -->
      <div class="col-md-6">
        <h2>Nombre del Producto</h2>
        <p class="text-muted">$25.99</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor eros non augue fermentum, ut vulputate neque sollicitudin. Phasellus non urna augue. Curabitur quis placerat leo.</p>
        <button class="btn btn-primary">Añadir al carrito</button>
      </div>
    </div>
  </div>

  <!-- Enlace a Bootstrap JS (opcional, para funcionalidades como modales, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
