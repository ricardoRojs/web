<?php

try {

    include_once ('../modelo/libreria/Requests/library/Requests.php');
    Requests::register_autoloader();

    include_once ('../modelo/libreria/culqi-php/lib/culqi.php');


    // Configurar tu API Key y autenticación
    $SECRET_KEY = "sk_test_nO7Vpa35wH6sFZXF";
    $culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));
    // Creando Cargo a una tarjeta
    $charge = $culqi->Charges->create(
        array(
            "amount" => $_POST['monto'],
            "capture" => true,
            "currency_code" => "USD",
            "description" => $_POST['descripcion_venta'],
            "installments" => 0,
            "email" => "reydi_lk@hotmail.com",
            "metadata" => array("test"=>"test"),
            "source_id" => $_POST['token']
        )
    );
    // Respuesta
    echo json_encode($charge);
} catch (Exception $e) {
    echo json_encode($e->getMessage());
}