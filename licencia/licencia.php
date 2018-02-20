<?php
if (isset($_POST['modulo'])) {

    if (empty($_POST['modulo'])) {

        echo "<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p>" .
            "<p class='center-align'>Escriba el nombre del modulo a buscar</p>";

    } else if (!empty($_POST['modulo'])) {

        require_once('../modelo/Conexion.php');
        require_once('../modelo/Modulo.php');

        $modulo = new Modulo();

        $print = $modulo->getLicencia($_POST['modulo']);


        if ($print != null ) {

                echo"<div class='card-content'>".
                    "<div>".
                    "<h4 class='orange-text'>".$print['moduloShort']." - ".$print['moduloFull']."<i class='material-icons right medium orange-text'>desktop_windows</i></h4>".
                    "<p><b>Descripción:</b></p>".
                    "<p>".$print['moduloDesc']."</p>".
                    "<br>".
                    "<p><b>Categoria:</b></p>".
                    "<p>".$print['moduloCat']."</p>".
                    "<br>".
                    "<p><b>Modo de lincencia:</b></p>".
                    "<p>".$print['modoLicencia']."<a href='../contactar/index.php'> más informacion<i class='material-icons'>arrow_drop_up_circle</i></a></p>".
                    "<br>".
                    "<p><b>Integración:</b></p>";

                //$int = str_replace(",", " - ", $print['integracion']);
                $claves = explode(",", $print['integracion']);
                for ($x = 1; $x < sizeof($claves)+1; $x++){
                    echo "<p>".$x."- ".$claves[$x-1]."</p>";
                }
                echo "<br>".
                    "<p class='right leyenda'><b>OC - Orion Core<br>".
                    "CI - Integración de la consola Información<br>".
                    "HI - Integración híbrida<br>".
                    "AS - Pila de la aplicación<br>".
                    "CCC - Cert. de criterios comunes<br>".
                    "ODC - Otro cert DoD</b></p>".
                    "<br><br>".
                    "</div>".
                    "</div>".
                    "<div class='card-content'>".
                    "<h6 class='card-title activator grey-text text-darken-4'>Requerimientos<i class='material-icons right'>arrow_drop_down_circle</i></h6>".
                    "</div>".
                    "<div class='card-reveal'>".
                    "<span class='card-title grey-text text-darken-4'><i class='material-icons right'>close</i></span>".

                    "</div>";
        } else{
            echo "no hay datos....";
        }
    }
}