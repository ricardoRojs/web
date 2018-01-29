<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();
$marcaFull = "Contactar";

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
            $('input.autocomplete').autocomplete({
                data: {
                    "Solarwinds": 'img/solarwinds.png',
                    "Iboss": 'img/iboss.png',
                    "Varonis": 'img/varonis.png'
                },
                limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                onAutocomplete: function(val) {
                    // Callback function when value is autcompleted.
                },
                minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
            });


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
<?php include("../componentes/menu.php");?>
<!--Toda la modificacion -->

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange">Formulario</h2>
            </div>
            <form action="#">
                <div class="col s12">
                    <div class="row">
                        <div class="col s6">
                            <div class="row">
                                <div class="col s12">
                                    <p>
                                        <input type="checkbox" id="test5" />
                                        <label for="test5">Consulta Comercial</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="test6" />
                                        <label for="test6">Consulta Técnica</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="test7" />
                                        <label for="test7">Sugerencia</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Producto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Producto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">textsms</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Producto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

<?php include("../componentes/pie.php");?>

</body>
</html>