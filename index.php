<!DOCTYPE html>
<html lang="es">

    <head>
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

        <!-- Nuestros servicios -->
        <?php require_once("./partials/partials.servicios.basico.php") ?>

        <!-- Acerca de ... -->
        <?php require_once("./partials/partials.acerca.basico.php") ?>

        <!-- Funciones -->
        <?php require_once("./partials/partials.funciones.basico.php") ?>

        <!-- Equipo de trabajo -->
        <?php require_once("./partials/partials.equipo.basico.php") ?>

        <!-- Testimonio -->
        <?php require_once("./partials/partials.testimonio.basico.php") ?>

        <!-- Blog -->
        <?php require_once("./partials/partials.blog.basico.php") ?>

        <!-- Footer -->
        <?php require_once("./partials/partials.footer.php") ?>

        <!-- Script finales -->
        <?php require_once("./partials/partials.script.php") ?>

        
    </body>

</html>