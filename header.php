<!DOCTYPE html>

<html lang="es"> 
<meta charset="UTF-8">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <style>
 

    .title-menu{
    border-bottom: 1px solid #4e4e52;
    color: #9496a1;
    clear: both;
    display: block;
    font-family: 'Open Sans';
    font-size: 14px;
    font-weight: 700;
    line-height: 50px;
    padding: 15px 0 0 0;
    text-transform: uppercase;
    width: 100%;
    }
  </style>
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default" >

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Administrador</a>
                <a class="navbar-brand hidden" href="./">A</a>

                <h3 class="navbar-brand"><img class="imagen" width="30" heigth="30" src="images/icons/empresa.png"> Empresas</h3>
                <h3 class="navbar-brand hidden title-menu   "><img class="imagen" width="30" heigth="30" src="images/icons/empresa.png"> </h3>
                <h3 class="menu-title"><img class="imagen" width="30" heigth="30" src="images/icons/campaign.png"> Campañas</h3>
                <h3 class="menu-title"><img class="imagen" width="30" heigth="30" src="images/icons/users.png"> Usuarios</h3>
                <h3 class="menu-title"><img class="imagen" width="30" heigth="30" src="images/icons/historial.png"> Historial</h3>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h3 class="menu-title"> Salir de sesión</h3>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
        
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel" >

        <!-- Header-->
        <header id="header" class="header"   >

            <div class="header-menu" >

                <div class="col-sm-12 " >
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"  >
                   

                        <div class="dropdown for-notification pull-right" >
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                      
                    </div>
                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->