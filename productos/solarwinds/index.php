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

    $downSolar = "";

    $moduloSo;
    $moduloRam;
    $moduloDiscoDuro;
    $moduloProcesador;
    $moduloBaseDatos;
    $moduloServerWeb;
    $moduloFrameNet;
    $key_modulo;
    $moduloPrecio;

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
        $moduloPrecio = $datosModulo['moduloPrecio'];
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
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>

    <!--Diceño-->
    <script type="text/javascript" src="../../js/jquery.scrollbox.min.js">

    </script>
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
            $('.modal').modal({
                dismissible: false,
                startingTop: '100%', // Starting top style attribute
                endingTop: '30%' // Ending top style attribute
            });
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

            $('#key-fun').scrollbox({
                switchItems: 1,
                distance: 142
            });
        });

        function back() {
            $('#btn-back').click(function () {
                $('#key-fun').trigger('backward');
            });
        }
        function next() {
            $('#btn-next').click(function () {
                $('#key-fun').trigger('forward');
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

        #back, #next{
            /*height: 400px;*/
            /*margin-top: 200px;*/
        }
        .scroll-img {
            width: 100%;
            height: 400px;
            overflow: hidden;
            font-size: 0;
        }
        .scroll-img ul {
            width: 100%;
            height: auto;
            margin: 0;
        }
        .scroll-img ul li {
            display: inline-block;
            /*margin: 10px 0 10px 10px;*/
        }
        #key-fun.scroll-img ul {
            width: 1500px;
        }
        #imagen{
            width: 60%;
        }

    </style>

</head>

