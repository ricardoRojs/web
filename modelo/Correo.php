<?php
require_once('libreria/PHPMailer/src/PHPMailer.php');
require_once('libreria/PHPMailer/src/SMTP.php');
require_once('libreria/PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Correo{

    function enviarCorreo($men, $asunto, $nombre,$correo,$correo1){
        $mail = new PHPMailer(true);                                  // Passing `true` enables exceptions
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('es', 'libreria/PHPMailer/language/phpmailer.lang-es.php');
        try {
            //Server settings
            //$mail->SMTPDebug = 1;                                               // Enable verbose debug output
            $mail->isSMTP();                                                    // Set mailer to use SMTP
            $mail->Host = 'gis-sac.com';                                        // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                             // Enable SMTP authentication
            $mail->Username = 'nuevos-clientes@gis-sac.com';                    // SMTP username
            $mail->Password = 'gis-sac602';                                     // SMTP password
            $mail->SMTPSecure = 'ssl';                                          // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                                  // TCP port to connect to
            
            //Recipients
            $mail->setFrom('ventas@gis-sac.com', $nombre);
            $mail->addAddress($correo, '');   // Add a recipient
            
            if($correo1 != "n"){
                $mail->addAddress($correo1, 'Carlos');   // Add a recipient    
            }
            
            //$mail->addAddress('ellen@example.com');                              // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');                         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');                    // Optional name

            //Content
            $mail->isHTML(true);                                             // Set email format to HTML
            $mail->Subject = $asunto;                                               // motivo.producto

            $mail->Body = $men;
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