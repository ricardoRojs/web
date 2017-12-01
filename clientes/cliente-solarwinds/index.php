<?php
require_once ('../../modelo/Conexion.php');
require_once ('../../modelo/Modulo.php');
require_once ('../../modelo/urlIndex.php');

$modulo = new Modulo();

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;

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
        #conte{
            background-image: url("img/mapa.png");
            opacity: 1;
            margin: 20px;
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
            <h2 class="header orange-text text-orange">Nuestros Clientes</h2>
        </div>
    </div>
    <div class="parallax"><img src="../../img/slider.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row" id="conte">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange">Clientes en Latinoamerica</h2>
            </div>
            <div class="col s12">
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-image">
                                <a href="paises/peru.php" class="z-depth-5 waves-effect"><img src="img/peru.png"></a>
                                <span class="card-title">Perú</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-image">
                                <a href="paises/peru.php" class="z-depth-5 waves-effect"><img src="img/ecuador.png"></a>
                                <span class="card-title">Ecuador</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue-grey darken-1">
                            <div class="card-image">
                                <a href="paises/peru.php" class="z-depth-5 waves-effect"><img src="img/bolivia.png"></a>
                                <span class="card-title">Bolivia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<?php include ("../../productos/componentes/pie.php");?>

</body>
</html>