<?php
class urlIndex{

    public function url($link){

        // para pruebas....
        $sub = "web/";

        // eliminar $sub al momento de subir ejemplo ("http://192.168.1.10") o ("http://dominio.com").
        $ip = "http://192.168.1.10/".$sub;

        $urls = array(
            "solarwinds" => "productos/solarwinds/index.php",
            "iboss" => "productos/iboss/index.php",
            "varonis" => "prodcutos/varonis/index.php",
            "servicio" => "servicios/soporte-solarwinds/",
            "cliente" => "clientes/",
            "img" => "img/",
            "contactar" => "contactar/"
        );
        switch ($link){
            case "inicio":
                $url = $ip;
                return $url;
                break;
            case "solarwinds":
                $url = $ip.$urls['solarwinds'];
                return $url;
                break;
            case "iboss":
                $url = $ip.$urls['iboss'];
                return $url;
                break;
            case "varonis":
                $url = $ip.$urls['varonis'];
                return $url;
                break;
            case "servicio":
                $url = $ip.$urls['servicio'];
                return $url;
                break;
            case "cliente":
                $url = $ip.$urls['cliente'];
                return $url;
                break;
            case "img":
                $url = $ip.$urls['img'];
                return $url;
                break;
            case "contactar":
                $url = $ip.$urls['contactar'];
                return $url;
                break;
            default:
                return "usted ingreso: ".$link;
                break;
        }
    }
}

