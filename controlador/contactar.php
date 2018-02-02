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

            $modulo = new Modulo();
            $correo = new Correo();

            $cliente = array(
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

            $resultadoBD = $modulo->clienteForm($cliente);
            $resultadoCoreo = $correo->enviarCorreo($cliente);

            if ($resultadoBD == true && $resultadoCoreo == true) {

                echo "<p class='center-align'><i class='material-icons medium orange-text'>done</i></p>" .
                    "<p class='center-align'><b>" . $cliente['nombre'] . " " . $cliente['apellido'] . "</b>" . " tu infromación ha sido recibida</p>" .
                    "<p class='center-align'>Gracias por contactarnos, en momentos nos comunicaremos contigo.</p>" .
                    "<p class='right-align'><b>GIS S.A.C.</b></p>";

            }else if($resultadoBD == true && $resultadoCoreo == false){
                //problemas al elviar el correo, pero guardado en la base de datos...
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos... (Correo --> Problema)</p>";
            }else if($resultadoBD == false && $resultadoCoreo == true){
                //problemas al guardar en la base de datos, pero correo enviado...
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos... (BD ---> Problema)</p>";
            }else {
                echo "<p class='center-align'><i class='material-icons medium orange-text'>compare_arrows</i></p>" .
                    "<p class='center-align'>Problemas al enviar el los datos...</p>";
            }
        }
}