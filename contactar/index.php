<?php
require_once ('modelo/Conexion.php');
require_once ('modelo/Modulo.php');
require_once ('modelo/urlIndex.php');

$modulo = new Modulo();

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;
$moduloFull = "Global Investment Solution S.A.C";


if($dataBussines){
    $nameShort = $dataBussines['nameShort'];
    $nameFull = $dataBussines['nameFull'];

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../img/favicon.png" type="image/icon"/>
    <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <title><?php echo $nameFull;?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
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
        (function ($) {
            $(function () {
                $('.slider').slider();
            });
        })(jQuery);
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
<?php include("../productos/componentes/menu.php");?>
<!--Toda la modificacion -->

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container center">
            <iframe allowfullscreen="" frameborder="0" height="450" src="http://www.gis-sac.com/Portal/banner/demo/" width="660"></iframe>
        </div>
    </div>
    <div class="parallax"><img src="../img/slider.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange"><?php echo $nameShort;?></h2>
            </div>
            <div class="col s12">
                <h5 class="header left">Quiénes somos</h5>
                <br>
                <br>
                <p class="left-align">GIS S.A.C. es una empresa especializada en brindar a sus clientes las soluciones de seguridad TI y monitoreo siguientes:</p>
                <ul>
                    <li><i class="material-icons orange-text text-orange">check</i>Tecnología de punta para la gestión y la seguridad TI de una red corporativa frente a internet y sus usuarios finales.</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Soluciones para la administración y el monitoreo de plataformas de redes corporativas e infraestructuras tecnológicas.</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Brindamos Consultorías y servicios de seguridad TI.</li>
                </ul>
            </div>
            <div class="col s12">
                <h5 class="header left">Nuestras Soluciones</h5>
                <br>
                <br>
                <p class="left-align">Las soluciones que proporcionamos son de marcas líderes en sus respectivos mercados, contando con excelentes clientes tanto en Perú, América Latina y el resto del mundo.</p>
            </div>
            <div class="col s12">
                <h5 class="header left">Nuestros Proveedores</h5>
                <br>
                <br>
                <p class="left-align">Nuestros proveedores, cuentan con productos de primer nivel orientados principalmente a:</p>
                <ul>
                    <li><i class="material-icons orange-text text-orange">check</i>Resolver las necesidades de nuestros clientes.</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Brindarles los mayores beneficios tecnológicos del mercado.</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Atenderlos con un permanente soporte técnico nacional e internacional.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include("../productos/componentes/pie.php");?>

</body>
</html>