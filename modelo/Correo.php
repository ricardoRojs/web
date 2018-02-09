<?php
require_once('libreria/PHPMailer.php');
require_once('libreria/SMTP.php');
require_once('libreria/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Correo{

    function enviarCorreo($datos){
        $mail = new PHPMailer(true);                                  // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                               // Enable verbose debug output
            $mail->isSMTP();                                                    // Set mailer to use SMTP
            $mail->Host = 'gis-sac.com';                                        // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                             // Enable SMTP authentication
            $mail->Username = 'nuevos-clientes@gis-sac.com';                    // SMTP username
            $mail->Password = 'gis-sac602';                                     // SMTP password
            $mail->SMTPSecure = 'ssl';                                          // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                                  // TCP port to connect to

            //Recipients
            $mail->setFrom('nuevos-clientes@gis-sac.com', 'Nuevos Clientes');
            $mail->addAddress('erequelme@gis-sac.com', 'Eduardo');   // Add a recipient
            //$mail->addAddress('ellen@example.com');                              // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');                         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');                    // Optional name

            //Content
            $mail->isHTML(true);                                             // Set email format to HTML
            $mail->Subject = $datos['motivo']." ".$datos['producto'];               // motivo.producto

            $men =
                "<table style='width: 100% !important; border-spacing:0;'>".
                "<thead></thead>".
                "<tbody>".
                "<tr>".
                "<td align='center'>".
                "<table width='70%'>".
                "<thead></thead>".
                "<tbody align='left'>".
                "<tr>".
                "<td colspan='2'>".
                "<nav style='background-color: #2196f3; width: 100%;'>".
                "<div style='height: 350px; top: 0;  opacity: .3; bottom: 0; -webkit-transform: none; transform: none; background-repeat: repeat; background-image: url(\"http://web.gis-sac.com/img/new.png\") !important;'></div>".
                "<div style='font-family: \"Roboto\", sans-serif; position: absolute; left: 1%; right: 1%; top: 160px; color: #fff;' align='center'>".
                "<h2 style='font-weight: 400; font-size: 3.56rem;'>Global Investment Solutions S.A.C</h2>".
                "</div>".
                "</nav>".
                "</td>".
                "</tr>".
                "<tr>".
                "<td width='40%' align='right' style='padding\: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Empresa</b></p></td>".
                "<td width='60%' ><p style='font-family: \"Roboto\", sans-serif'>".$datos['empresa']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Nombre</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['nombre']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Apellido</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['apellido']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Correo</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['correo']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Celular</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['celular']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Pais</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['pais']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Ciudad</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['ciudad']."</p></td>".
                "</tr>".
                "<tr>".
                "<td align='right' style='padding: 10px'><p style='font-family: \"Roboto\", sans-serif'><b>Mensaje</b></p></td>".
                "<td><p style='font-family: \"Roboto\", sans-serif'>".$datos['mensaje']."</p></td>".
                "</tr>".
                "<tr>".
                "<td colspan='2' style='background: #5a5a5a; margin-top: 10px;'>".
                "<div align='center' style='font-family: \"Roboto\", sans-serif; font-size: 12px;'>".
                "<p style='display: block; color: white;' align='center'>Global Investment Solutions S.A.C 2018, Surco, Lima, Peru</p>".
                "</div>".
                "</td>".
                "</tr>".
                "</tbody>".
                "</table>".
                "</td>".
                "</tr>".
                "</tbody>".
                "</table>";
            $mail->Body    = $men;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            //$mail->send();
            if($mail->send()){
                return true;
            }
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            return false;

        }
    }
}