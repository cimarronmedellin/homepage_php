<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Nosotros</title>
        <!-- Todo el head -->
        <?php require_once("./partials/partials.head.php") ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Barra de navegacion -->
        <?php require_once("./partials/partials.barra.php") ?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Acerca de ... -->
        <?php require_once("./partials/partials.acerca.basico.php") ?>


        <!-- Equipo de trabajo -->
        <?php require_once("./partials/partials.equipo.basico.php") ?>


        <!-- Funciones -->
        <?php require_once("./partials/partials.funciones.basico.php") ?>


        <!-- Footer -->
        <?php require_once("./partials/partials.footer.php") ?>
        
        <!-- Script finales -->
        <?php require_once("./partials/partials.script.php") ?>
        
    </body>

</html>