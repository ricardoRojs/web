<?php
require_once('libreria/PHPMailer/src/PHPMailer.php');
require_once('libreria/PHPMailer/src/SMTP.php');
require_once('libreria/PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Correo{

    function enviarCorreo($datos){
        $mail = new PHPMailer(true);                                  // Passing `true` enables exceptions
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('es', 'libreria/PHPMailer/language/phpmailer.lang-es.php');
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
            $mail->setFrom('contactos@gis-sac.com', 'Nuevos Clientes');
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
            $mail->Subject = $datos['motivo'].' '.$datos['producto'];               // motivo.producto
            
            $mensaje =
            "<table style='width: 100% !important; border-spacing:0;'>".
                "<thead></thead>".
                "<tbody>".
                    "<tr>".
                        "<td width='15%'></td>".
                        "<td align='left' width='55%' style='background-color: #009688 !important;'>".
                            "<div>".
                                "<img src='https://www.gis-sac.com/img/logo-gis2.png' width='150px' style='margin: 10px;'>".
                            "</div>".
                        "</td>".
                        "<td align='left' width='15%' style='background-color: #009688 !important;'>".
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
                            "<p style='font-family: \"Roboto\", sans-serif; font-size: 15px; text-align: left'>País</p><br>".
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
                                "<p style='display: block; color: white; margin: 30px' align='center'>Global Investment Solutions S.A.C - 2018, Surco, Lima, Perú</p>".
                            "</div>".
                        "</td>".
                        "<td width='15%'></td>".
                    "</tr>".
                "</tbody>".
            "</table>";

            $mail->Body = $mensaje;
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