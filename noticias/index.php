<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$tz_object = new DateTimeZone('America/Lima');

$datetime = new DateTime();
$datetime->setTimezone($tz_object);

$modulo = new Modulo();
$link = new urlIndex();

$marcaFull = "Noticias";

$day = $datetime->format('Y-m-d');
$directorio = dirname(__FILE__)."/news-day";
$gestor_dir = opendir($directorio);
while (false !== ($nombre_fichero = readdir($gestor_dir))) {
    $ficheros[] = $nombre_fichero;
}
rsort($ficheros);

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

    <title><?=$marcaFull?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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

            $('#btnfade').click(function() {
                $("#fadeDer").animate({
                    right: parseInt($("#fadeDer").css("right"))== 0 ?"-="+$("#fadeDer").outerWidth() : 0,
                    opacity: parseInt($("#fadeDer").css("opacity")) == 1 ? 0 : 1
                },2000);
            });
        });
    </script>
    <script>
        /*function buscarModulo(modulo){
            var dato = {
                "modulo": modulo,
                "modulo1": modulo
            };
            $.ajax({
                data:  dato, //datos que se envian a traves de ajax
                url:   'licencia.php', //archivo que recibe la peticion
                type:  'POST', //método de envio
                beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
                }
            });
        }*/
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
        .buscar{
            background-color: #7db557;
            vertical-align: middle;
        }
        #btn-buscar, #btn-cerrar{
            vertical-align: middle;
            margin-top: 25%;
            padding-left: 10px;
            padding-right: 10px;
        }
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }
        .input-field input[type=text]:focus + label {
            color: #000;
        }
    </style>
</head>

<body>

<!--Menu de la pagina -->
<?php include("../componentes/menu.php");?>

<!--Cuerpo de la pagina -->
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m8">
                <?php include ("news-day/".$ficheros[0]."/".$ficheros[0].".php");?>
            </div>
            <?php
            for ($a = 1; $a < sizeof($ficheros)-2; $a++){?>
                <div class="col s12 m4" style="margin-bottom: 10px">
                    <?php include ("news-day/".$ficheros[$a]."/".$ficheros[$a].".php");?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<!--Pie de la pagina -->
<?php include("../componentes/pie.php");?>

</body>
</html>
