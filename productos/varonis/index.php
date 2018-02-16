<?php 
    require_once ('../../modelo/Conexion.php');
    require_once ('../../modelo/Modulo.php');
    require_once ('../../modelo/urlIndex.php');

    $link = new urlIndex();

    $modulo = new Modulo();
    
    $id = $_GET['id'];
    
    $datosModulo = $modulo->getModulo($id);
    
    $id;
    $urlSolar = "http://192.168.1.13/Portal/productos/solarwinds/index.php";
    $urlIboss = "http://192.168.1.13/Portal/productos/iboss/index.php";
    $urlVaron = "http://192.168.1.13/Portal/productos/varonis/index.php";
    //$nota = "Al adicionar más módulos al demo, también deberá añadir más recursos, para mayor información ";
    $marcaFull;
    $moduloFull;
    $moduloShort;
    $subTitulo;

    /*$moduloSo;
    $moduloRam;
    $moduloDiscoDuro;
    $moduloProcesador;
    $moduloBaseDatos;
    $moduloServerWeb;
    $moduloFrameNet;*/

    if($datosModulo){
        //caracteristicas de cada modulo
        $id = $datosModulo['id'];
        $marcaFull = $datosModulo['marcaFull'];
        $moduloCat = $datosModulo['moduloCat'];
        $moduloFull = $datosModulo['moduloFull'];
        $moduloShort = $datosModulo['moduloShort'];
        $subTitulo = $datosModulo['subTitulo'];
        $downSolar = $datosModulo['downSolar'];
        
        //requerimientos por modulo
        /*$moduloSo = $datosModulo['moduloSo'];
        $moduloRam = $datosModulo['moduloRam'];
        $moduloDiscoDuro = $datosModulo['moduloDiscoDuro'];
        $moduloProcesador = $datosModulo['moduloProcesador'];
        $moduloBaseDatos = $datosModulo['moduloBaseDatos'];
        $moduloServerWeb = $datosModulo['moduloServerWeb'];
        $moduloFrameNet = $datosModulo['moduloFrameNet'];*/
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

      <title><?php echo $marcaFull." - ".$moduloFull;?></title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../js/materialize.min.js"></script>
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
    </style>
      
  <!--Toda la modificacion -->
  <?php include("../../componentes/menu.php");?>
  <!--Toda la modificacion -->
        
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br>
        <h2 class="header center orange-text text-orange"><?php echo $moduloFull;?></h2>
        
        <div class="row center">
          <h5 class="header col s12 light white-text"><?php if($subTitulo != null){echo $subTitulo;}?></h5>
        </div>
        <div class="row center">
          <a href="http://oriondemo.solarwinds.com/Orion/Login.aspx?ReturnUrl=%2f" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Demo en vivo</a>
        </div>
        <br>

      </div>
    </div>
    <div class="parallax"><img src="../../img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>
   
   <div class="container">
    <div class="section">
        <!--Toda la modificacion de contenido-->
        <div class="row">
            <div class="col s12 center">
                <h2 class="header center orange-text text-orange"><?php echo $moduloShort;?></h2>
                <h5 class="header center orange-text text-orange"><?php echo "(".$moduloCat.")";?></h5>
            </div>
        </div>
        <?php 
        $path = strtolower($moduloShort."/".$moduloShort.".php");
        include ($path);?>
        <!--Toda la modificacion de contenido-->
    </div>
  </div>


  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="section">
          <div class="row center">
            <!--   Icon imagenes   -->
            <div class="carousel carousel-slider">
            <?php 
              for($a = 1; $a < 5; $a++){
                  $path2 = strtolower($moduloShort."/".$moduloShort."-".$a.".png");
            ?>
                <a class="carousel-item"><img src="<?php echo $path2;?>"></a>
            <?php } ?>
            </div>
          </div><!--  Icon imagenes  -->
        </div>
      </div>
    </div>
    
    <div class="parallax"><img src="../../img/fondo.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Necesita más información</h4>
          <p class="left-align light">Para conocer mas sobre la herramienta, puedes contactarnos o escribinos, con gusto te brindaremos toda la informacion que necesitas.</p>
          <a href="http://www.gis-sac.com/contactar/formulario.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Contactar</a>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Pruebalo ahora totalmente funcional por 30 días</h5>
        </div>
        <div class="row center">
          <a href="<?php echo $downSolar;?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Descargar demo</a>
            
          <a href="#requisitos" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 modal-trigger">Requerimientos</a>

        </div>
      </div>
    </div>
    <div class="parallax"><img src="../../img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

    <?php include("../../componentes/pie.php");?>
    
    </body>
</html>