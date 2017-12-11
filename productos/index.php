<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$link = new urlIndex();
$modulo = new Modulo();

$marca = $_GET['marca'];

$marcaFull = "Productos";
$nameFull = ucfirst ($marca);

$dataBussines = $modulo->getModulo($marca);

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
<?php include("../componentes/menu.php");?>
<!--Toda la modificacion -->

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange"><?php echo ucfirst ($marca);;?></h2>
            </div>
            <div class="col s12">
                <?php foreach ($dataBussines as $mod){?>
                    <div class="col m4 s12">
                        <div class="card sticky-action z-depth-3">
                            <div class="card-content" style="height: 170px;">
                                <span class="card-title activator center-align"><i class="material-icons right small orange-text">widgets</i><?= $mod['moduloFull']?> (<?= $mod['moduloShort']?>)</span>

                                <p><?= $mod['moduloDesc']?></p>
                            </div>
                            <div class="card-action">
                                <a href="<?= $link->url('solarwinds')."?id=".$mod['id']?>">Ver modulo</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php include("../componentes/pie.php");?>

</body>
</html>