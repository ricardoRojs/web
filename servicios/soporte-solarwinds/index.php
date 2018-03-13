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
                            <li><i class="material-icons orange-text">cast</i>
                                <b>Servicio de Soporte Remoto:</b> servicio desde el Centro de Monitoreo de GIS S.A.C
                            </li>
                            <li><i class="material-icons orange-text">computer</i>
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
                        <h2 class="header center orange-text text-orange">Monitoreo Gestionado</h2>
                    </div>
                    <div class="col s12">
                        <h5>Alcances de los Servicios de Soporte Local para la Plataforma de Monitoreo Solarwinds</h5>
                        <p>La necesidad de contar con un Servicio Gestionado para su plataforma de monitoreo de Solarwinds
                            obtener información de desempeño para la toma de decisiones, es un deseo cada vez más requerido
                            por las empresas. Nuestra solución de Servicios Gestionados de Monitoreo le permitirán recibir
                            información en línea del desempeño de los indicadores de su infraestructura TI. Los crecientes
                            cambios y el dinamismo de la gestión en un negocio, obligan a las empresas y organizaciones
                            a responder en forma rápida, segura y estable. Todas las áreas dentro de una compañía deben
                            estar alineadas en estos términos, y el grupo de TI no escapa a ello.
                        </p>
                        <p>Tanto las herramientas de Monitoreo, como los servicios gestionados, han pasado a ser parte
                            regular de los elementos adquiridos por las áreas de TI de las empresas, asegurando la
                            continuidad de las operaciones y permitiendo actuar en forma proactiva frente a cualquier
                            problemática que se presente en algún punto del mapa dependiente del grupo TI.
                        </p>
                        <p>Una empresa puede contar con los siguientes niveles de monitoreo de su plataforma TI y son las siguientes:</p>
                        <br>
                        <h5>Monitoreo de Infraestructura</h5>
                        <p>Este monitoreo que se realiza a nivel básico dentro de la infraestructura TI. Se monitorean
                            los parámetros del sistema operativo y del hardware que lo soporta, revisando umbrales de
                            consumo y utilización de los componentes. Está fuertemente orientado a los niveles más
                            técnicos dentro de la compañía, y permite obtener reportes y estadísticas asociadas al
                            comportamiento.
                        </p>
                        <br>
                        <h5>Monitoreo de Aplicaciones, Base de Datos y Transacciones</h5>
                        <p>Al monitoreo de Infraestructura, se incorpora el monitoreo de la salud de los servicios de
                            las aplicaciones, así como el desempeño de la performance de las bases de datos y el
                            desempeño de las aplicaciones web. Este nivel de monitoreo comprende el seguimiento de la
                            operatividad de los equipos de la red, agregado el monitoreo de los diversos sistemas
                            operativos de las aplicaciones del data center, para obtener resultados de monitoreo a
                            nivel de experiencia de los usuarios finales dentro de la empresa. Este nivel, está
                            orientado a los informes que deben recibir la Gerencia, el equipo técnico y el grupo de
                            operaciones dentro de una organización, para la toma de decisiones.
                        </p>
                        <br>
                        <h5>Monitoreo de Servicios Gestionados</h5>
                        <p>Hoy en día este es un objetivo importante dentro de una organización; contar con un Servicio
                            Gestionado de su plataforma TI donde se puedan obtener resultados óptimos sin tener que
                            contar dentro de la empresa con personal dedicado a estas complicadas labores de monitoreo
                            en cualquiera de los niveles antes mencionados.
                        </p>
                    </div>
                    <div class="col s12 m8">
                        <img src="img/monitoreo-gestionado/monitoreo.png" align="center" width="100%">
                    </div>
                    <div class="col s12 m12">
                        <br>
                        <h5>Prestación del Servicio Gestionado</h5>
                        <p>Somos el único Partner autorizado de SolarWinds en Perú para brindar servicios de soporte
                            técnico y capacitación sobre sus productos y contamos con personal con experiencia y
                            certificado por la marca lo cual nos acredita poder brindar este servicio con altos
                            estándares de calidad.
                        </p>
                        <p>Podemos brindar nuestro servicio de diversas formas, generalmente acordadas previamente con
                            el cliente:
                        </p>
                        <ul>
                            <li><i class="material-icons orange-text">launch</i>
                                <b>Servicio Gestionado de Monitoreo Remoto:</b> gestión desde el Centro de Monitoreo de GIS S.A.C.
                            </li>
                            <li><i class="material-icons orange-text">launch</i>
                                <b>Servicio Gestionado de Monitoreo Local:</b> gestión presencial en las instalaciones del cliente en fechas predeterminadas.
                            </li>
                            <li><i class="material-icons orange-text">launch</i>
                                <b>Servicio Gestionado de Monitoreo Local Residente:</b> gestión presencial permanente en las  oficinas del cliente.
                            </li>
                        </ul>
                        <br>
                        <h5>Beneficios del Servicio Gestionado</h5>
                        <p>Los principales beneficios de nuestro servicio se resumen en:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Reducir los riesgos de caídas de los servicios, lo que implica minimizar las pérdidas ocasionadas por fallas.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Reducir costos administrativos, al tener un monitoreo centralizado de las plataformas.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Actuar proactivamente frente a las posibles caídas del servicio.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Permite monitorear el tiempo de respuesta en una transacción dentro de la empresa.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Tener una consola web que muestre el nivel de cumplimiento de SLA.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Monitorear las tendencias de desempeño en la plataforma de servicios.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Alertas personalizadas.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Reportes de desempeño de la plataforma.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Reportes Gerenciales Ejecutivos y operacionales, lo que permite efectividad y rapidez en la toma de decisiones.
                            </li>
                            <li><i class="material-icons orange-text pr">done</i>
                                Planificación del crecimiento de la plataforma e incorporación de nuevos servicios en forma ordenada.
                            </li>
                        </ul>
                        <br>
                        <h5>Alcances del Servicio Gestionado</h5>
                        <p>Servicios de gestión y mantenimiento correctivo local o preventivo de la solución de
                            monitoreo basada en la plataforma de los módulos de Solarwinds que tienen instalados en la
                            red de la empresa.
                        </p>
                        <br>
                        <h5>Detalles del Servicio Gestionado</h5>
                        <p>A continuación, los detalles del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Los servicios serán ILIMITADOS y permanentes.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                El tiempo de atención de soporte vía telefónica o por correo será de 30-45 minutos una
                                vez efectuado el reporte.</li>
                            <li><i class="material-icons orange-text">done</i>
                                Tiempo de atención por fallas vía remota o presencial serán como máximo de dos (2)
                                horas, una vez efectuado el reporte.
                            </li>
                        </ul>
                        <br>
                        <h5>Características del Servicio Gestionado</h5>
                        <p>Se detallan a continuación las características del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Soporte gestionado sobre la solución a través de personal técnico certificado con
                                experiencia comprobada en las labores de diseño, soporte, mantenimiento e instalación
                                de las soluciones SolarWinds.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Brindar soporte de tipo: Incidentes, preventivo, correctivo, mejora continua, requerimientos.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Generar un diagnóstico del estado de toda la red, garantizando permanentemente la máxima disponibilidad.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Actualizaciones de las nuevas versiones del software.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Programación de reportes para que sean enviados diariamente o mensual según convenga.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Configuraciones de nuevos equipos, aplicaciones y elementos en el módulo Solarwinds instalados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Guía en configuración de nuevos reportes y alarmas personalizados según sea el caso.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Resolución de dudas referidas a funcionalidades de la herramienta de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                La atención del SERVICIO GESTIONADO será las 24 horas del día por el tiempo que dure el contrato.
                            </li>
                        </ul>
                        <br>
                        <h5>Informes Mensuales del Servicio Gestionado</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                            Porcentaje de disponibilidad del servicio durante el mes
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Porcentaje de incidentes resueltos durante el mes
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Total, de actividades y trabajos registrados en el mes.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Porcentaje de actividades y trabajos registrados en el mes agrupados por tipo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Porcentaje de disponibilidad mensual durante los últimos 6 meses.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Performance mensual del servicio durante los últimos 6 meses: <b>RAM - CPU - Disk - Network.</b>
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            Porcentaje mensual de Incidentes, requerimientos, correctivos, preventivos y mejora continúa atendidos durante los últimos 6 meses.
                            <li><i class="material-icons orange-text">done</i>
                                Top 10 atenciones frecuentes desde el inicio del contrato a la fecha.
                            </li>
                        </ul>
                        <br>
                        <h5>Informes Mensuales de Actividades Realizadas en el Mes</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Incidentes
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Requerimientos operativos
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Mantenimientos correctivos
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Mantenimientos preventivos
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Mejora continua
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Actividades pendientes
                            </li>
                        </ul>
                        <br>
                        <h5>Recomendaciones al Cierre del Mes</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Recomendaciones Basadas en el Análisis de Logs del servicio: Eventos más repetitivos.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Recomendaciones Basadas en el Análisis de Disponibilidad.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Recomendaciones Basadas en el Análisis de Performance
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Recomendaciones Basadas en el Análisis del Servicio.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Recomendaciones Basadas en los Incidentes y Requerimientos atendidos durante el mes
                        </ul>
                        <br>
                        <h5>Exclusiones</h5>
                        <p>Es responsabilidad del contratista del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Suministrar toda la información y los recursos necesarios para el desarrollo de los servicios detallados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar el backup de las configuraciones y la base de datos de las aplicaciones que está usando de Solarwinds.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar los permisos de acceso vía web o presencial al personal técnico de soporte en los diferentes niveles.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar las adecuaciones físicas y/o eléctricas requeridas para la operación de los equipos.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Suministrar acceso a las licencias de los Software, las actualizaciones, el servidor y/o
                                los equipos que interactúan con el sistema de gestión de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Mantener el Servidor y los sistemas operativos en correcto funcionamiento de acuerdo a
                                las especificaciones de los REQUERIMIENTOS DEL SISTEMA, para el buen mantenimiento del sistema de gestión de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Canales de comunicación operativos y a cero (0) metros.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Asignar a los especialistas de su empresa para la creación de consultas de ser necesario el despliegue de los mismos
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Facilitar la disponibilidad de las personas encargadas de los diferentes servidores, routers,
                                switches, y demás equipos necesarios, que se vean involucrados en los servicios a prestar.
                            </li>
                        </ul>
                        <br>
                        <h5>Canales de Atención</h5>

                        <p>Las solicitudes de los servicios de gestión se podrán realizar en los horarios establecidos, a través de:
                        </p>
                        <ul>
                            <li><i class="material-icons orange-text">phone</i><b>Teléfono fijo:</b> +51(01)271-0852</li>
                            <li><i class="material-icons orange-text">phone_android</i><b>Celular RPC:</b> 990690230</li>
                            <li><i class="material-icons orange-text">phone_android</i><b>Celular RPM:</b> #991707533</li>
                            <li><i class="material-icons orange-text">mail</i><b>E-mail:</b> contacto@gis-sac.com</li>
                        </ul>
                        <br>
                        <h5 class="center">Compromisos</h5>
                        <br>
                        <h5>Empresa Contratista De Servicio</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Nombrar una persona contacto con la que estemos en comunicación permanentemente durante la ejecución del contrato.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Brindar los permisos requeridos para realizar las actividades contratadas.
                            </li>
                        </ul>
                        <br>
                        <h5>GIS S.A.C.</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Nombrar una persona encargada de la supervisión, ejecución y administración de los servicios ofertados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Cumplimiento de los alcances descritos en el ítem anterior.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Efectuar las pruebas de las configuraciones y los servicios implementados después de su puesta en funcionamiento.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                GIS S.A.C. garantiza la confidencialidad de la información obtenida en la labor de prestación de estos servicios.
                            </li>
                        </ul>
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
                    <div class="col s12">
                        <h5 class="center">Alcances de los Servicios de Soporte Local para la Plataforma de Monitoreo Solarwinds</h5>
                        <p>Este servicio de soporte local incluye soporte técnico niveles 1, 2 y 3 para el mantenimiento
                            preventivo y correctivo sobre la solución, así como la configuración de nuevas funcionalidades
                            que tienen las actualizaciones de los módulos Solarwinds.
                        </p>
                        <p>Una empresa puede contar con los siguientes niveles de monitoreo de su plataforma TI y son las siguientes:</p>
                        <br>
                        <h5>Monitoreo de Infraestructura</h5>
                        <p>Este monitoreo que se realiza a nivel básico dentro de la infraestructura TI. Se monitorean los
                            parámetros del sistema operativo y del hardware que lo soporta, revisando umbrales de consumo y
                            utilización de los componentes. Está fuertemente orientado a los niveles más técnicos dentro de
                            la compañía, y permite obtener reportes y estadísticas asociadas al comportamiento.
                        </p>
                        <br>

                        <h5>Monitoreo de Aplicaciones, Bases de Datos y Transacciones</h5>
                        <p>Al monitoreo de Infraestructura, se incorpora el monitoreo de la salud de los servicios de las
                            aplicaciones, así como el desempeño de la performance de las bases de datos y el desempeño de
                            las aplicaciones web. Este nivel de monitoreo comprende el seguimiento de la operatividad de
                            los equipos de la red, agregado el monitoreo de los diversos sistemas operativos de las aplicaciones
                            de la data center, para obtener resultados de monitoreo a nivel de experiencia de los usuarios
                            finales dentro de la empresa. Este nivel, está orientado a los informes que deben recibir la
                            Gerencia, el equipo técnico y el grupo de operaciones dentro de una organización, para la toma de decisiones.
                        </p>
                    </div>
                    <div class="col s12 m8">
                        <img src="img/soporte-local/ubicacion.png" width="100%">
                    </div>
                    <div class="col s12">
                        <br>
                        <h5>Prestación del Servicio de Soporte Local</h5>
                        <p>Somos el único Partner autorizado de SolarWinds en Perú para brindar servicios de soporte
                            técnico y capacitación sobre sus productos y contamos con personal con experiencia y
                            certificado por la marca lo cual nos acredita poder brindar este servicio con altos estándares de calidad.
                        </p>
                        <p>Podemos brindar nuestro servicio de acuerdo a las necesidades del cliente:</p>
                        <ul>
                            <li><i class="material-icons orange-text">cast</i>
                                <b>Servicio de Soporte Remoto:</b> servicio desde el Centro de Monitoreo de GIS S.A.C
                            </li>
                            <li><i class="material-icons orange-text">computer</i>
                                <b>Servicio de Soporte Presencial:</b> servicio en las instalaciones del cliente.
                            </li>
                        </ul>
                        <br>

                        <h5>Beneficios del Servicio de Soporte Local</h5>
                        <p>Los principales beneficios de nuestro servicio se resumen en:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Solucionar rápidamente y oportunamente las caídas de los servicios de monitoreo, lo que implica minimizar las pérdidas ocasionadas por fallas.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Actuar proactivamente frente a las posibles caídas del servicio.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Monitorear adecuadamente las tendencias de desempeño en la plataforma de servicios.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Tener bien configuradas las alertas de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Contar con reportes Gerenciales Ejecutivos y operacionales, lo que permite efectividad y rapidez en la toma de decisiones.
                            </li>
                        </ul>
                        <br>

                        <h5>Alcances del Servicio de Soporte Local</h5>
                        <p>Servicios de mantenimiento correctivo local o preventivo de la solución de monitoreo y gestión.
                            Basada en la plataforma de los módulos de Solarwinds que tienen instados en la red de la empresa.
                        </p>
                        <br>

                        <h5>Detalles del Servicio de Soporte Local</h5>
                        <p>A continuación, los detalles del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Los servicios de soporte local 5X8 serán ilimitados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                El tiempo de atención de soporte vía telefónica o por correo será de 30-45 minutos una vez efectuado el reporte.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                El tiempo de atención por fallas vía remota o presencial serán como máximo de dos (2) horas, una vez efectuado el reporte.
                            </li>
                        </ul>
                        <br>

                        <h5>Características del Servicio de Soporte Local</h5>
                        <p>Se detallan a continuación las características del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Soporte local sobre la solución a través de personal técnico con experiencia comprobada
                                en las labores de diseño, soporte, mantenimiento e instalación de las soluciones  SolarWinds.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Sesiones de Mantenimiento Correctivo según requerimientos.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Actualizaciones de las nuevas versiones del software.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Configuraciones de nuevos requerimientos, así como la capacitación de uso.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Configuraciones de nuevos equipos, aplicaciones y elementos en el módulo Solarwinds instalados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Guía en configuración de nuevos reportes y alarmas personalizados según sea el caso.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Resolución de dudas referidas a funcionalidades de la herramienta de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                La atención del Soporte Local niveles 1, 2 y 3 (5x8), todos gestionados por GIS S.A.C.;
                                serán de lunes a viernes de 9:00 AM – 5:00 PM, sin incluir días festivos.
                            </li>
                        </ul>
                        <br>

                        <h5>Exclusiones</h5>
                        <p>Es responsabilidad del contratista del servicio:</p>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Suministrar toda la información y los recursos necesarios para el desarrollo de los servicios detallados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar el backup de las configuraciones y la base de datos de las aplicaciones que está usando de Solarwinds.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar los permisos de acceso vía web o presencial al personal técnico de soporte en los diferentes niveles.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Garantizar las adecuaciones físicas y/o eléctricas requeridas para la operación de los equipos.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Suministrar acceso a las licencias de los Software, las actualizaciones, el servidor y/o
                                los equipos que interactúan con el sistema de gestión de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Mantener el Servidor y los sistemas operativos en correcto funcionamiento de acuerdo a
                                las especificaciones de los REQUERIMIENTOS DEL SISTEMA, para el buen mantenimiento del sistema de gestión de monitoreo.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Canales de comunicación operativos y a cero (0) metros.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Asignar a los especialistas de su empresa para la creación de consultas de ser necesario el despliegue de los mismos
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Facilitar la disponibilidad de las personas encargadas de los diferentes servidores, routers,
                                switches, y demás equipos necesarios, que se vean involucrados en los servicios a prestar.
                            </li>
                        </ul>
                        <br>
                        <h5>Canales de Atención</h5>

                        <p>Las solicitudes de los servicios de gestión se podrán realizar en los horarios establecidos, a través de:
                        </p>
                        <ul>
                            <li><i class="material-icons orange-text">phone</i><b>Teléfono fijo:</b> +51(01)271-0852</li>
                            <li><i class="material-icons orange-text">phone_android</i><b>Celular RPC:</b> 990690230</li>
                            <li><i class="material-icons orange-text">phone_android</i><b>Celular RPM:</b> #991707533</li>
                            <li><i class="material-icons orange-text">mail</i><b>E-mail:</b> contacto@gis-sac.com</li>
                        </ul>
                        <p>Una decisión que involucre escalar un problema a un nivel de soporte mayor dependerá de la
                            gravedad y el nivel de prioridad del mismo, lo cual será determinado por el personal técnico
                            del nivel de soporte respectivo. Se prestará servicio ante cualquier falla reportada de la
                            solución de monitoreo incluida en la presente OFERTA, pero se debe garantizar que el CLIENTE
                            ejecutará las recomendaciones de tipo obligatorio que se deriven de la prestación del servicio
                            (Adecuaciones eléctricas, o debidas a operación y/o manipulación inadecuada, etc.), sin las cuales
                            no se puede garantizar la estabilidad y disponibilidad de dicha solución.
                        </p>
                        <br>

                        <h5>Niveles de escalamientos</h5>
                    </div>
                    <div class="col s12">

                        <div class="col s12 m2"></div>
                        <div class="col s12 m6 center">
                            <table>
                                <thead>
                                <tr style="background: black">
                                    <th class="white-text">Nivel de Soporte</th>
                                    <th class="white-text">Ubicación</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Soporte Nivel 1</td>
                                    <td>GIS S.A.C. - PERÚ</td>
                                </tr>
                                <tr>
                                    <td>Soporte Nivel 2</td>
                                    <td>E-DEA NETWORKS - COLOMBIA</td>
                                </tr>
                                <tr>
                                    <td>Soporte Nivel 3</td>
                                    <td>SOLARWINDS - USA</td>
                                </tr>
                                </tbody>
                            </table></div>
                        <div class="col s12 m2"></div>
                    </div>
                    <div class="col s12">

                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                El servicio de soporte nivel 2 será prestado remotamente por e-dea Networks y soporte
                                nivel 1 local será prestado presencial o remotamente por GIS S.A.C.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                El soporte de nivel 3 está respaldado por la compañía fabricante SolarWinds a través de
                                su equipo de soporte remoto.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                La presente oferta no incluye soporte a equipos, software o aplicaciones adicionales a
                                los contemplados para el funcionamiento y buen desempeño de las herramientas de monitoreo SolarWinds.
                            </li>
                        </ul>
                        <br>

                        <h5 class="center">Compromisos</h5>
                        <br>
                        <h5>Empresa Contratista De Servicio</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Nombrar una persona contacto con la que estemos en comunicación permanentemente durante la ejecución del contrato.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Brindar los permisos requeridos para realizar las actividades contratadas.
                            </li>
                        </ul>
                        <br>
                        <h5>GIS S.A.C.</h5>
                        <ul>
                            <li><i class="material-icons orange-text">done</i>
                                Nombrar una persona encargada de la supervisión, ejecución y administración de los servicios ofertados.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Cumplimiento de los alcances descritos en el ítem anterior.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                Efectuar las pruebas de las configuraciones y los servicios implementados después de su puesta en funcionamiento.
                            </li>
                            <li><i class="material-icons orange-text">done</i>
                                GIS S.A.C. garantiza la confidencialidad de la información obtenida en la labor de prestación de estos servicios.
                            </li>
                        </ul>
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