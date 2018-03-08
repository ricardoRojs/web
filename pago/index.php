<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();

$marcaFull = "Pagos";

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;
//$moduloFull = "Global Investment Solution S.A.C";


if($dataBussines){
    $nameShort = $dataBussines['nameShort'];
    $nameFull = $dataBussines['nameFull'];

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../img/favicon.png" type="image/icon"/>
    <meta charset="utf-8"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <title><?php echo $marcaFull?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <!-- Incluyendo .js de Culqi-->
    <script src="https://checkout.culqi.com/v2"></script>

    <script>
        $(document).ready(function(){
            $('select').material_select();
            $('.modal').modal({
                dismissible: false,
                startingTop: '90%', // Starting top style attribute
                endingTop: '15%' // Ending top style attribute
            });
            $('.button-collapse').sideNav();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
            });
            $('.dropdown-button2').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: ($('.dropdown-content').width()),
                    // Spacing from edge
                    belowOrigin: false, // Displays dropdown below the button
                    alignment: 'left' // Displays dropdown with edge aligned to the left of button
                }
            );
            $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0,
                    //gutter: ($('.dropdown-content').width()*3)/2.5 + 5,
                    // Spacing from edge
                    belowOrigin: true, // Displays dropdown below the button
                    alignment: 'left' // Displays dropdown with edge aligned to the left of button
                }
            );
            
            //tarjeta visa
            $('#card-visa').click(function () {
                $('input[id="card[cvv]"]').prop('maxlength',3);
                $('input[id="card[number]"]').prop('maxlength',16);

                $('#card-visa').css('opacity','1');
                $('#card-master').css('opacity','0.5');
                $('#card-american').css('opacity','0.5');
                $('#card-diners').css('opacity','0.5');

                $('input[id="card[number]"]').prop('disabled',false);
                $('input[id="card[cvv]"]').prop('disabled',false);
                $('input[id="card[exp_month]"]').prop('disabled',false);
                $('input[id="card[exp_year]"]').prop('disabled',false);
                
            });
            //tarjeta mastercard
            $('#card-master').click(function () {
                $('input[id="card[cvv]"]').prop('maxlength',3);
                $('input[id="card[number]"]').prop('maxlength',16);

                $('#card-visa').css('opacity','0.5');
                $('#card-master').css('opacity','1');
                $('#card-american').css('opacity','0.5');
                $('#card-diners').css('opacity','0.5');

                $('input[id="card[number]"]').prop('disabled',false);
                $('input[id="card[cvv]"]').prop('disabled',false);
                $('input[id="card[exp_month]"]').prop('disabled',false);
                $('input[id="card[exp_year]"]').prop('disabled',false);
            });
            //tarjeta american
            $('#card-american').click(function () {
                $('input[id="card[cvv]"]').prop('maxlength',4);
                $('input[id="card[number]"]').prop('maxlength',15);

                $('#card-visa').css('opacity','0.5');
                $('#card-master').css('opacity','0.5');
                $('#card-american').css('opacity','1');
                $('#card-diners').css('opacity','0.5');

                $('input[id="card[number]"]').prop('disabled',false);
                $('input[id="card[cvv]"]').prop('disabled',false);
                $('input[id="card[exp_month]"]').prop('disabled',false);
                $('input[id="card[exp_year]"]').prop('disabled',false);
            });
            //tarjeta diners
            $('#card-diners').click(function () {
                $('input[id="card[cvv]"]').prop('maxlength',3);
                $('input[id="card[number]"]').prop('maxlength',14);

                $('#card-visa').css('opacity','0.5');
                $('#card-master').css('opacity','0.5');
                $('#card-american').css('opacity','0.5');
                $('#card-diners').css('opacity','1');

                $('input[id="card[number]"]').prop('disabled',false);
                $('input[id="card[cvv]"]').prop('disabled',false);
                $('input[id="card[exp_month]"]').prop('disabled',false);
                $('input[id="card[exp_year]"]').prop('disabled',false);
            });

            $('#filled-in-box').click(function () {
                if( $('#filled-in-box').prop('checked') ) {
                    $('#btn-total').prop('class','btn-flat waves-effect waves-orange modal-trigger');
                }else{
                    $('#btn-total').prop('class','disabled btn-flat');
                }
            });

            $('#btn-total').prop('class','disabled btn-flat');

            $('input[id="card[number]"]').prop('disabled',true);
            $('input[id="card[cvv]"]').prop('disabled',true);
            $('input[id="card[exp_month]"]').prop('disabled',true);
            $('input[id="card[exp_year]"]').prop('disabled',true);

            $('#btn-total').click(function () {
                var monto = $('#monto').val();
                var cotizacion = $('#cotizacion').val();
                $('#total').append("<h4>Todo listo</h4><p>Esta pagando <b>$" + monto + "</b> por la cotización <b>Nro. " + cotizacion + "</b></p>");
            });
            $('#btn-cancelar').click(function () {
                $('#total').empty();
            });

            $('#cotizacion').hover(function () {
                $('#tip-cot').css("visibility", "visible");
            }, function () {
                $('#tip-cot').css("visibility", "hidden");
            });

            $('#monto').hover(function () {
                $('#tip-mon').css("visibility", "visible");
            }, function () {
                $('#tip-mon').css("visibility", "hidden");
            });

            $('input[name="correo"]').hover(function () {
                $('#tip-cor').css("visibility", "visible");
            }, function () {
                $('#tip-cor').css("visibility", "hidden");
            });
            $('#tarjetas').hover(function () {
                $('#tip-tar').css("visibility", "visible");
            }, function () {
                $('#tip-tar').css("visibility", "hidden");
            });

            $('input[name="tarjeta"]').hover(function () {
                $('#tip-nro').css("visibility", "visible");
            }, function () {
                $('#tip-nro').css("visibility", "hidden");
            });

            $('input[name="cvv"]').hover(function () {
                $('#tip-cvv').css("visibility", "visible");
            }, function () {
                $('#tip-cvv').css("visibility", "hidden");
            });

            $('#fecha').hover(function () {
                $('#tip-day').css("visibility", "visible");
            }, function () {
                $('#tip-day').css("visibility", "hidden");
            });

        });
    </script>

    <style>
        .dropdown-content{
            overflow: visible !important;
            width: 195px !important;
        }
        .material-icons, .icon-text {
            vertical-align: middle;
        }
        #download-btn{
            margin: 5px
        }
        .dropdown-content li>a>i{
            margin: 0 0 0 0;
            vertical-align: middle;
        }
        #tip-nro, #tip-mon, #tip-cor, #tip-cot, #tip-day, #tip-tar, #tip-cvv{
            visibility: hidden;
        }
        #card-visa, #card-master, #card-american, #card-diners{
            opacity: 0.5;
        }
    </style>

