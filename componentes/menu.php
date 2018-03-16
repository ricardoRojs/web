<style>
    nav {
        /*background-color: #7db557;*/
        background-color: #ff9800;
        /*background-color: #2196f3;*/

    }
    nav .nav-background{
        height: 120px;
        top: 0;
        opacity: .5;
        bottom: 0;
        -webkit-transform: none;
        transform: none;
        background-repeat: repeat;
        <?php echo "background-image: url('".$link->url("img")."fondo.png') !important;"; ?>
    }
    #conte{
        position: absolute;
        top: 10px;
        right: 1%;
        left: 1%;
    }
    #titulo{
        position: absolute;
        top: 100px;
        right: 1%;
        left: 1%;

    }

    /*botón up*/
    .boton-subir{
        display: none;
        /*background: #00974B;*/
        background: #2196f3;
        border: thin solid #fff;
        border-radius: 3px;
        position: fixed;
        right: 15px;
        bottom:2px;
        z-index: 999999999;
    }
    /*evento hover*/
    .boton-subir:hover{
        box-shadow:   0px 2px 10px 0px rgba(255, 255, 255, 0.75);
    }
    /*estilos para el tag i*/
    .boton-subir i{
        color: #fff;
        font-size: 1.5em;
        padding: 10px 10px 10px 10px;
        /*-ms-transform: rotate(-45deg); /* IE 9 */
        /*-webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
        /*transform: rotate(-45deg);*/
    }

