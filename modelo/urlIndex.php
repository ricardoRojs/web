<?php
class urlIndex{

    public function url($link){

        // para pruebas....
        //$sub = "web/";

        // eliminar $sub al momento de subir ejemplo ("http://192.168.1.10") o ("http://dominio.com").
        $ip = "https://www.gis-sac.com/";

        $urls = array(
            "solarwinds" => "productos/solarwinds/index.php",
            "iboss" => "productos/iboss/index.php",
            "varonis" => "prodcutos/varonis/index.php",
            "soporte-solarwinds" => "servicios/soporte-solarwinds/",
            "poliza-mantenimiento" => "servicios/poliza-mantenimiento/",
            "cliente" => "clientes/",
            "img" => "img/",
            "contactar" => "contactar/",
            "licencia" => "licencia/",
            "pago" => "pago/"
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
            case "soporte-solarwinds":
                $url = $ip.$urls['soporte-solarwinds'];
                return $url;
                break;
            case "poliza-mantenimiento":
                $url = $ip.$urls['poliza-mantenimiento'];
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
            case "licencia":
                $url = $ip.$urls['licencia'];
                return $url;
                break;
            case "pago":
                $url = $ip.$urls['pago'];
                return $url;
                break;
            default:
                return "usted ingreso: ".$link;
                break;
        }
    }
}

