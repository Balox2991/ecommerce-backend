<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el encabezado */
        .header-bg {
            background-color: #FF6600;
            color: white;
            padding: 15px 0;
        }

        /* Estilo para los botones */
        .btn-orange {
            background-color: #FF6600;
            border-color: #FF6600;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e65c00;
            border-color: #e65c00;
        }

        /* Estilo para el navbar */
        .navbar {
            background-color: #FF6600;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: white;
        }

        .navbar .navbar-toggler-icon {
            background-color: white;
        }

        .navbar .nav-link:hover {
            color: #e65c00;
        }

        /* Margen entre los formularios */
        .form-container {
            margin-top: 30px;
        }

        /* Asegura que el footer se quede abajo en la página */
        html, body {
            height: 100%;
        }

        .content {
            min-height: 100%;
            margin-bottom: 50px; /* Espacio para el footer */
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #FF6600; /* El mismo color que el botón */
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">UNAB </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield("content")

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 UNAB. Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
