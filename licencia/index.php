<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();
$marcaFull = "Licencias";

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

    <title><?php echo $marcaFull." - ".$moduloFull;?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <link rel="stylesheet" type="text/css" href="../css/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="../css/custom.css" />
    <script type="text/javascript" src="../js/modernizr.custom.46884.js"></script>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
        $('.modal').modal();
        $('.button-collapse').sideNav();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
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
    .embed-container iframe {
        position: absolute;
        top:0;
        left: 0;
        width: 50%;
        height: 50%;
    }
    #download-btn{
        margin: 5px
    }
    .dropdown-content li>a>i{
        margin: 0 0 0 0;
        vertical-align: middle;
    }
</style>

<!--Menu de la pagina -->
<?php include("../componentes/menu.php");?>

<!--Cuerpo de la pagina -->


<!--Pie de la pagina -->
<?php include("../componentes/pie.php");?>

</body>
</html>