<?php

if (isset($_POST['resp_exito']) && isset($_POST['cod_ref']) && isset($_POST['email']) && isset($_POST['monto'])) {

    if (!empty($_POST['resp_exito']) && !empty($_POST['cod_ref']) && !empty($_POST['email']) && !empty($_POST['monto'])) {

        require_once('../modelo/Conexion.php');
        require_once('../modelo/Modulo.php');
        require_once('../modelo/Correo.php');

        require_once('../modelo/libreria/PHPMailer/src/PHPMailer.php');
        require_once('../modelo/libreria/PHPMailer/src/SMTP.php');
        require_once('../modelo/libreria/PHPMailer/src/Exception.php');

        $modulo = new Modulo();
        $correo = new Correo();
        
        date_default_timezone_set('America/Los_Angeles');
        
        $mon = number_format((float)$_POST['monto'], 2, '.', '');
        
        $cliente = array(
            "respuesta" => $_POST['resp_exito'],
            "codigo" => $_POST['cod_ref'],
            "email" => $_POST['email'],
            "fecha" => date("Y-m-d H:i:s"),
            "monto" => $mon
        );
        
        $asunto = "Constancia de pago";
        $nombre = "Pagos GIS";
        $mail_1 = "cperez@gis-sac.com";
        
        $mensaje =
            "<table style='width: 100% !important; border-spacing:0;'>".
            "<thead></thead>".
            "<tbody>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='left' width='55%' style='background: #009688;'>".
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
            "<td width='15%'>".
            "</td>".
            "<td colspan='2' align='center'>".
            "<h4 style='font-family: \"Roboto\", sans-serif; font-size: 1.64rem;'>Pago exitoso</h4>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>Su pago se realizo con exito.</p>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 1px;'>Esta es la información de la transacción.</p>".
            "</td>".
            "<td width='15%'>".
            "</td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>ID de Transacción</p>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$cliente['codigo']."</p>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Fecha y hora de la emisión</p>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>".$cliente['fecha']."</p>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' width='55%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>Monto pagado</p><br>".
            "</td>".
            "<td align='center' width='15%'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>$".$cliente['monto']."</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td align='center' colspan='2'>".
            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px;'>Para atención de reclamos puede comunicarse al (01) 271-0852 o escribirnos a contactos@gis-sac.com</p><br>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "<tr>".
            "<td width='15%'></td>".
            "<td colspan='2' align=\'center\' style='background: #5a5a5a;'>".
            "<div align='center' style='font-family: \"Roboto\", sans-serif; font-size: 12px;'>".
            "<p style='display: block; color: white; margin: 30px' align='center'>Global Investment Solutions S.A.C - 2018, Surco, Lima, Perú</p>".
            "</div>".
            "</td>".
            "<td width='15%'></td>".
            "</tr>".
            "</tbody>".
            "</table>";
        
        $resultadoCoreo = $correo->enviarCorreo($mensaje, $asunto, $nombre, $cliente['email'], $mail_1);

        if ($resultadoCoreo == true) {

            echo "<p class='center-align'><i class='material-icons medium orange-text'>done</i></p>" .
                "<p class='center-align'><b>" . $cliente['respuesta'] . "</b>" . "</p>" .
                "<p class='center-align'>Gracias por elegirnos, para mas información revisa tu correo <b>" . $cliente['email'] . "</b></p>" .
                "<p class='right-align'><b>GIS S.A.C.</b></p>";
        }else {
            echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                "<p class='center-align'>Problemas al enviar el los datos... (SMTP ---> Problema)</p>";
        }
    }
}