<style>
    nav {
        /*background-color: #7db557;*/
        background-color: #2196f3;


    }
    nav .nav-background{
        height: 350px;
        top: 0;
        opacity: .3;
        bottom: 0;
        -webkit-transform: none;
        transform: none;
        background-repeat: repeat;
        <?php if($id == 602){
            echo "background-image: url('img/new.png') !important;";
        }else{
            echo "background-image: url('../../img/new.png') !important;";
        }?>
        /*background-image: url("../../img/new.png") !important;*/
    }
    #conte{
        position: absolute;
        top: 10px;
        right: 1%;
        left: 1%;
    }
    #titulo{
        position: absolute;
        top: 25%;
        right: 1%;
        left: 1%;
    }

</style>
<nav class="nav-extended">
    <div class="nav-background">
        <div class="nav-background" id="fondo"></div>
    </div>
    <div class="nav-wrapper container" id="conte">
        <!--<img src="img/gis-sac-2.png" alt="Logo" height="60px" width="60px"/>-->
        <?php
        if($id == 602){
            echo "<img src='img/gis-sac-2.png' alt='' height='60px' width='60p'/>";
        }else{
            echo "<img src='img/gis-sac-2.png' alt='' height='60px' width='60p'/>";
        }
        ?>
        <a href="/" itemprop="url" class="brand-logo site-logo">GIS SAC</a>

        <ul id='productos' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='#' data-activates='solarwinds' data-hover="hover" data-alignment="left">Solarwinds<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='iboss' data-hover="hover" data-alignment="left">Iboss<i class="material-icons right">keyboard_arrow_right</i></a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='varonis' data-hover="hover" data-alignment="left">Varonis<i class="material-icons right">keyboard_arrow_right</i></a></li>
        </ul>

        <ul id='ser-servicio' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='<?php echo $urlServi."soporte-solarwinds/index.php"?>' data-activates='soporte-so' data-hover="hover" data-alignment="left">Soporte Solarwinds</a></li>
            <li><a class='dropdown-button2 d' href='#' data-activates='poliza-so' data-hover="hover" data-alignment="left">Poliza de Mantenimiento</a></li>
        </ul>

        <ul id='nue-cliente' class='dropdown-content'>
            <li><a class='dropdown-button2 d' href='<?php echo $urlClien."cliente-solarwinds/index.php"?>' data-activates='soporte-so' data-hover="hover" data-alignment="left">Clientes Solarwinds</a></li>
            <li><a class='dropdown-button2 d' href='<?php echo $urlClien."cliente-iboss/index.php"?>' data-activates='poliza-so' data-hover="hover" data-alignment="left">Clientes Iboss</a></li>
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
            <li><a href="<?php echo $urlSolar."?id=1";?>">Network Performance Monitor</a></li>
            <li><a href="<?php echo $urlSolar."?id=2";?>">Netflow Traffic Analyzer</a></li>
            <li><a href="<?php echo $urlSolar."?id=3";?>">Network Configuration Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=4";?>">Ip Address Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=5";?>">User Device Tracker</a></li>
            <li><a href="<?php echo $urlSolar."?id=6";?>">Voip &amp; Network Quality Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=7";?>">Log &amp; Event Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=8";?>">Engineer's Toolset</a></li>
            <li><a href="<?php echo $urlSolar."?id=9";?>">Network Topology Mapper</a></li>
            <li><a href="<?php echo $urlSolar."?id=10";?>">Kiwi CatTools</a></li>
            <li><a href="<?php echo $urlSolar."?id=11";?>">Kiwi Syslog Server</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Administración de Sistemas)-->
        <ul id='sistemas' class='dropdown-content'>
            <li><a href="<?php echo $urlSolar."?id=12";?>">Server &amp; Application Monitor</a></li>
            <li><a href="<?php echo $urlSolar."?id=13";?>">Virtualization Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=14";?>">Storage Resource Monitor</a></li>
            <li><a href="<?php echo $urlSolar."?id=15";?>">Web Performance Monitor</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Seguridad de Ti)-->
        <ul id='seguridad' class='dropdown-content'>
            <li><a href="<?php echo $urlSolar."?id=16";?>">Patch Manager</a></li>
            <li><a href="<?php echo $urlSolar."?id=17";?>">Serv-U MFT Server</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Servicio de Ayuda de Ti)-->
        <ul id='servicio' class='dropdown-content'>
            <li><a href="<?php echo $urlSolar."?id=18";?>">Web Help Desk</a></li>
            <li><a href="<?php echo $urlSolar."?id=19";?>">Dameware Remote Support</a></li>
            <li><a href="<?php echo $urlSolar."?id=20";?>">Dameware Mini Remote Control</a></li>
            <li><a href="<?php echo $urlSolar."?id=21";?>">Mobile Admin</a></li>
        </ul>

        <!--Segundo nivel solarwinds (Administración de Bases de Datos)-->
        <ul id='base' class='dropdown-content'>
            <li><a href="<?php echo $urlSolar."?id=22";?>">Database Performance Analyzer</a></li>
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
            <li><a href="<?php echo $urlIboss."?id=23";?>">Control de Trafico Web</a></li>
            <li><a href="<?php echo $urlIboss."?id=24";?>">Protección de Amenazas</a></li>
            <li><a href="<?php echo $urlIboss."?id=25";?>">Administración de Directorios</a></li>
            <li><a href="<?php echo $urlIboss."?id=26";?>">Distribución Enterprise</a></li>
            <li><a href="<?php echo $urlIboss."?id=27";?>">Programación en Calendario</a></li>
            <li><a href="<?php echo $urlIboss."?id=28";?>">Umbral de Alertas</a></li>
            <li><a href="<?php echo $urlIboss."?id=29";?>">Filtrado por Mac Address</a></li>
            <li><a href="<?php echo $urlIboss."?id=30";?>">Filtrado Móvil</a></li>
        </ul>

        <!--Segundo nivel iboss (Reportes Y Logs)-->
        <ul id='reportes' class='dropdown-content'>
            <li><a href="<?php echo $urlIboss."?id=31";?>">Administración y Reportes de Logs</a></li>
            <li><a href="<?php echo $urlIboss."?id=32";?>">Amenazas en Vivo</a></li>
            <li><a href="<?php echo $urlIboss."?id=33";?>">Consumo de Ancho de Banda</a></li>
            <li><a href="<?php echo $urlIboss."?id=34";?>">Programación de Reportes</a></li>
            <li><a href="<?php echo $urlIboss."?id=35";?>">Respaldo en la Nube</a></li>
        </ul>

        <!--Segundo nivel iboss (Gestión De Ancho De Banda)-->
        <ul id='gestion' class='dropdown-content'>
            <li><a href="<?php echo $urlIboss."?id=36";?>">Ancho de Banda Inteligente</a></li>
            <li><a href="<?php echo $urlIboss."?id=37";?>">Ancho de Banda Mejorado</a></li>
        </ul>

        <!--Segundo nivel iboss (Monitoreo De Escritorio)-->
        <ul id='monitoreo' class='dropdown-content'>
            <li><a href="<?php echo $urlIboss."?id=38";?>">Grabación de Escritorios</a></li>
            <li><a href="<?php echo $urlIboss."?id=39";?>">Multivista en Vivo</a></li>
        </ul>

        <!--Segundo nivel iboss (Integración)-->
        <ul id='integracion' class='dropdown-content'>
            <li><a href="<?php echo $urlIboss."?id=40";?>">Actualización Base de Datos</a></li>
            <li><a href="<?php echo $urlIboss."?id=41";?>">Administración Delegada</a></li>
            <li><a href="<?php echo $urlIboss."?id=42";?>">Integración Directorio Activo</a></li>
            <li><a href="<?php echo $urlIboss."?id=43";?>">E-Directory</a></li>
            <li><a href="<?php echo $urlIboss."?id=44";?>">Integración con Proxy</a></li>
            <li><a href="<?php echo $urlIboss."?id=45";?>">Diagramas de Red</a></li>
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
            <li><a href="<?php echo $urlVaron."?id=46";?>">DatAdvantage</a></li>
            <li><a href="<?php echo $urlVaron."?id=47";?>">DatAlert</a></li>
            <li><a href="<?php echo $urlVaron."?id=48";?>">IDU Classification Framework</a></li>
        </ul>
        <ul id='Gobierno' class='dropdown-content'>
            <li><a href="<?php echo $urlVaron."?id=49";?>">DataPrivilege</a></li>
        </ul>
        <ul id='Sincronización' class='dropdown-content'>
            <li><a href="<?php echo $urlVaron."?id=50";?>">DatAnywhere</a></li>
        </ul>
        <ul id='Descubrimiento' class='dropdown-content'>
            <li><a href="<?php echo $urlVaron."?id=51";?>">DatAnswers</a></li>
        </ul>
        <ul id='Retención' class='dropdown-content'>
            <li><a href="<?php echo $urlVaron."?id=52";?>">Data Transport Engine</a></li>
        </ul>
        <!--Fin 2 nivel productos varonis-->

        <ul class="right hide-on-med-and-down">
            <li><a href="http://192.168.1.10/web/">Inicio</a></li>
            <li><a class="dropdown-button" href="#" data-activates="productos">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="ser-servicio">Servicio<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#" data-activates="nue-cliente">Nuestros Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contacto/index.php">Contactenos</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav black-text text-darken-2">
            <!-- imagen -->
            <div class="col s12 m7 center">
                <span>Global Invesment Solutions S.A.C</span>
                <div class="card horizontal-center">
                    <?php
                    if($id == 602){
                        echo "<a href='index.php'><img src='img/gis-sac-2.png' width='100px' height='100px'></a>";
                    }else{
                        echo "<a href='../../index.php'><img src='../../img/gis-sac-2.png' width='100px' height='100px'></a>";
                    }
                    ?>
                </div>
            </div>
            <!-- fin dela imagen -->
            <ul class="collapsible" data-collapsible="accordion">
                <li class="divider"></li>
                <span>Productos</span>
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Solarwinds</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Redes</a></li>
                            <li><a href="<?php echo $urlSolar."?id=1";?>">Network Performance Monitor</a></li>
                            <li><a href="<?php echo $urlSolar."?id=2";?>">Netflow Traffic Analyzer</a></li>
                            <li><a href="<?php echo $urlSolar."?id=3";?>">Network Configuration Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=4";?>">Ip Address Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=5";?>">User Device Tracker</a></li>
                            <li><a href="<?php echo $urlSolar."?id=6";?>">Voip &amp; Network Quality Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=7";?>">Engineer's Toolset</a></li>
                            <li><a href="<?php echo $urlSolar."?id=8";?>">Network Topology Mapper</a></li>
                            <li><a href="<?php echo $urlSolar."?id=9";?>">Log &amp; Event Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=10";?>">Kiwi CatTools</a></li>
                            <li><a href="<?php echo $urlSolar."?id=11";?>">Kiwi Syslog Server</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Sistemas</a></li>
                            <li><a href="<?php echo $urlSolar."?id=12";?>">Server &amp; Application Monitor</a></li>
                            <li><a href="<?php echo $urlSolar."?id=13";?>">Virtualization Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=14";?>">Storage Resource Monitor</a></li>
                            <li><a href="<?php echo $urlSolar."?id=15";?>">Web Performance Monitor</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Seguridad de Ti</a></li>
                            <li><a href="<?php echo $urlSolar."?id=16";?>">Patch Manager</a></li>
                            <li><a href="<?php echo $urlSolar."?id=17";?>">Serv-U MFT Server</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Servicio de Ayuda de Ti</a></li>
                            <li><a href="<?php echo $urlSolar."?id=18";?>">Web Help Desk</a></li>
                            <li><a href="<?php echo $urlSolar."?id=19";?>">Dameware Remote Support</a></li>
                            <li><a href="<?php echo $urlSolar."?id=20";?>">Dameware Mini Remote Control</a></li>
                            <li><a href="<?php echo $urlSolar."?id=21";?>">Mobile Admin</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Bases de Datos</a></li>
                            <li><a href="<?php echo $urlSolar."?id=22";?>">Database Performance Analyzer</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Iboss</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Administración de Contenido Web</a></li>
                            <li><a href="<?php echo $urlIboss."?id=23";?>">Control de Trafico Web</a></li>
                            <li><a href="<?php echo $urlSolar."?id=24";?>">Protección de Amenazas</a></li>
                            <li><a href="<?php echo $urlSolar."?id=25";?>">Administración de Directorios</a></li>
                            <li><a href="<?php echo $urlSolar."?id=26";?>">Distribución Enterprise</a></li>
                            <li><a href="<?php echo $urlSolar."?id=27";?>">Programación en Calendario</a></li>
                            <li><a href="<?php echo $urlSolar."?id=28";?>">Umbral de Alertas</a></li>
                            <li><a href="<?php echo $urlSolar."?id=29";?>">Filtrado por Mac Address</a></li>
                            <li><a href="<?php echo $urlSolar."?id=30";?>">Filtrado Móvil</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Reportes Y Logs</a></li>
                            <li><a href="<?php echo $urlSolar."?id=31";?>">Administración y Reportes de Logs</a></li>
                            <li><a href="<?php echo $urlSolar."?id=32";?>">Amenazas en Vivo</a></li>
                            <li><a href="<?php echo $urlSolar."?id=33";?>">Consumo de Ancho de Banda</a></li>
                            <li><a href="<?php echo $urlSolar."?id=34";?>">Programación de Reportes</a></li>
                            <li><a href="<?php echo $urlSolar."?id=35";?>">Respaldo en la Nube</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Gestión De Ancho De Banda</a></li>
                            <li><a href="<?php echo $urlSolar."?id=36";?>">Ancho de Banda Inteligente</a></li>
                            <li><a href="<?php echo $urlSolar."?id=37";?>">Ancho de Banda Mejorado</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Monitoreo De Escritorio</a></li>
                            <li><a href="<?php echo $urlSolar."?id=38";?>">Grabación de Escritorios</a></li>
                            <li><a href="<?php echo $urlSolar."?id=39";?>">Multivista en Vivo</a></li>
                            <li><a href="#" class="card-panel orange-text text-darken-2">Integración</a></li>
                            <li><a href="<?php echo $urlSolar."?id=40";?>">Actualización Base de Datos</a></li>
                            <li><a href="<?php echo $urlSolar."?id=41";?>">Administración Delegada</a></li>
                            <li><a href="<?php echo $urlSolar."?id=42";?>">Integración Directorio Activo</a></li>
                            <li><a href="<?php echo $urlSolar."?id=43";?>">E-Directory</a></li>
                            <li><a href="<?php echo $urlSolar."?id=44";?>">Integración con Proxy</a></li>
                            <li><a href="<?php echo $urlSolar."?id=45";?>">Diagramas de Red</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Varonis</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Data</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Ale</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Adat</a></li>
                        </ul>
                    </div>
                </li>
                <li class="divider"></li>
                <span>Servicios</span>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Soporte Solarwinds</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Data</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Ale</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Adat</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Poliza de Mantenimiento</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Data</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Ale</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Adat</a></li>
                        </ul>
                    </div>
                </li>
                <li class="divider"></li>
                <span>Nuestros Clientes</span>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Iboss</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Data</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Ale</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Adat</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Solarwinds</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Data</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Ale</a></li>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Adat</a></li>
                        </ul>
                    </div>
                </li>
                <li class="divider"></li>
                <span>Nuestros Clientes</span>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Nosotros</div>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class=""><i class="material-icons">menu</i>Contactenos</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    <div class="center" id="titulo">
        <h2><?php echo $marcaFull;?></h2>
    </div>
</nav>