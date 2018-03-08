<?php

if (isset($_POST['producto']) && isset($_POST['motivo']) && isset($_POST['empresa']) && isset($_POST['nombre']) && isset($_POST['apellido'])
    && isset($_POST['correo']) && isset($_POST['celular']) && isset($_POST['pais']) && isset($_POST['ciudad']) && isset($_POST['mensaje'])) {

    if (empty($_POST['producto']) || empty($_POST['motivo']) || empty($_POST['empresa']) || empty($_POST['nombre']) || empty($_POST['apellido'])
        || empty($_POST['correo']) || empty($_POST['celular']) || empty($_POST['pais']) || empty($_POST['ciudad']) || empty($_POST['mensaje'])) {

        echo "<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p>" .
            "<p class='center-align'>Los campos deben estar llenos</p>";

    } else if (!empty($_POST['producto']) && !empty($_POST['motivo']) && !empty($_POST['empresa']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])
            && !empty($_POST['correo']) && !empty($_POST['celular']) && !empty($_POST['pais']) && !empty($_POST['ciudad']) && !empty($_POST['mensaje'])) {

        require_once('../modelo/Conexion.php');
        require_once('../modelo/Modulo.php');
        require_once('../modelo/Correo.php');

        require_once('../modelo/libreria/PHPMailer/src/PHPMailer.php');
        require_once('../modelo/libreria/PHPMailer/src/SMTP.php');
        require_once('../modelo/libreria/PHPMailer/src/Exception.php');

        $modulo = new Modulo();
        $correo = new Correo();

        $datos = array(
                "producto" => $_POST['producto'],
                "motivo" => $_POST['motivo'],
                "empresa" => $_POST['empresa'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "correo" => $_POST['correo'],
                "celular" => $_POST['celular'],
                "pais" => $_POST['pais'],
                "ciudad" => $_POST['ciudad'],
                "mensaje" => $_POST['mensaje']
        );

        $asunto = $datos['motivo'].' '.$datos['producto'];
        $nombre = "Contactos GIS";
        $mail = "contactos@gis-sac.com";
        $mail_1 = "n";
        $mensaje =
            "<table style='width: 100% !important; border-spacing:0;'>".
            "<thead></thead>".
            "<tbody>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='left' width='55%' style='background: #009688'>".
            "<div>".
            "<img src='https://www.gis-sac.com/img/logo-gis2.png' width='150px' style='margin: 10px;'>".
            "</div>".
            "</td>".
            "<td align='left' width='15%' style='background: #009688;'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>Global Investment Solutions S.A.C</p>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>R.U.C. 20519193516</p>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td colspan='2' align='center'>".
            "<h4 style='font-family: \"Roboto\", sans-serif; font-size: 1.64rem;'>Nueva oportunidad de Venta</h4>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Empresa</p>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['empresa']."</p>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Nombre</p>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['nombre']."</p>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Apellido</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['apellido']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Correo</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['correo']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Celular</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['celular']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Pa��s</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['pais']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Ciudad</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$datos['ciudad']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' colspan='2'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>Mensasje</p><br>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>".$datos['mensaje']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".

            "<tr>".
            "<td width='15%'></td>".
            "<td colspan='2' align=\'center\' style='background: #5a5a5a;'>".
            "<div align='center' style='font-family: \"Roboto\", sans-serif; font-size: 12px;'>".
            "<p style='display: block; color: white; margin: 30px' align='center'>Global Investment Solutions S.A.C - 2018, Surco, Lima, Per��</p>".
            "</div>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "</tbody>".
            "</table>";

        $resultadoBD = $modulo->clienteForm($datos);
        $resultadoCoreo = $correo->enviarCorreo($mensaje, $asunto, $nombre, $mail, $mail_1);

        if ($resultadoBD == true && $resultadoCoreo == true) {

                echo "<p class='center-align'><i class='material-icons medium orange-text'>done</i></p>" .
                    "<p class='center-align'><b>" . $datos['nombre'] . " " . $datos['apellido'] . "</b>" . " tu infromación ha sido recibida</p>" .
                    "<p class='center-align'>Gracias por contactarnos, en momentos nos comunicaremos contigo.</p>" .
                    "<p class='right-align'><b>GIS S.A.C.</b></p>";
        }else if($resultadoBD == true && $resultadoCoreo == false){
                //problemas al elviar el correo, pero guardado en la base de datos...
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos... (SMTP ---> Problema)</p>";
        }else if($resultadoBD == false && $resultadoCoreo == true){
                //problemas al guardar en la base de datos, pero correo enviado...
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos... (BD ---> Problema)</p>";
        }else {
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos... (SMTP ---> Problema) & (BD ---> Problema)</p>";
        }
    }
}