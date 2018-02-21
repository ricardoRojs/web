<?php
require_once ('../../modelo/Conexion.php');
require_once ('../../modelo/Modulo.php');
require_once ('../../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull = "Poliza Mantenimiento";
$marcaFull = "Servicios";

if($dataBussines){
    $nameShort = $dataBussines['nameShort'];
    //$nameFull = $dataBussines['nameFull'];

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="es">
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
<?php include("../../componentes/menu.php");?>
<!--Toda la modificacion -->

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange"><?=$nameFull?></h2>

                <br>
            </div>
            <h5 class="col s12">
                <h5>Actualizaciones durante la vigencia del licenciamiento</h5>

                <p>Garantizamos a nuestros clientes las oportunas actualizaciones en sus equipos con la tecnología de todas las marcas que representamos.</p>



                <h5>Soporte Técnico de Seguridad</h5>

                <p><b>Soporte Esencial - Pack 5x8</b></p>
                <ul>
                    <li><i class="material-icons orange-text text-orange">check</i>Horario Lunes - Vienes 8:00 AM - 5:00 PM</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Comunicación vía email y teléfono</li>
                </ul>
                <p><b>Soporte Premium - Pack 7x24</b></p>
                <ul>
                    <li><i class="material-icons orange-text text-orange">check</i>Horario Lunes - Domingo 0:00 AM - 11:59 PM</li>
                    <li><i class="material-icons orange-text text-orange">check</i>Comunicación vía email y teléfono</li>
                </ul>

                <br>
                <h4 class="center">Servicios Adicionales de GIS S.A.C. con Poliza de Soporte Local</h4>

                <h5>Capacitación de uso del producto</h5>
                <p>Permite a los profesionales de la empresa cliente, tener una capacitación avanzada sobre el uso de nuestro producto.</p>

                <h5>Gestión de Soporte Preventivo</h5>
                <p>Cada 6 meses nuestros profesionales de soporte local pueden acudir a su centro de cómputo para evaluar el funcionamiento del producto.</p>

                <h5>Gestión de Incidencias</h5>
                <p>Los tipos de incidencia serán de los niveles siguientes:</p>
                <ul>
                    <li><i class="material-icons orange-text text-orange">check</i><b>NIVEL 1:</b> Incidencias que pueden ser solucionadas por los profesionales del <b>CLIENTE</b> que han sido previamente capacitados</li>
                    <li><i class="material-icons orange-text text-orange">check</i><b>NIVEL 2:</b> Incidencias que los profesionales del <b>CLIENTE</b> reportan a nuestro soporte local y son solucionados remota o presencialmente por los profesionales de <b>GIS S.A.C.</b></li>
                    <li><i class="material-icons orange-text text-orange">check</i><b>NIVEL 3:</b> Incidencias que los profesionales de <b>GIS S.A.C.</b> reportan a las marca respectivas y son solucionadas de inmediato por ser incidencias conocidas, o son solucionadas accediendo remotamente al equipo o son derivadas para su solución al área de desarrollo de la marca.</li>
                </ul>
                <p>Si por una incidencia los profesionales del <b>CLIENTE</b> no logran comunicación para ser atendidos por un profesional del <b>NIVEL 2</b> podrán comunicarse directamente con el soporte de las marcas.</p>

                <h5>Gestión de Soporte presencial</h5>
                <p>Contamos con un staf nacional e internacional de ingenieros especializados y certificados por las marcas, para brindar el soporte que sea requerido por el cliente.</p>

                <h5>Gestión de Soporte Remoto vía Internet</h5>
                <p>Permite a nuestro equipo de soporte técnico asistir vía internet a los responsables de la administración del producto adquirido.</p>
                <br>
                <h4 class="center">Servicios Adicionales de GIS S.A.C. sin Poliza de Soporte Local</h4>

                <p>Los servicios adicionales requeridos a GIS S.A.C. sin Póliza de Soporte local tienen un costo por hora a tratar. Para
                    <a href="https://web.gis-sac.com/contactar/">más información contactenos</a></p>
            </div>
        </div>
    </div>
</div>

<?php include("../../componentes/pie.php");?>

</body>
</html>