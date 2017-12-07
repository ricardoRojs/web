<?php
require_once ('../../modelo/Conexion.php');
require_once ('../../modelo/Modulo.php');
require_once ('../../modelo/urlIndex.php');

$modulo = new Modulo();

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;
$marcaFull = "Servicios";

if($dataBussines){
    $nameShort = $dataBussines['nameShort'];
    $nameFull = $dataBussines['nameFull'];

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../../img/favicon.png" type="image/icon"/>
    <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

    <title><?php echo $nameFull;?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
            $('.button-collapse').sideNav();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });
            $('.dropdown-button2').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: ($('.dropdown-content').width()),
                    // Spacing from edge
                    belowOrigin: false, // Displays dropdown below the button
                    alignment: 'left' // Displays dropdown with edge aligned to the left of button
                }
            );
            $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0,
                    //gutter: ($('.dropdown-content').width()*3)/2.5 + 5,
                    // Spacing from edge
                    belowOrigin: true, // Displays dropdown below the button
                    alignment: 'left' // Displays dropdown with edge aligned to the left of button
                }
            );

        });
    </script>
    <style>
        .dropdown-content{
            overflow: visible !important;
            width: 195px !important;
        }
        .material-icons, .icon-text {
            vertical-align: middle;
        }
    </style>
</head>

<body>

<!--Toda la modificacion -->
<?php include ("../../productos/componentes/menu.php");?>
<!--Toda la modificacion -->

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container center">
            <br>
            <h2 class="header orange-text text-orange">Nuestros servicios</h2>
        </div>
    </div>
    <div class="parallax"><img src="../../img/slider.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <!--<h2 class="header center orange-text text-orange"><?php //echo $nameShort;?></h2>-->
                <img src="../../img/solar-logo.png">
            </div>
            <div class="col s12">
                <br>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title"><i class="small material-icons medium right">widgets</i>Instalacion de Modulos</span>
                                <br>
                                <p>Los servicios de instalación y capacitación de uso de los productos
                                    de SolarWinds son brindados en cada país por el Partner que tiene la marca.</p>
                            </div>
                            <div class="card-action">
                                <a href="instalacion-modulos/index.php">Ir a Instalacion de Modulos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title"><i class="small material-icons medium right">developer_board</i>Optimizacion de Modulos</span>
                                <p>Somos el único Partner autorizado de SolarWinds en Perú para brindar
                                    servicios de soporte técnico y capacitación sobre sus productos y
                                    contamos con personal con experiencia y certificado por la marca</p>
                            </div>
                            <div class="card-action">
                                <a href="instalacion-modulos/index.php">Ir a Optimización de Modulos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title"><i class="small material-icons medium right">desktop_windows</i>Monitoreo Gestionado</span>
                                <p>Le permitirán recibir información en línea del desempeño de los
                                    indicadores de su infraestructura TI</p>
                            </div>
                            <div class="card-action">
                                <a href="instalacion-modulos/index.php">Ir a Monitoreo Gestionado</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card blue-grey darken-1 z-depth-5">
                            <div class="card-content white-text">
                                <span class="card-title"><i class="small material-icons medium right">location_on</i>Soporte Local</span>
                                <p>soporte local incluye soporte técnico niveles 1, 2 y 3 para el
                                    mantenimiento preventivo y correctivo sobre la solución</p>
                            </div>
                            <div class="card-action">
                                <a href="instalacion-modulos/index.php">Ir a Soporte Local</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("../../productos/componentes/pie.php");?>

</body>
</html>