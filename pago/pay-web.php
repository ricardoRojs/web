<?php

if (isset($_POST['monto']) && isset($_POST['cotizacion']) && isset($_POST['correo']) && isset($_POST['token'])) {

    if (empty($_POST['monto']) || empty($_POST['cotizacion']) || empty($_POST['correo']) || empty($_POST['token'])) {

        echo "<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p>" .
            "<p class='center-align'>Los campos deben estar llenos</p>";

    } else if (!empty($_POST['monto']) && !empty($_POST['cotizacion']) && !empty($_POST['correo']) && !empty($_POST['token'])) {

        try {


            include_once ('../modelo/libreria/Requests/library/Requests.php');
            Requests::register_autoloader();
            include_once ('../modelo/libreria/culqi-php/lib/culqi.php');

            // Configurar tu API Key y autenticacion
            $SECRET_KEY = "sk_live_0C41GDuxxs07X3p2";
            $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
            // Creando Cargo a una tarjeta
            $charge = $culqi->Charges->create(
                array(
                    "amount" => $_POST['monto'],
                    "capture" => true,
                    "currency_code" => "USD",
                    "description" => $_POST['cotizacion'],
                    "installments" => 0,
                    "email" => $_POST['correo'],
                    "metadata" => array("Cotizacion" => $_POST['cotizacion']),
                    "source_id" => $_POST['token']
                )
            );
            // Respuesta
            echo json_encode($charge);
        } catch (Exception $e) {
            echo json_encode($e->getMessage());
        }
    }
}