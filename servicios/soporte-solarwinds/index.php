<?php
require_once ('../../modelo/Conexion.php');
require_once ('../../modelo/Modulo.php');
require_once ('../../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull = "Soporte Solarwinds";
$marcaFull = "Servicios";

if($dataBussines){
    $nameShort = $dataBussines['nameShort'];
    //$nameFull = $dataBussines['nameFull'];

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
            margin-right: 5px;
        }
        .one{
            cursor: pointer;
        }
        .two{
            cursor: pointer;
            margin-left: 25px;
        }
        .three{
            cursor: pointer;
            margin-left: 50px;
        }
    </style>
</head>

<body>

<!--Estructura del Menu -->
<?php include("../../componentes/menu.php");?>

<!--Estructura del Body -->
<?php if (isset($_GET['url'])){
    if($_GET['url'] == "instalacion-modulos"){?>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                        <h2 class="header center orange-text text-orange">Instalación de módulos</h2>
                    </div>
                    <div class="col s12">
                        <h5>Instalación de Módulos Solarwinds</h5>
                        <p>Los servicios de instalación y capacitación de uso de los productos de Solarwinds son
                            brindados en cada país por el Partner que tiene la marca.
                        </p>
                        <br>
                        <h5>Prestación del Servicio de Instalación y Capacitación</h5>
                        <p>Somos el único Partner autorizado de SolarWinds en Perú para brindar servicios de
                            soporte técnico y capacitación sobre sus productos y contamos con personal con
                            experiencia y certificado por la marca lo cual nos acredita poder brindar este servicio
                            con altos estándares de calidad.
                        </p>
                        <p>Podemos brindar nuestro servicio de acuerdo a las necesidades del cliente:</p>
                        <ul>
                            <li><i class="material-icons orange-text">check</i>
                                <b>Servicio de Soporte Remoto:</b> servicio desde el Centro de Monitoreo de GIS S.A.C
                            </li>
                            <li><i class="material-icons orange-text">check</i>
                                <b>Servicio de Soporte Presencial:</b> servicio en las instalaciones del cliente.
                            </li>
                        </ul>
                        <h5>Actividades del Servicio de Instalación y Capacitación</h5>
                        <ul>
                            <li class="one"><i class="material-icons orange-text one">filter_1</i>Planeación</li>
                            <li class="two effect_one"><i class="material-icons orange-text ">done</i>Cronograma de proyecto</li>
                            <li class="two effect_one"><i class="material-icons orange-text ">done</i>Plan de gestión del proyecto</li>
                            <li class="two effect_one"><i class="material-icons orange-text ">done</i>KickOff con administradores de plataforma</li>
                        </ul>
                        <ul>
                            <li class="one"><i class="material-icons orange-text ">filter_2</i>Implementación</li>

                            <li class="two effect_two"><i class="material-icons orange-text ">done</i>Alistamiento de infraestructura</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Permisos de seguridad (Puertos-Firewall-ACLs)</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Habilitación protocolo SNMP en todos los dispositivos</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Habilitación protocolo SNMP de escritura en todos los dispositivos de red</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Habilitación protocolo Netflow en los dispositivos de red</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Habilitación protocolo WMI en servidores Windows</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Habilitación y/o validación de credenciales de switches y routers</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Creación de cuenta de correo</li>
                            <li class="three effect_three"><i class="material-icons orange-text ">done_all</i>Verificación conectividad elementos a monitorear vs servidor Orion</li>

                            <li class="two"><i class="material-icons orange-text ">done</i>Instalación</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Instalación módulos Solarwinds </li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Activación de licencia Solarwinds</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Activación de licencias Solarwinds Upgrade</li>

                            <li class="two"><i class="material-icons orange-text ">done</i>Parametrización</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Creación, configuración y reasignación de usuarios</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Adición de elementos a monitorear(Nodos)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración característica de Nodos</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de dashboards</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de mapas (Geográficos - Topologías)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de aplicaciones (SAM Templates)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Revisión configuración de plantillas (NCM Templates)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de usuarios (roles-perfiles-permisos)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de alarmas (Umbrales - Acciones)</li>
                            <li class="three"><i class="material-icons orange-text ">done_all</i>Configuración de reportes</li>
                        </ul>
                        <ul>
                            <li id="three" class="one"><i class="material-icons orange-text ">filter_3</i>Capacitación</li>
                            <li class="two"><i class="material-icons orange-text ">done</i>Sesión de capacitación de funcionamiento de las herramientas</li>
                        </ul>
                        <ul>
                            <li id="four" class="one"><i class="material-icons orange-text ">filter_4</i>Cierre</li>
                            <li class="two"><i class="material-icons orange-text ">done</i>Reunión de cierre</li>
                            <li class="two"><i class="material-icons orange-text ">done</i>Entrega documentación de administración de las herramientas</li>
                            <li class="two"><i class="material-icons orange-text ">done</i>Entrega guía de Soporte</li>
                            <li class="two"><i class="material-icons orange-text ">done</i>Acta de Cierre</li>
                        </ul>
                    </div>
                    <div class="col s12">
                        <p><b>Nota:</b> Algunas tareas pueden varias dependiendo de los módulos a implementar</p>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if($_GET['url'] == "optimizacion-modulos"){?>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                        <h2 class="header center orange-text">Optimización Módulos</h2>
                    </div>
                    <div class="col s12">
                        <h5>Optimización de Monitoreo Módulos Solarwinds</h5>
                        <p>Muchas empresas que usan los productos de SolarWinds, desde su implementación están usando
                            los mismos recursos de hardware y software y muchas veces de una forma no recomendada
                            por la marca. </p>
                        <p>Tampoco han efectuado las actualizaciones de las nuevas versiones del software, lo cual
                            no les permite utilizar las mejoras y nuevas funcionalidades de los productos de SolarWinds
                            y en consecuencia no podrían ingresar a su red o data center equipos o aplicaciones de
                            última tecnología.</p>
                        <br>
                        <h5>Prestación Del Servicio De Optimización</h5>
                        <p>Somos el único Partner autorizado de SolarWinds en Perú para brindar servicios de soporte
                            técnico y capacitación sobre sus productos y contamos con personal con experiencia y
                            certificado por la marca lo cual nos acredita poder brindar este servicio con altos
                            estándares de calidad.</p>
                        <p>Podemos brindar nuestro servicio de acuerdo a las necesidades del cliente:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                <b>Servicio de Soporte Remoto:</b> servicio desde el Centro de Monitoreo de GIS S.A.C.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                <b>Servicio de Soporte Presencial:</b> servicio en las instalaciones del cliente.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if($_GET['url'] == "monitoreo-gestionado"){?>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                        <h2 class="header center orange-text text-orange"><?=$_GET['url']?></h2>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    if($_GET['url'] == "soporte-local"){?>
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                        <h2 class="header center orange-text">Soporte Local</h2>
                    </div>

                </div>
            </div>
        </div>

    <?php }}else{?>
    <!--Toda la modificacion -->

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h2 class="header center orange-text text-orange"><?=$nameFull;?></h2>
                    <!--<img src="../../img/solar-logo.png">-->
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
                                    <a href="index.php?url=instalacion-modulos">Ir a Instalacion de Modulos</a>
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
                                    <a href="index.php?url=optimizacion-modulos">Ir a Optimización de Modulos</a>
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
                                    <a href="index.php?url=monitoreo-gestionado">Ir a Monitoreo Gestionado</a>
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
                                    <a href="index.php?url=soporte-local">Ir a Soporte Local</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }?>

<?php include("../../componentes/pie.php");?>

</body>
</html>