</style>
<nav class="nav-extended">
    <div class="nav-background">
        <div class="nav-background" id="fondo"></div>
    </div>
    <div class="nav-wrapper container" id="conte">
        <a href="<?= $link->url("inicio")?>" itemprop="url"><img src="<?php echo $link->url("img")."logo-gis2.png"; ?>" alt="Logo" width="200px"/></a>

        <ul id='productos' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='<?php echo  $link->url("inicio")."productos/index.php?marca=solarwinds"?>' data-activates='solarwinds' data-hover="hover" data-alignment="left">Solarwinds<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <!--<li><a class='dropdown-button2 d' href='<?php //echo  $link->url("inicio")."productos/index.php?marca=iboss"?>' data-activates='iboss' data-hover="hover" data-alignment="left">Iboss<i class="material-icons right">keyboard_arrow_right</i></a></li>-->
            <!--<li><a class='dropdown-button2 d' href='#' data-activates='varonis' data-hover="hover" data-alignment="left">Varonis<i class="material-icons right">keyboard_arrow_right</i></a></li>-->
        </ul>

        <ul id='ser-servicio' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='<?php echo $link->url("soporte-solarwinds");?>' data-activates='soporte-so' data-hover="hover" data-alignment="left">Soporte Solarwinds</a></li>
            <li><a class='dropdown-button2 d' href='<?php echo $link->url("poliza-mantenimiento");?>' data-activates='poliza-so' data-hover="hover" data-alignment="left">Poliza de Mantenimiento</a></li>
        </ul>

        <ul id='nue-cliente' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='<?php echo $link->url("cliente")."cliente-solarwinds/"?>' data-activates='soporte-so' data-hover="hover" data-alignment="left">Clientes Solarwinds</a></li>
            <li><a class='dropdown-button2 d' href='<?php echo $link->url("cliente")."cliente-iboss/"?>' data-activates='poliza-so' data-hover="hover" data-alignment="left">Clientes Iboss</a></li>
        </ul>



        <!--Primer nivel solarwinds -->
        <ul id='solarwinds' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='#' data-activates='redes' data-hover="hover" data-alignment="left">Administración de Redes<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='sistemas' data-hover="hover" data-alignment="left">Administración de Sistemas<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='seguridad' data-hover="hover" data-alignment="left">Seguridad de TI<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='servicio' data-hover="hover" data-alignment="left">Servicio de Ayuda de TI<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='base' data-hover="hover" data-alignment="left">Administración de Bases de Datos<i class="material-icons right">keyboard_arrow_right</i></a></li>
        </ul>

        <!--Segundo nivel solarwinds (Administración de Redes)-->
        <ul id='redes' class='dropdown-content'>
            <li><a href="<?php echo $link->url("solarwinds")."?id=1";?>">Network Performance Monitor</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=2";?>">Netflow Traffic Analyzer</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=3";?>">Network Configuration Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=4";?>">Ip Address Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=5";?>">User Device Tracker</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=6";?>">Voip &amp; Network Quality Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=7";?>">Log &amp; Event Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=8";?>">Engineer's Toolset</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=9";?>">Network Topology Mapper</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=10";?>">Kiwi CatTools</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=11";?>">Kiwi Syslog Server</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Administración de Sistemas)-->
        <ul id='sistemas' class='dropdown-content'>
            <li><a href="<?php echo $link->url("solarwinds")."?id=12";?>">Server &amp; Application Monitor</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=13";?>">Virtualization Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=14";?>">Storage Resource Monitor</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=15";?>">Web Performance Monitor</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Seguridad de Ti)-->
        <ul id='seguridad' class='dropdown-content'>
            <li><a href="<?php echo $link->url("solarwinds")."?id=16";?>">Patch Manager</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=17";?>">Serv-U MFT Server</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Servicio de Ayuda de Ti)-->
        <ul id='servicio' class='dropdown-content'>
            <li><a href="<?php echo $link->url("solarwinds")."?id=18";?>">Web Help Desk</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=19";?>">Dameware Remote Support</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=20";?>">Dameware Mini Remote Control</a></li>
            <li><a href="<?php echo $link->url("solarwinds")."?id=21";?>">Mobile Admin</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Administración de Bases de Datos)-->
        <ul id='base' class='dropdown-content'>
            <li><a href="<?php echo $link->url("solarwinds")."?id=22";?>">Database Performance Analyzer</a></li>
        </ul>
        <!--Fin Segundo nivel solarwinds -->
        <!--Fin Primer nivel solarwinds -->

        <!--Primer nivel iboss -->
        <ul id='iboss' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='#' data-activates='web' data-hover="hover" data-alignment="left">Administración de Contenido Web<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='reportes' data-hover="hover" data-alignment="left">Reportes Y Logs<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='gestion' data-hover="hover" data-alignment="left">Gestión De Ancho De Banda<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='monitoreo' data-hover="hover" data-alignment="left">Monitoreo De Escritorio<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='integracion' data-hover="hover" data-alignment="left">Integración<i class="material-icons right">keyboard_arrow_right</i></a></li>
        </ul>

        <!--Segundo nivel iboss (Administración de Contenido Web)-->
        <ul id='web' class='dropdown-content'>
            <li><a href="<?php echo $link->url("iboss")."?id=23";?>">Control de Trafico Web</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=24";?>">Protección de Amenazas</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=25";?>">Administración de Directorios</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=26";?>">Distribución Enterprise</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=27";?>">Programación en Calendario</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=28";?>">Umbral de Alertas</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=29";?>">Filtrado por Mac Address</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=30";?>">Filtrado Móvil</a></li>
        </ul>

        <!--Segundo nivel iboss (Reportes Y Logs)-->
        <ul id='reportes' class='dropdown-content'>
            <li><a href="<?php echo $link->url("iboss")."?id=31";?>">Administración y Reportes de Logs</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=32";?>">Amenazas en Vivo</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=33";?>">Consumo de Ancho de Banda</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=34";?>">Programación de Reportes</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=35";?>">Respaldo en la Nube</a></li>
        </ul>

        <!--Segundo nivel iboss (Gestión De Ancho De Banda)-->
        <ul id='gestion' class='dropdown-content'>
            <li><a href="<?php echo $link->url("iboss")."?id=36";?>">Ancho de Banda Inteligente</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=37";?>">Ancho de Banda Mejorado</a></li>
        </ul>

        <!--Segundo nivel iboss (Monitoreo De Escritorio)-->
        <ul id='monitoreo' class='dropdown-content'>
            <li><a href="<?php echo $link->url("iboss")."?id=38";?>">Grabación de Escritorios</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=39";?>">Multivista en Vivo</a></li>
        </ul>

        <!--Segundo nivel iboss (Integración)-->
        <ul id='integracion' class='dropdown-content'>
            <li><a href="<?php echo $link->url("iboss")."?id=40";?>">Actualización Base de Datos</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=41";?>">Administración Delegada</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=42";?>">Integración Directorio Activo</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=43";?>">E-Directory</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=44";?>">Integración con Proxy</a></li>
            <li><a href="<?php echo $link->url("iboss")."?id=45";?>">Diagramas de Red</a></li>
        </ul>
        <!--Fin Segundo nivel iboss -->
        <!--Fin Primer nivel iboss -->

        <!--1 nivel varonis -->
        <ul id='varonis' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='#' data-activates='Auditoría' data-hover="hover" data-alignment="left">Auditoría de datos y Protección<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='Gobierno' data-hover="hover" data-alignment="left">Gobierno del acceso de datos<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='Sincronización' data-hover="hover" data-alignment="left">Sincronización de archivos empresariales y compartidos<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='Descubrimiento' data-hover="hover" data-alignment="left">Descubrimiento y búsqueda empresarial<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='Retención' data-hover="hover" data-alignment="left">Retención y migración de datos<i class="material-icons right">keyboard_arrow_right</i></a></li>
        </ul>
        <!--fin 1 nivel varonis -->

        <!--2 nivel productos varonis-->
        <ul id='Auditoría' class='dropdown-content'>
            <li><a href="<?php echo $link->url("varonis")."?id=46";?>">DatAdvantage</a></li>
            <li><a href="<?php echo $link->url("varonis")."?id=47";?>">DatAlert</a></li>
            <li><a href="<?php echo $link->url("varonis")."?id=48";?>">IDU Classification Framework</a></li>
        </ul>
        <ul id='Gobierno' class='dropdown-content'>
            <li><a href="<?php echo $link->url("varonis")."?id=49";?>">DataPrivilege</a></li>
        </ul>
        <ul id='Sincronización' class='dropdown-content'>
            <li><a href="<?php echo $link->url("varonis")."?id=50";?>">DatAnywhere</a></li>
        </ul>
        <ul id='Descubrimiento' class='dropdown-content'>
            <li><a href="<?php echo $link->url("varonis")."?id=51";?>">DatAnswers</a></li>
        </ul>
        <ul id='Retención' class='dropdown-content'>
            <li><a href="<?php echo $link->url("varonis")."?id=52";?>">Data Transport Engine</a></li>
        </ul>
        <!--Fin 2 nivel productos varonis-->

        <ul class="right hide-on-med-and-down">
            <li><a href="<?= $link->url("inicio")?>">Inicio</a></li>
            <li><a class="dropdown-button" href="#" data-activates="productos">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="ser-servicio">Servicios<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="nue-cliente">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
            <!--<li><a href="<?php //echo$link->url("licencia") ?>">Licencias</a></li>-->
            <li><a href="<?= $link->url("pago") ?>">Pagos</a></li>
            <li><a href="<?= $link->url("contactar")?>">Contactenos</a></li>
            <li><a href="<?=$link->url("inicio")?>noticias/">Noticias</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav black-text text-darken-2">
            <!-- imagen -->
            <div class="col s12 m7 center">
                <span>Global Invesment Solutions S.A.C</span>
                <div class="card horizontal-center">
                    <?php echo "<a href='".$link->url("inicio")."'><img src='".$link->url("img")."gis-sac-2.png' width='100px' height='100px'></a>"; ?>
                </div>
            </div>
            <!-- fin dela imagen -->
            <ul class="collapsible" data-collapsible="accordion">
                <li class="divider"></li>
                <div class="collapsible-header">Productos</div>
                <li>
                    <div class="collapsible-header"><i class="material-icons">remove_from_queue</i>Solarwinds</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Redes</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=1";?>">Network Performance Monitor</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=2";?>">Netflow Traffic Analyzer</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=3";?>">Network Configuration Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=4";?>">Ip Address Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=5";?>">User Device Tracker</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=6";?>">Voip &amp; Network Quality Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=7";?>">Engineer's Toolset</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=8";?>">Network Topology Mapper</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=9";?>">Log &amp; Event Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=10";?>">Kiwi CatTools</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=11";?>">Kiwi Syslog Server</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Sistemas</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=12";?>">Server &amp; Application Monitor</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=13";?>">Virtualization Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=14";?>">Storage Resource Monitor</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=15";?>">Web Performance Monitor</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Seguridad de Ti</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=16";?>">Patch Manager</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=17";?>">Serv-U MFT Server</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Servicio de Ayuda de Ti</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=18";?>">Web Help Desk</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=19";?>">Dameware Remote Support</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=20";?>">Dameware Mini Remote Control</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=21";?>">Mobile Admin</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Bases de Datos</a></li>
                            <li><a href="<?php echo $link->url("solarwinds")."?id=22";?>">Database Performance Analyzer</a></li>
                        </ul>
                    </div>
                </li>
                <!--Iboss menu-->
                <!--<li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Iboss</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Contenido Web</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=23";?>">Control de Trafico Web</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=24";?>">Protección de Amenazas</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=25";?>">Administración de Directorios</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=26";?>">Distribución Enterprise</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=27";?>">Programación en Calendario</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=28";?>">Umbral de Alertas</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=29";?>">Filtrado por Mac Address</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=30";?>">Filtrado Móvil</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Reportes Y Logs</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=31";?>">Administración y Reportes de Logs</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=32";?>">Amenazas en Vivo</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=33";?>">Consumo de Ancho de Banda</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=34";?>">Programación de Reportes</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=35";?>">Respaldo en la Nube</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Gestión De Ancho De Banda</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=36";?>">Ancho de Banda Inteligente</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=37";?>">Ancho de Banda Mejorado</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Monitoreo De Escritorio</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=38";?>">Grabación de Escritorios</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=39";?>">Multivista en Vivo</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Integración</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=40";?>">Actualización Base de Datos</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=41";?>">Administración Delegada</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=42";?>">Integración Directorio Activo</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=43";?>">E-Directory</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=44";?>">Integración con Proxy</a></li>
                            <li><a href="<?php echo $link->url("iboss")."?id=45";?>">Diagramas de Red</a></li>
                        </ul>
                    </div>
                </li>-->
                <!--Varonis menu-->
                <!--<li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Varonis</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Auditoría de datos y Protección</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=46";?>">DatAdvantage</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=47";?>">DatAlert</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=48";?>">IDU Classification Framework</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Gobierno del acceso de datos</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=49";?>">DataPrivilege</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Sincronización de archivos</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=50";?>">DatAnywhere</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Descubrimiento y búsqueda</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=51";?>">DatAnswers</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Retención y migración de datos</a></li>
                            <li><a href="<?php echo $link->url("varonis")."?id=52";?>">Data Transport Engine</a></li>
                        </ul>
                    </div>
                </li>-->
                <li class="divider"></li>
                <div class="collapsible-header">Servicios</div>
                <li>
                    <div class="collapsible-header"><i class="material-icons">settings</i>Soporte</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("soporte-solarwinds")?>" class="">Soporte Solarwinds</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Mantenimiento</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("poliza-mantenimiento")?>" class="">Poliza Mantenimiento</a></li>
                        </ul>
                    </div>
                </li>
                <li class="divider"></li>
                <div class="collapsible-header">Clientes</div>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Solarwinds</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("cliente")."cliente-solarwinds/index.php?pais=peru"?>" class="">Perú</a></li>
                            <li><a href="<?= $link->url("cliente")."cliente-solarwinds/index.php?pais=ecuador"?>" class="">Ecuador</a></li>
                            <li><a href="<?= $link->url("cliente")."cliente-solarwinds/index.php?pais=bolivia"?>" class="">Bolivia</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Iboss</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("cliente")."cliente-iboss/?pais=peru"?>" class="">Perú</a></li>
                        </ul>
                    </div>
                </li>
                <li class="divider"></li>
                <div class="collapsible-header">Pagos</div>
                <li>
                    <div class="collapsible-header"><i class="material-icons">monetization_on</i>Pagos</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("pago") ?>" class="">Pagos</a></li>
                        </ul>
                    </div>
                </li>    
                <li class="divider"></li>
                <div class="collapsible-header">Contactenos</div>
                <li>
                    <div class="collapsible-header"><i class="material-icons">contact_mail</i>Nosotros</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= $link->url("contactar")?>" class="">Contactenos</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>