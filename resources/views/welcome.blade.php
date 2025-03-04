<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fondo de la imagen de la UNAB */
        .unab-bg {
            background-image: url('https://unired.edu.co/images/instituciones/UNAB/2017/junio/unab.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
        }
        /* Estilo para las tarjetas */
        .card-body {
            background-color: rgba(255, 255, 255, 0.8); /* Sin fondo naranja */
        }
        .carousel-inner img {
            width: 100%;
            height: 400px;
        }
        /* Fondo naranja fuera de las tarjetas */
        
        /* Botón naranja */
        .btn-orange {
            background-color: #FF6600;
            border-color: #FF6600;
            color: white;
        }
        .btn-orange:hover {
            background-color: #e65c00;
            border-color: #e65c00;
        }
    </style>
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

    <!-- Sección de fondo UNAB con logo centrado -->
    <div class="unab-bg d-flex align-items-center justify-content-center text-white text-center logo-center">
        <img src="https://media.licdn.com/dms/image/v2/D4E0BAQFCZAC0pXa9-A/company-logo_200_200/company-logo_200_200/0/1719230620874/universidad_autonoma_de_bucaramanga_logo?e=1748476800&v=beta&t=wQWPWS1o7VI1dzX2e3ZKM-7To-jnHN5gMKElvpKjqjI" alt="Logo UNAB" class="img-fluid" style="max-width: 100%; max-height: 150px;">
    </div>
    
    <!-- Carrusel de promociones -->
    <div id="promoCarousel" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#promoCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#promoCarousel" data-slide-to="1"></li>
            <li data-target="#promoCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- Carrusel 1 -->
            <div class="carousel-item active">
                <div class="d-block w-100">
                    <img src="https://scontent.fbog4-2.fna.fbcdn.net/v/t39.30808-6/306190494_402006952123159_1775778865129650524_n.png?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lD8JqYqunbAQ7kNvgFhuGP6&_nc_oc=AdjTygZ69092dNk_bZcOql651ujx4zlww6aRpAFN5TJVvwiwn8_B_SoLpzCCdVbWEa8&_nc_zt=23&_nc_ht=scontent.fbog4-2.fna&_nc_gid=AUV0XXBXiWAUqVvzCS9rBq9&oh=00_AYDSjZjhgRQhAdG8xdjzTb-HBKvi4P3d0d7CK5jpjcQB6A&oe=67C3E58E" class="d-block w-100" alt="Descuento en Matrícula">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>¡Inscríbete con descuento!</h5>
                        <p>Aprovecha un 20% de descuento en tu matrícula si te inscribes antes del 15 de marzo.</p>
                    </div>
                </div>
            </div>
            <!-- Carrusel 2 -->
            <div class="carousel-item">
                <div class="d-block w-100">
                    <img src="https://scontent.fbog4-2.fna.fbcdn.net/v/t39.30808-6/306190494_402006952123159_1775778865129650524_n.png?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lD8JqYqunbAQ7kNvgFhuGP6&_nc_oc=AdjTygZ69092dNk_bZcOql651ujx4zlww6aRpAFN5TJVvwiwn8_B_SoLpzCCdVbWEa8&_nc_zt=23&_nc_ht=scontent.fbog4-2.fna&_nc_gid=AUV0XXBXiWAUqVvzCS9rBq9&oh=00_AYDSjZjhgRQhAdG8xdjzTb-HBKvi4P3d0d7CK5jpjcQB6A&oe=67C3E58E" class="d-block w-100" alt="Beneficios de estudiar en la UNAB">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Beneficios de estudiar en la UNAB</h5>
                        <p>Infraestructura moderna, docentes altamente calificados y un ambiente de aprendizaje único.</p>
                    </div>
                </div>
            </div>
            <!-- Carrusel 3 -->
            <div class="carousel-item">
                <div class="d-block w-100">
                    <img src="https://scontent.fbog4-2.fna.fbcdn.net/v/t39.30808-6/306190494_402006952123159_1775778865129650524_n.png?_nc_cat=107&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=lD8JqYqunbAQ7kNvgFhuGP6&_nc_oc=AdjTygZ69092dNk_bZcOql651ujx4zlww6aRpAFN5TJVvwiwn8_B_SoLpzCCdVbWEa8&_nc_zt=23&_nc_ht=scontent.fbog4-2.fna&_nc_gid=AUV0XXBXiWAUqVvzCS9rBq9&oh=00_AYDSjZjhgRQhAdG8xdjzTb-HBKvi4P3d0d7CK5jpjcQB6A&oe=67C3E58E" class="d-block w-100" alt="Eventos exclusivos">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Eventos exclusivos para estudiantes</h5>
                        <p>Accede a congresos, charlas y talleres con expertos de diversas áreas.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#promoCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#promoCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Tarjetas con información de promociones -->
    <div class="container mt-5 card-container">
        <div class="row">
            <!-- Tarjetas en columna (vertical) -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473766365_1046874694150842_2470413042666734052_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=P-jVgvqhFuMQ7kNvgHxLmFP&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=AYZuG1LeZXs0I_a0cTLs-ng&oh=00_AYAOgdRGCqKRFhybmnjxlTG2dNe2mkA6QgPuLfENo5Yw5w&oe=67C3F11A" class="card-img-top" alt="Beca Especial">
                    <div class="card-body">
                        <h5 class="card-title">Beca Especial para Nuevos Estudiantes</h5>
                        <p class="card-text">Recibe una beca del 50% en tu primer semestre si eres parte del programa de excelencia académica.</p>
                        <a href="#" class="btn btn-orange">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473770261_1046874690817509_6380391912682699141_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=KgM6ZXR4KMMQ7kNvgHvS1zt&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=A3JzkeuyfpA5LSgoVuPex-8&oh=00_AYCR3Vm4p6NUjgy0fC_-feY-Dt8JPrrzPJDPTvfvC_7ruA&oe=67C40197" class="card-img-top" alt="Curso Gratuito">
                    <div class="card-body">
                        <h5 class="card-title">Curso Gratuito para Estudiantes Actuales</h5>
                        <p class="card-text">Aprovecha cursos gratuitos en áreas como programación, marketing y más. ¡Solo por este semestre!</p>
                        <a href="#" class="btn btn-orange">Inscríbete ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473770261_1046874690817509_6380391912682699141_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=KgM6ZXR4KMMQ7kNvgHvS1zt&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=A3JzkeuyfpA5LSgoVuPex-8&oh=00_AYCR3Vm4p6NUjgy0fC_-feY-Dt8JPrrzPJDPTvfvC_7ruA&oe=67C40197" class="card-img-top" alt="Descuento en Libros">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en Libros de Textos</h5>
                        <p class="card-text">Obtén un descuento del 10% en la compra de libros de texto a través de nuestra librería oficial.</p>
                        <a href="#" class="btn btn-orange">Ver librería</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Más tarjetas -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473770261_1046874690817509_6380391912682699141_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=KgM6ZXR4KMMQ7kNvgHvS1zt&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=A3JzkeuyfpA5LSgoVuPex-8&oh=00_AYCR3Vm4p6NUjgy0fC_-feY-Dt8JPrrzPJDPTvfvC_7ruA&oe=67C40197" class="card-img-top" alt="Descuento en Cursos">
                    <div class="card-body">
                        <h5 class="card-title">Descuento en Cursos de Verano</h5>
                        <p class="card-text">Inscríbete en cursos de verano y recibe un 15% de descuento. ¡No dejes pasar la oportunidad!</p>
                        <a href="#" class="btn btn-orange">Más información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473770261_1046874690817509_6380391912682699141_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=KgM6ZXR4KMMQ7kNvgHvS1zt&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=A3JzkeuyfpA5LSgoVuPex-8&oh=00_AYCR3Vm4p6NUjgy0fC_-feY-Dt8JPrrzPJDPTvfvC_7ruA&oe=67C40197" class="card-img-top" alt="Examen de Admisión">
                    <div class="card-body">
                        <h5 class="card-title">Examen de Admisión sin Costo</h5>
                        <p class="card-text">¡Haz el examen de admisión sin ningún costo! Aprovecha esta promoción por tiempo limitado.</p>
                        <a href="#" class="btn btn-orange">Inscríbete ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://scontent.feoh11-1.fna.fbcdn.net/v/t39.30808-6/473766365_1046874694150842_2470413042666734052_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=P-jVgvqhFuMQ7kNvgHxLmFP&_nc_zt=23&_nc_ht=scontent.feoh11-1.fna&_nc_gid=AYZuG1LeZXs0I_a0cTLs-ng&oh=00_AYAOgdRGCqKRFhybmnjxlTG2dNe2mkA6QgPuLfENo5Yw5w&oe=67C3F11A" class="card-img-top" alt="Promoción de Biblioteca">
                    <div class="card-body">
                        <h5 class="card-title">Promoción de Biblioteca Digital</h5>
                        <p class="card-text">Accede a más de 1000 libros digitales con un descuento exclusivo para estudiantes.</p>
                        <a href="#" class="btn btn-orange">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>