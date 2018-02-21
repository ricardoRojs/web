<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();

$marcaFull = "Pagos";

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;
//$moduloFull = "Global Investment Solution S.A.C";


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

    <title><?php echo $marcaFull?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


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
<script>
    //modelo para ajax
    function buscarModulo(modulo){
        var dato = {
            "modulo": modulo
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
    }
</script>
<style>
    .dropdown-content{
        overflow: visible !important;
        width: 195px !important;
    }
    .material-icons, .icon-text {
        vertical-align: middle;
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
<div class="container">
    <div class="section">
        <div class="col s12">
            <form>
                <div class="input-field">
                    <input id="n-tarjeta" name="n-tarjeta" type="text" class="input-field" maxlength="16" data-length="16">
                    <label for="n-tarjeta">Nro. Tarjeta</label>
                </div>
                <div class="input-field">
                    <input id="ccv" name="ccv" type="text" class="input-field" maxlength="3" data-length="3">
                    <label for="ccv">CCV</label>
                </div>
            </form>
            <!--<form>
                <div class="row buscar">
                    <div class="col m1">
                        <button type="button" id="btn-buscar" href="javascript:;" onclick="buscarModulo($('#text-buscar').val());return false;" class="btn-flat waves-effect"><i class="material-icons medium white-text">search</i></button>
                    </div>
                    <div class="input-field col m10">
                        <input type="text" placeholder="Buscar" id="text-buscar" name="buscar" class="text-buscar" required>
                    </div>
                    <div class="col m1">
                        <button type="reset" id="btn-cerrar" class="btn-flat waves-effect"><i class="material-icons medium white-text">close</i></button>
                    </div>
                </div>
            </form>-->
        </div>

        <div class="card s12 z-depth-5" id="resultado"></div>
    </div>
</div>

<!--Pie de la pagina -->
<?php include("../componentes/pie.php");?>

</body>
</html>