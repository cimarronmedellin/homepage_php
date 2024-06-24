        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="./" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"> <img src="./img/logoCimarron.jpg" width="60px">Cimarron</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="./" class="nav-item nav-link active"><i class="fa fa-home"></i></a>
                        <a href="./about.php" class="nav-item nav-link">Nosotros</a>
                        <a href="service.html" class="nav-item nav-link">Servicios</a>
                        <a href="service.html" class="nav-item nav-link">Blog</a>
                        <a href="contact.html" class="nav-item nav-link">Contactenos</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
                </div>
            </nav>
            <!--Carrusel del inicio, hay que corregiro para las otras paginas -->
            <?php require_once("./partials/partials.carrusel.homepage.php") ?>
        </div>
        <!-- Navbar & Hero End -->