<body>

  <!--Toda la modificacion -->
  <?php include("../../componentes/menu.php");?>
  <!--Toda la modificacion -->

  <div class="container center">
      <h2 class="header center orange-text text-orange"><?= $moduloFull?></h2>
      <div class="row">
          <div class="col m12">
              <div class="left-align" style="padding: 25px 10px 50px 10px;">
                  <h5 class="header col s12 light"><?= $subTitulo?></h5>
              </div>
              <div class="right-align" style="padding: 70px 10px 50px 10px;">
                  <br>
                  <p>
                      <b>Precio referencial desde: S/. <?= $moduloPrecio?></b><i class="material-icons small">trending_flat</i> <a class="pulse btn green tooltipped" data-position="right" data-delay="50" data-tooltip="Cotizar <?= $moduloShort?>" href="<?=$link->url("contactar")?>"><i class="material-icons medium white-text">assignment</i></a>
                  </p>
                  <br>

              </div>
              <div class="col right">
                  <a target="_blank" href="http://oriondemo.solarwinds.com/Orion/Login.aspx?ReturnUrl=%2f" id="download-button" class="pulse z-depth-3 btn-large waves-effect waves-light orange lighten-1 tooltipped scale-transition right" data-position="right" data-delay="50" data-tooltip="Demostracion en vivo">Demo en vivo</a>
              </div>
              <div class="col right">
                  <a href="#descargar" class="btn-large orange lighten-1 waves-effect waves-light pulse z-depth-3 tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Totalmente funcional por <?php echo $periodo;?> días">Descargar</a>
                  <!--<a href="<?= $downSolar;?>" id="download-button" class="pulse z-depth-3 btn-large waves-effect waves-light orange lighten-1 tooltipped scale-transition right" data-position="left" data-delay="50" data-tooltip="Totalmente funcional por <?php echo $periodo;?> días">Descargar</a>-->

                  <div id="descargar" class="modal orange lighten-5">
                      <form method="post">
                          <div class="modal-content">
                              <div class="row">
                                  <h5>Descargar <?= $moduloShort;?> totalmente funcional por <?php echo $periodo;?> días</h5>
                                  <div class="input-field col s12 m6">
                                      <i class="material-icons prefix orange-text left">account_circle</i>
                                      <input class="input-field" name="name" id="name" type="text">
                                      <label for="name">Nombre y Apellido</label>
                                  </div>
                                  <div class="input-field col s12 m6">
                                      <i class="material-icons prefix orange-text left">phone</i>
                                      <input class="input-field" name="number" id="number" type="number">
                                      <label for="name">Numero</label>
                                  </div>
                                  <div class="input-field col s12 m6">
                                      <i class="material-icons prefix orange-text left">email</i>
                                      <input class="input-field" name="email" id="email" type="email">
                                      <label for="email">Correo</label>
                                  </div>
                                  <div class="input-field col s12 m6">
                                      <i class="material-icons prefix orange-text left">map</i>
                                      <input class="input-field" name="country" id="country" type="text">
                                      <label for="country">País</label>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer orange lighten-5">
                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="container">
      <div class="section">
          <div class="row">
              <div class="col s12">
                  <ul class="tabs grey darken-2">
                      <li class="tab"><a href="#test1" class="active orange-text">Sobre <?= $moduloShort;?></a></li>
                      <!--<li class="tab"><a href="#test2" class="orange-text">Caracteristicas</a></li>-->
                      <li class="tab"><a href="#test3" class="orange-text">Requerimiento</a></li>
                      <!--<li class="tab"><a href="#test4" class="orange-text">Hoja de datos</a></li>-->
                  </ul>
              </div>
              <div id="test1" class="col s12">
                  <!--Pagina individual de cada modulo-->
                  <div class="row">
                      <div class="col s12 m12 center">
                          <h2 class="header center orange-text text-orange"><?= $moduloShort;?></h2>
                          <h5 class="header center orange-text text-orange"><?= "(".$moduloCat.")";?></h5>
                          <img class="right" src="img/solarpartner.png" alt="Marca">
                      </div>
                  </div>
                  <?php
                  if($key_modulo != null){
                      $claves = explode("-", $key_modulo);
                  }else{
                      $claves = array("No se a podido obtener la información");
                  }
                  ?>
                  <?php $path = strtolower($moduloShort."/".$moduloShort.".php");
                  include ($path);?>
                  <div class="col s12 m6">
                      <h5 class="black-text">Principales características:</h5>
                      <br>
                      <div class="circles-list">
                          <ol>
                              <?php for($x = 0; $x < sizeof($claves); $x++){
                                  echo "<li><b>".$claves[$x].".</b></li>";
                              }?>
                          </ol>
                      </div>
                  </div>
                  <div class="col s12 m6">
                      <br>
                      <iframe class="vidyard_iframe" src="<?= $video;?>" width="100%" height="300px" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen></iframe>
                  </div>
              </div>
              <!--<div id="test2" class="col s12">

              </div>-->
              <div id="test3" class="col s12">
                  <!-------->
                  <table class="highlight">
                      <thead>
                      <tr>
                          <th colspan="2"><h5>Requerimiento de hardware y software usados por <?=$moduloShort?></h5></th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php if($moduloSo != null){?>
                          <tr>
                              <td><img src="img/so1.png" alt="Sistema Operativo"></td>
                              <td><?= $moduloSo?></td>
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
                      <?php }?>
                      </tbody>
                  </table>
                  <p><b>Nota: </b><?php echo $nota;?><a href="http://clientes.gis-sac.com">contáctenos</a></p>
                  <!-------->
              </div>
              <!--<div id="test4" class="col s12">
                  <div class="col s12 m12 center">
                      <br>
                      <iframe src="http://192.168.1.10/web/pdf/web/viewer.html?file=http://192.168.1.10/web/productos/solarwinds/npm/pdf/npm_datasheet.pdf" width="100%" height="600px"></iframe>
                  </div>
              </div>-->
          </div>
      </div>
  </div>

  <div class="container">
      <div class="section">

          <div class="row">
              <div class="col s12 center">
                  <h4><i class="mdi-content-send brown-text"></i>DATA SHEET</h4>
                  <a id="download-button" class="btn-large waves-effect waves-light orange lighten-1">ver</a>
              </div>
          </div>

      </div>
  </div>

      <div class="container">
          <div class="section">

              <div class="row">
                  <div class="col s12 center">
                      <h4><i class="mdi-content-send brown-text"></i>Necesita más información</h4>
                      <p class="left-align">Para conocer mas sobre la herramienta, puedes contactarnos o escribinos, con gusto te brindaremos toda la informacion que necesitas.</p>
                      <a href="<?=$link->url("contactar")?>" id="download-button" class="btn-large waves-effect waves-light orange lighten-1">Contactar</a>
                  </div>
              </div>

          </div>
      </div>
    <?php include("../../componentes/pie.php");?>

    </body>
</html>