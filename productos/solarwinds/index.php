<?php 
    require_once ('../../modelo/Conexion.php');
    require_once ('../../modelo/Modulo.php');
    require_once ('../../modelo/urlIndex.php');

    $link = new urlIndex();
    $modulo = new Modulo();
    
    $id = $_GET['id'];
    
    $datosModulo = $modulo->getSolarwinds($id);
    
    $id;

    $nota = "Al adicionar más módulos al demo, también deberá añadir más recursos, para mayor información ";
    $marcaFull;
    $moduloFull;
    $moduloShort;
    $subTitulo;

    $moduloSo;
    $moduloRam;
    $moduloDiscoDuro;
    $moduloProcesador;
    $moduloBaseDatos;
    $moduloServerWeb;
    $moduloFrameNet;
    $key_modulo;

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
        $moduloSo = $datosModulo['moduloSo'];
        $moduloRam = $datosModulo['moduloRam'];
        $moduloDiscoDuro = $datosModulo['moduloDiscoDuro'];
        $moduloProcesador = $datosModulo['moduloProcesador'];
        $moduloBaseDatos = $datosModulo['moduloBaseDatos'];
        $moduloServerWeb = $datosModulo['moduloServerWeb'];
        $moduloFrameNet = $datosModulo['moduloFrameNet'];
        $video = $datosModulo['video'];
        $periodo = $datosModulo['periodo'];

        //descripcion de cada modulo
        $key_modulo = $datosModulo['key_modulo'];
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


        <link rel="stylesheet" type="text/css" href="../../css/slicebox.css" />
        <link rel="stylesheet" type="text/css" href="../../css/custom.css" />
        <script type="text/javascript" src="../../js/modernizr.custom.46884.js"></script>
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
            $('ul.tabs').tabs();
        });
        (function ($) {
            $(function () {
                $('.slider').slider();
            });
        })(jQuery);
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
       .circles-list ol > li:before {
           position: absolute;
           top: -0.5em;
           font-family: "Roboto", sans-serif;
           font-weight: 600;
           font-size: 1em;
           left: -3.75em;
           width: 2.25em;
           height: 2.25em;
           line-height: 2.25em;
           text-align: center;
           z-index: 9;
           color: #ff9800;
           border: 2px solid #ff9800;
           border-radius: 50%;
           content: counter(li-counter);
           background-color: #eeeeee;
           counter-increment: li-counter;
       }
       .circles-list ol {
           list-style-type: none;
           margin-left: 1.25em;
           padding-left: 2.5em;
           counter-reset: li-counter;
           border-left: 1px solid #ff9800;
           position: relative;
       }
       .circles-list ol > li {
           position: relative;
           margin-bottom: 2.125em;
           clear: both;
       }
    </style>
      
  <!--Toda la modificacion -->
  <?php include("../../componentes/menu.php");?>
  <!--Toda la modificacion -->


              <div class="container center">
                  <h2 class="header center orange-text text-orange"><?php echo $moduloFull;?></h2>
                  <div class="row">
                      <div class="col m12">
                          <div class="left-align" style="padding: 25px 10px 50px 10px;">
                              <h5 class="header col s12 light"><?php echo $subTitulo;?></h5>
                          </div>
                          <div class="right-align" style="padding: 70px 10px 50px 10px;">
                              <br>
                              <p>
                                  <b>Precio referencial desde: <?php $precio = "S/. 17,900"; echo $precio;?></b>
                                  <i class="material-icons small">trending_flat</i> <a href="#"><i class="material-icons medium grey-text">assignment</i></a>
                              </p>
                              <br>

                          </div>
                          <a href="http://oriondemo.solarwinds.com/Orion/Login.aspx?ReturnUrl=%2f" id="download-button" class="z-depth-3 btn-large waves-effect waves-light orange lighten-1 tooltipped scale-transition right" data-position="right" data-delay="50" data-tooltip="Demostracion en vivo">Demo en vivo</a>
                          <a href="<?php echo $downSolar;?>" id="download-button" class="z-depth-3 btn-large waves-effect waves-light orange lighten-1 tooltipped scale-transition right" data-position="left" data-delay="50" data-tooltip="Totalmente funcional por <?php echo $periodo;?> días">Descargar</a>
                      </div>
                      <!--<div class="col m6 right-align">
                          <br>
                          <br>
                          <iframe class="vidyard_iframe" src="<?php echo $video;?>" width="500px" height="300px" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
                      </div>-->
                  </div>
              </div>


      <div class="container">
          <div class="section">
              <div class="row">
                  <div class="col s12">
                      <ul class="tabs grey darken-2">
                          <li class="tab"><a href="#test1" class="active orange-text">Sobre <?php echo $moduloShort;?></a></li>
                          <li class="tab"><a href="#test2" class="orange-text">Caracteristicas</a></li>
                          <li class="tab"><a href="#test3" class="orange-text">Requisitos</a></li>
                          <li class="tab"><a href="#test4" class="orange-text">Videos</a></li>
                          <li class="tab"><a href="#test5" class="orange-text">Hoja de datos</a></li>
                      </ul>
                  </div>
                  <div id="test1" class="col s12">
                      <!--Toda la modificacion de contenido-->
                      <div class="row">
                          <div class="col s12 m12 center">
                              <h2 class="header center orange-text text-orange"><?php echo $moduloShort;?></h2>
                              <h5 class="header center orange-text text-orange"><?php echo "(".$moduloCat.")";?></h5>
                              <img class="right" src="img/solarpartner.png" alt="Marca">
                          </div>
                      </div>
                      <?php
                      if($key_modulo != null){
                          $claves = explode("-", $key_modulo);
                      }else{
                          $claves = array("llene la tabla .... < key_modulo >");
                      }
                      ?>
                      <?php
                      $path = strtolower($moduloShort."/".$moduloShort.".php");
                      include ($path);?>
                      <!--Toda la modificacion de contenido-->

                  </div>
                  <div id="test2" class="col s12">
                      <div class="row">

                          <?php
                          $cTit = array(
                              "Simplicidad nunca vista",
                              "Completamente escalable",
                              "Lo que necesita, cuando lo necesite",
                              "Diseñado por profesionales de TI, para profesionales de TI");
                          $cCon = array(
                              "Monitor de red potente e intuitivo, para que pueda empezar a solucionar los problemas sin demoras",
                              "El monitoreo de red listo para usar se adapta para gestionar el crecimiento de su organización hoy y en el futuro",
                              "Diseñe NPM según sus necesidades con compatibilidad con varios proveedores, paneles personalizables, vistas y cuadros",
                              "Hemos trabajado como ingenieros de sistemas y redes, por lo que comprendemos sus problemas y sabemos cómo resolverlos");
                          for($x = 0; $x < 4; $x++){?>
                              <div class="col s12 m6">
                                  <div class="card blue-grey darken-1">
                                      <div class="card-content white-text">
                                          <span class="card-title"><?php echo $cTit[$x];?></span>
                                          <p><?php echo $cCon[$x];?></p>
                                      </div>
                                      <div class="card-action">

                                      </div>
                                  </div>
                              </div>
                          <?php }?>
                      </div>
                  </div>
                  <div id="test3" class="col s12">
                      <!-------->
                      <table class="highlight">
                          <thead>
                          <tr>
                              <th colspan="2"><h5>Hardware y Software para una demo</h5></th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php if($moduloSo != null){?>
                              <tr>
                                  <td><img src="img/so1.png" alt="Sistema Operativo"></td>
                                  <td><?php echo $moduloSo;?></td>
                              </tr>
                          <?php }if($moduloRam != null){?>
                              <tr>
                                  <td><img src="img/ram1.png" alt=""></td>
                                  <td><?php echo $moduloRam;?></td>
                              </tr>
                          <?php }if($moduloDiscoDuro != null){?>
                              <tr>
                                  <td><img src="img/disco1.png" alt=""></td>
                                  <td><?php echo $moduloDiscoDuro;?></td>
                              </tr>
                          <?php }if($moduloProcesador != null){?>
                              <tr>
                                  <td><img src="img/procesador1.png" alt=""></td>
                                  <td><?php echo $moduloProcesador;?></td>
                              </tr>
                          <?php }if($moduloBaseDatos != null){?>
                              <tr>
                                  <td><img src="img/base1.png" alt=""></td>
                                  <td><?php echo $moduloBaseDatos;?></td>
                              </tr>
                          <?php }if($moduloServerWeb != null){?>
                              <tr>
                                  <td><img src="img/web1.png" alt=""></td>
                                  <td><?php echo $moduloServerWeb;?></td>
                              </tr>
                          <?php }if($moduloFrameNet != null){?>
                              <tr>
                                  <td><img src="img/net1.png" alt=""></td>
                                  <td><?php echo $moduloFrameNet;?></td>
                              </tr>
                          <?php }//else{?>
                              <!--<tr>
                                  <td><img src="img/peligro.png" alt=""></td>
                                  <td>Actualizando requerimientos</td>
                              </tr>-->
                          <?php //}?>
                          </tbody>
                      </table>
                      <p><b>Nota: </b><?php echo $nota;?><a href="http://clientes.gis-sac.com">contáctenos</a></p>
                      <!-------->
                  </div>
                  <div id="test4" class="col s12">
                      <!--Toda la modificacion de contenido-->
                      <div class="card sticky-action col s12 m6 z-depth-3">
                          <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Video 1</span>
                              <iframe class="vidyard_iframe" src="<?php echo $video;?>" width="100%" height="300px" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
                          </div>
                      </div>
                      <!--Toda la modificacion de contenido-->

                  </div>
                  <div id="test5" class="col s12">
                      <div class="col s12 m12 center">
                          <br>
                          <iframe src="http://192.168.1.10/web/pdf/web/viewer.html?file=http://192.168.1.10/web/productos/solarwinds/npm/pdf/npm_datasheet.pdf" width="100%" height="600px"></iframe>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="parallax-container">
          <div class="section no-pad-bot">
              <div class="container">
                  <div class="section">
                      <div class="row">
                          <div class="col s12 m3">
                              <div class="card blue-grey darken-1">
                                  <div class="card-content white-text">
                                      <span class="card-title">Ejemplo 1</span>
                                      <p>Reduzca las interrupciones de la red y detecte, diagnostique y
                                          resuelva rápidamente los problemas de desempeño de la red de
                                          múltiples proveedores con software de monitoreo de redes fácil
                                          de usar y económico.</p>
                                  </div>
                                  <div class="card-action">

                                  </div>
                              </div>
                          </div>
                          <div class="col s12 m9">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="parallax"><img src="../../img/dos.jpg" alt="Unsplashed background img 2"></div>
      </div>
      <div class="container">
          <div class="section">

              <div class="row">
                  <div class="col s12 center">
                      <h4><i class="mdi-content-send brown-text"></i>Necesita más información</h4>
                      <p class="left-align">Para conocer mas sobre la herramienta, puedes contactarnos o escribinos, con gusto te brindaremos toda la informacion que necesitas.</p>
                      <a href="http://www.gis-sac.com/contactar/formulario.html" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Contactar</a>
                  </div>
              </div>

          </div>
      </div>
    <?php include("../../componentes/pie.php");?>

    </body>
</html>