<?php

class Correo{
    function enviarCorreo($datos){

        ini_set("SMTP", "localhost");
        ini_set("smtp_port", 25);
        ini_set("sendmail_from", "postmaster@localhost.com");

        $destino = $datos['correo'];
        $asunto = $datos['motivo']." ".$datos['producto']; // motivo.producto
        $mensaje =
            "<html>".
                "<head>".
                    "<title>Test de prueba</title>".
                    "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>".
                    "<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>".
                "</head>".
                "<body>".
                    "<h5 class='center-align'>Nueva Oportunidad de Venta</h5>".
                    "Datos de la nueva oportunidad de venta:".
                    "<table class='highlight'>".
                        "<thead>".
                            "<tr>".
                                "<th colspan='8'>Cliente interesado en ".$datos['motivo']." ".$datos['producto']."</th>".
                            "</tr>".
                        "</thead>".
                        "<tbody>".
                            "<tr>".
                                "<td>".$datos['empresa']."</td>".
                                "<td>".$datos['nombre']."</td>".
                                "<td>".$datos['apellido']."</td>".
                                "<td>".$datos['correo']."</td>".
                                "<td>".$datos['celular']."</td>".
                                "<td>".$datos['pais']."</td>".
                                "<td>".$datos['ciudad']."</td>".
                                "<td>".$datos['mensaje']."</td>".
                            "</tr>".
                        "</tbody>".
                    "</table>".
                "</body>".
            "</html>";
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $cabeceras .= 'From: GIS-SAC<nuevos-clientes@gis-sac.com>';

        $enviado = mail($destino, $asunto, $mensaje, $cabeceras);

        return $enviado;
    }
}



/*$para = 'erequelme@gis-sac.com';

$titulo = 'Enviando email desde PHP';

$mensaje = '<html>'.
    '<head><title>Test de prueba</title></head>'.
    '<body><h1>Esto es un test de prueba</h1>'.
    'ohhhhhhhhhhhhhhh'.
    '<hr>'.
    'Enviado por mi programa en PHP'.
    '</body>'.
    '</html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$cabeceras .= 'From: GIS-SAC<nuevos-clientes@gis-sac.com>';

$enviado = mail($para, $titulo, $mensaje, $cabeceras);

if ($enviado)
    echo 'Email enviado correctamente';
else
    echo 'Error en el envío del email';*/