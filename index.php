<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Entrega 02</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container">
            <picture><img src="assets/img/logo.jpeg" width="281" height="120"></picture><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <h3 style="padding-left: 50px;">Entrega 02 - Grupo 93<br></h3>
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>

    <section class="showcase">
        <section class="text-center bg-light features-icons">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-screen-tablet m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Nombre y teléfono de todos los artistas</h3>
                            <form action="consultas/consulta_1.php" method="post">
                                <input type="submit" class="btn btn-primary" value="Ver listado">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-login m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Artista con mayor cantidad de entradas de cortesía</h3>
                            <form action="consultas/consulta_2.php" method="post">
                                <input type="submit" class="btn btn-primary" value="Ver listado">
                            </form>
                    </div>
                </div>
            </div>
        </section>


        <section class="text-center bg-light features-icons" style="padding-top: 3px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Numero de entradas de cortesía de un artista</h3>
                        </div>
                        <form action="consultas/consulta_tipo_nombre.php" method="post">
                            <input class="form-control" type="text" name="artista">
                            <input type="submit" class="btn btn-primary" value="Consultar">
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-people m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Datos último tour de un artista</h3>
                        </div>
                        <form action="consultas/consulta_ultimo_tour.php" method="post">
                        <input class="form-control" type="text" name="artista">
                        <input type="submit" class="btn btn-primary" value="Consultar">
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-plane m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Países visitados en un tour</h3>
                        </div>
                        <form action="consultas/consulta_paises_visitados.php" method="post" placeholder="hola">
                        <input class="form-control" type="text" name="evento">
                        <input type="submit" class="btn btn-primary" value="Consultar">
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section class="text-center bg-light features-icons" style="padding-top: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-organization m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Productoras con las que ha trabajado un artista</h3>
                        </div>
                        <form action="consultas/consulta_tipo_productora.php" method="post">
                            <input class="form-control" type="text" name="artista">
                            <input type="submit" class="btn btn-primary" value="Consultar">
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-home m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Hoteles en los que se ha hospedado un artista</h3>
                        </div>
                        <form action="consultas/consulta_hospedaje.php" method="post">
                        <input class="form-control" type="text" name="artista">
                        <input type="submit" class="btn btn-primary" value="Consultar">
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="icon-question m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>SORPRESITA</h3>
                        </div>
                        <form action="consultas/sorpresita.php" method="post">
                        <input type="submit" class="btn btn-primary" value="SORPRESITA?">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        
    </section>
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="text-muted small mb-4 mb-lg-0">© Grupo 93 2022. All Rights Reserved. By Rodrigo Ugarte Kunisky &amp; Benjamin Vasquez<br></p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://github.com/gaspcr/grupo93"><i class="fa fa-github fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/gaspcr/pagina"><i class="fa fa-github fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/gaspcr/"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>