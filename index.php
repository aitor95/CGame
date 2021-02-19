<?php
    session_start();
    if(isset($_SESSION['mail'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CGame</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">
    <link rel="stylesheet" href="login/css/form-elements.css">
    <link rel="stylesheet" href="login/css/style.css">
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/maps.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">

<div class="container">
    <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <i class="sidebar icon"></i>
            </button>
            <a id="carga_index" class="navbar-brand" href="#home"></a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li id="carga_juego"><a href="#subir_juego">Subir Juego</a></li>

                <li class="dropdown">
                    <a id="menu_li" data-toggle="dropdown" class="dropdown-toggle" href="#">Plataforma<i class="angle down icon"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li id="carga_plataforma"><a href="#plataforma" onclick="cargaPlataforma(11)">PC</a></li>
                            <li class="divider"></li>
                        <li id="carga_plataforma"><a href="#plataforma" onclick="cargaPlataforma(12)">PlayStation</a></li>
                            <li class="divider"></li>
                        <li id="carga_plataforma"><a href="#plataforma" onclick="cargaPlataforma(13)">Xbox</a></li>
                            <li class="divider"></li>
                        <li id="carga_plataforma"><a href="#plataforma" onclick="cargaPlataforma(14)">Nintendo wii </a></li>
                            <li class="divider"></li>
                        <li id="carga_plataforma"><a href="#plataforma" onclick="cargaPlataforma(15)">Playstation Portable</a></li>
                    </ul>
                </li>
                <li id="carga_chat"><a href="contenido/listaChats.php">Chat</a><span class="notif"><div class="notif_index" id="notif"></div></span></li>
                <li id="carga_verperfilpropio"><a href="#verperfil">Perfil</a></li>

                <li class="dropdown">
                    <a id="menu_li" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="search icon"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li class="buscador"><input type="text" placeholder="Buscar..." id="barraBusqueda" onkeypress="busqueda(event,document.getElementById('barraBusqueda').value)"></li>
                    </ul>
                </li>
                <li><a href="login.php"><i class="sign out icon"></i></a></li>

            </ul>

        </div>
    </nav>
</div>
    </header><!--/#header-->

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>CGame</h1>
                        <p class="lead">Bienvenido a la mejor Página de Intercambios de Videojuegos.</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>¿Estas interesado en un VideoJuego?</h1>
                        <p class="lead">Contacta con el usuario mediante nuestor chat.</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="angle left icon"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="angle right icon"></i></a>
    </section><!--/#main-slider-->

    <section id="carga_contenido" class="margen">

    </section><!--/#carga_contenido-->

     <section id="carga_juegos" class="margen">

    </section><!--/#carga_contenido-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 CGame. Todos los derechos reservados.
                </div>
                <!-- <div class="col-sm-6">
                    <img class="pull-right" src="images/shapebootstrap.png" alt="ShapeBootstrap" title="ShapeBootstrap">
                </div> -->
            </div>
        </div>
    </footer><!--/#footer-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contenido_web.js"></script>
</body>
</html>
<?php
    }else{
        header("Location: login.php");
        die();
    }
?>