</head>

<body>

<!-- Configurando el checkout-->
<script>
    Culqi.publicKey = 'pk_live_3BsgWxA8r9TgUkRO';
    Culqi.init();
</script>

<!--Menu de la pagina -->
<?php include("../componentes/menu.php");?>

<!--Cuerpo de la pagina -->
<div class="row">
    <div class="col s12 m12 center-align" id="contenido">
        <div class="col s12 m12">
            <h2 class="header center orange-text">Realizar Pago</h2>
            <div class="row">
                <div class="col s12 m3"></div>
                <div class="col s12 m6">
                    <form action="" method="POST" id="culqi-card-form">
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">edit_pen</i>
                                <input class="input-field" type="text" id="cotizacion">
                                <label for="cotizacion">Cotización Nro./ Detallle</label>
                            </div>
                            <div class="col s12 m4 teal lighten-1" style="padding-top: 10px; padding-bottom: 10px" id="tip-cot">
                                <span class="white-text">Ingrese su Nro. de cotización. Si no tiene uno contacte a GIS S.A.C.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">attach_money</i>
                                <input class="input-field" type="text" id="monto">
                                <label for="monto">Monto en dólares</label>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-mon">
                                <span class="white-text">El monto. Ejemplo 500.90</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">mail</i>
                                <input class="input-field" id="card[email]" name="correo" type="text">
                                <label for="card[email]">Correo Electrónico</label>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-cor">
                                <span class="white-text">Ingrese su correo electrónico para confirmación</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <div class="row" id="tarjetas">
                                    <a type="button" id="card-visa" class="btn-flat col s3 m3"><img src="img/visa.png" width="80%"></a>
                                    <a type="button" id="card-master" class="btn-flat col s3 m3"><img src="img/mastercard.png" width="80%"></a>
                                    <a type="button" id="card-american" class="btn-flat col s3 m3"><img src="img/amercan.png" width="80%"></a>
                                    <a type="button" id="card-diners" class="btn-flat col s3 m3"><img src="img/diners-club.png" width="80%"></a>
                                </div>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-tar">
                                <span class="white-text">Seleccione el tipo de tarjeta</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">credit_card</i>
                                <input class="input-field" name="tarjeta" type="text" size="20" data-culqi="card[number]" id="card[number]">
                                <label for="card[number]">Número de tarjeta</label>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-nro">
                                <span class="white-text">Nro. de su tarjeta sin espacios. Ejemplo 4111111111111111</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">https</i>
                                <input  class="input-field" type="text" data-culqi="card[cvv]" id="card[cvv]" name="cvv">
                                <label for="card[cvc]">CVV</label>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-cvv">
                                <span class="white-text">Ingrese su codigo CVV</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field" id="fecha">
                                <div class=" input-field col s6 m3">
                                    <i class="material-icons prefix">today</i>
                                    <input type="text" size="2" data-culqi="card[exp_month]" id="card[exp_month]" maxlength="2" name="dia">
                                    <label for="card[exp_month]">MM</label>
                                </div>
                                <div class="input-field col s1 m1">
                                    <label for="">/</label>
                                </div>
                                <div class="input-field col s6 m4">
                                    <input type="text" data-culqi="card[exp_year]" id="card[exp_year]" maxlength="4" name="year">
                                    <label for="card[exp_year]">YYYY</label>
                                </div>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-day">
                                <span class="white-text">Ingrese la fecha de su tarjeta. Ejemplo 09/2020</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="center col s12 m10">
                                <p class="center">
                                    <input type="checkbox" class="filled-in" id="filled-in-box"/>
                                    <label for="filled-in-box">Acepta los <a class="modal-trigger" href="#modal1">terminos y condiciones</a></label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Descripcion del pago -->
                            <div id="pago" class="modal">
                                <div class="modal-content" id="total"></div>
                                <div id="btn-opcion" class="modal-footer">
                                    <button type="button" id="btn-cancelar" data-target="pago" class="btn-flat waves-effect waves-orange modal-close">Cerrar</button>
                                    <button type="submit" id="btn-pagar" class="btn-flat waves-effect waves-orange">Pagar</button>
                                </div>
                            </div>

                            <!-- Terminos y condiciones -->
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <?php include ("terminos.php");?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-target="modal1" class="btn-flat waves-effect waves-orange modal-close">Cerrar</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">
                                <button data-target="pago" type="button" id="btn-total" class="btn-flat waves-effect waves-orange modal-trigger">Pagar</button>
                            </div>
                            <div class="col s12 m4"></div>
                        </div>
                    </form>
                    <script>
                    
                        function culqi() {
                            if(Culqi.token) { // ¡Token creado exitosamente!
                                // Get the token ID:
                                var token = Culqi.token.id;
                                var monto = $('#monto').val() * 100;
                                var cotizacion = $('#cotizacion').val();
                                var correo = $('input[name="correo"]').val();
                        
                                var resp_exito = null;
                                var resp_error = null;
                                var cod_ref = null;
                                var email = null;
                                
                                $.ajax({
                                    url: 'pay-web.php',
                                    method: 'POST',
                                    data: {
                                        token: token,
                                        monto: monto,
                                        cotizacion: cotizacion,
                                        correo: correo
                                    },
                                    type: 'JSON',
                                    beforeSend: function () {
                                        //console.log("Todo listo.... enciando datos....");
                                        $('#total').html("<p class='center-align'><i class='material-icons medium orange-text'>file_upload</i></p><p class='center-align'>Enviando información...</p>");
                                    },
                                    success: function (data) {
                                        
                                        var datos = jQuery.parseJSON(data);
                                        
                                        if(datos.object == "charge"){
                                            resp_exito = datos.outcome.user_message;
                                            cod_ref = datos.reference_code;
                                            email = datos.email;
                                            
                                            $('#btn-opcion').html("<button type='button' onclick='javascript:window.location.reload();' class='btn-flat waves-effect waves-green'>Aceptar</button>");
                                            
                                            send(resp_exito, cod_ref, email, monto);
                                            console.log("datos enviados para correo");
                                        }else{
                                            var error = jQuery.parseJSON(datos);
                                            if(error.object == "error"){
                                                $('#total').html("<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p><p class='center-align'>"+error.user_message+"<p>");
                                            }else{
                                                console.log(error);
                                            }
                                            
                                        }
                                    },
                                    error: function (error_data) {
                                        $('#total').html("<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p><p class='center-align'>"+error_data+"<p>");
                                        //console.log(error_data);
                                    }
                                });

                            }else{ // ¡Hubo algún problema!
                                // Mostramos JSON de objeto error en consola
                                //console.log(Culqi.error);
                                $('#total').html("<p class='center-align'><i class='material-icons medium orange-text'>warning</i></p><p class='center-align'>"+Culqi.error.user_message+"<p>");
                                
                            }
                        };
                        
                        function send(resp_exito, cod_ref, email, monto){
                            var money = monto / 100;
                            $.ajax({
                                   url: 'send-mail.php',
                                   method: 'POST',
                                   data:{
                                       resp_exito: resp_exito,
                                       cod_ref: cod_ref,
                                       email: email,
                                       monto: money
                                   },
                                   beforeSend: function(){
                                       //console.log("Enviando datos...");
                                   },
                                   success: function (data){
                                        //console.log(data);
                                        $('#total').html(data);
                                        
                                     
                                   },
                                   error: function(error_data){
                                       $('#total').html(error_data);
                                       //console.log(error_data);
                                   }
                                });
                        }
                        
                        $(document).ready(function () {
                            $('#culqi-card-form').submit(function (e) {
                                if($('#cotizacion').val() == ""){
                                    var $toastContent = $('<span>Debe digitar Nro. Cotización</span>');
                                    Materialize.toast($toastContent, 5000);
                                    return false;
                                }else{
                                    if($('#monto').val() == ""){
                                        var $toastContent = $('<span>Debe digitar el monto a pagar</span>');
                                        Materialize.toast($toastContent, 5000);
                                        return false;
                                    }else{
                                        if($('input[name="correo"]').val() == ""){
                                            var $toastContent = $('<span>Debe digitar su correo</span>');
                                            Materialize.toast($toastContent, 5000);
                                            return false;
                                        }else{
                                            if($('input[name="tarjeta"]').val() == ""){
                                                var $toastContent = $('<span>Debe digitar el número de su tarjeta</span>');
                                                Materialize.toast($toastContent, 5000);
                                                return false;
                                            }else{
                                                if($('input[name="cvv"]').val() == ""){
                                                    var $toastContent = $('<span>Debe digitar su CVV de su tarjeta</span>');
                                                    Materialize.toast($toastContent, 5000);
                                                    return false;
                                                }else{
                                                    if($('input[name="dia"]').val() == "" || $('input[name="year"]').val() == ""){
                                                        var $toastContent = $('<span>Debe digitar la fecha de su tarjeta</span>');
                                                        Materialize.toast($toastContent, 5000);
                                                        return false;
                                                    }if($('input[name="dia"]').val() != "" && $('input[name="year"]').val() != ""){
                                                        Culqi.createToken();
                                                        e.preventDefault();
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        });

                    </script>
                </div>
                <div class="col s12 m3"></div>
            </div>
        </div>
    </div>
</div>

<!--Pie de la pagina -->
<?php include("../componentes/pie.php");?>

</body>
</html>