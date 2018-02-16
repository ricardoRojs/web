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
                    "<h4>".$print['moduloShort']." - ".$print['moduloFull']."<i class='material-icons right medium'>desktop_windows</i></h4>".
                    "<p><b>Descripción:</b></p>".
                    "<p>".$print['moduloDesc']."</p>".
                    "<br>".
                    "<p><b>Categoria:</b></p>".
                    "<p>".$print['moduloCat']."</p>".
                    "<br>".
                    "<p><b>Modo de lincencia:</b></p>".
                    "<p>".$print['modoLicencia']."</p>".
                    "<br>".
                    "<p><b>Integración:</b></p>";

                //$int = str_replace(",", " - ", $print['integracion']);
                $claves = explode(",", $print['integracion']);
                for ($x = 0; $x < sizeof($claves); $x++){
                    if($claves[$x] == "OC"){
                        echo "<p>".$claves[$x]." - Orion Core</p>";
                    }if($claves[$x] == "CI"){
                        echo "<p>".$claves[$x]." - Integración de la consola Información</p>";
                    }if($claves[$x] == "HI"){
                        echo "<p>".$claves[$x]." - Integración híbrida</p>";
                    }if($claves[$x] == "AS"){
                        echo "<p>".$claves[$x]." - Pila de la aplicación</p>";
                    }if($claves[$x] == "CCC"){
                        echo "<p>".$claves[$x]." - Cert. de criterios comunes</p>";
                    }if($claves[$x] == "ODC"){
                        echo "<p>".$claves[$x]." - Otro cert DoD</p>";
                    }
                }
                echo "<br>".
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