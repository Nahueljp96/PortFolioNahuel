<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="proyectos">
    <header class="container">
        <nav class="navbar navbar-expand-md  mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">Sobre Mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo px-4">Descargar mi CV <i class="fa-solid fa-file-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row"> <!--Row es para indicar una nueva fila!-->
            <div class="col-12">
                <p>Los siguientes son unos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="p-3 d-block">ABM Clientes</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,CSS,PHP,Boostrap y Json. </p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/abmventas.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="p-3 d-block">Sistema de Gestión de Ventas</h2>
                    <p class="p-3 pb-1 d-block"> Sistema de gestión de clientes,productos y ventas.Realizado en HTML, CSS,PHP,MVC,Boostrap,Js,Ajax,jQuery y MySQL de base de datos.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="../portfolio/images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="p-3 d-block">Proyecto Integrador</h2>
                    <p class="p-2 pb-2 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript,jQuery, AJAX, HTML,CSS,Mercadopago con panel administrador,gestor de usuarios,módulo de permisos y funcionalidades a fines.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="b_blank" class="btn btn-rojo"> Ver Online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="" target="b_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="col-3">Sponsor <a href="https://depcsuite.com">DePc Suite</a></div>
            <div class="col-3"> <a href="mailto:nahuel5831@gmail.com"></a>nahuel5831@gmail.com</a></div>
            

        </div>

    </footer>
    <div class="whatsapp pt-3 pb-3 px-3">
        <a href="http://api.whatsapp.com/send?phone=542215023514">
        <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>
</html>