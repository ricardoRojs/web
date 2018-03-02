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
    Culqi.publicKey = 'pk_test_z51Rh4rL0tBCM0KT';
    Culqi.init();
</script>

<!--Menu de la pagina -->
<?php include("../componentes/menu.php");?>

<!--Cuerpo de la pagina -->
<!--<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <form action="" method="POST" id="culqi-card-form">
                    <div class="col s12 m12">
                        <div class="input-field">
                            <a type="button" id="card-visa" class="btn-flat col m3"><img src="img/visa.png" width="70%"></a>
                            <a type="button" id="card-master" class="btn-flat col m3"><img src="img/mastercard.png" width="70%"></a>
                            <a type="button" id="card-american" class="btn-flat col m3"><img src="img/amercan.png" width="70%"></a>
                            <a type="button" id="card-diners" class="btn-flat col m3"><img src="img/diners-club.png" width="70%"></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="input-field">
                        <div class=" input-field col s12 m10">
                            <i class="material-icons prefix">attach_money</i>
                            <input type="text" id="monto">
                            <label for="monto">Monto en dolares</label>
                        </div>
                    </div>
                    <div class="input-field col s12 m10">
                        <i class="material-icons prefix">perm_identity</i>
                        <input class="input-field" type="text" size="50" data-culqi="card[name]" id="card[name]">
                        <label for="card[name]">Nombre Completos</label>
                    </div>
                    <div class="input-field col s12 m10">
                        <i class="material-icons prefix">mail</i>
                        <input class="input-field" type="text" size="50" data-culqi="card[email]" id="card[email]">
                        <label for="card[email]">Correo Electrónico</label>
                    </div>
                    <div class="input-field col s12 m10">
                        <i class="material-icons prefix">credit_card</i>
                        <input class="input-field" type="text" size="20" data-culqi="card[number]" id="card[number]">
                        <label for="card[number]">Número de tarjeta</label>
                    </div>
                    <div class="input-field col s12 m8">
                        <i class="material-icons prefix">https</i>
                        <input  class="input-field" type="text" size="3" data-culqi="card[cvv]" id="card[cvv]" data-length="3" maxlength="3">
                        <label for="card[cvc]">CVV</label>
                    </div>
                    <div class="input-field">
                        <div class=" input-field col s5 m5">
                            <i class="material-icons prefix">today</i>
                            <input type="text" size="2" data-culqi="card[exp_month]" id="card[exp_month]" data-length="2" maxlength="2">
                            <label for="card[exp_month]">MM</label>
                        </div>
                        <div class="input-field col s1 m1">
                            <label for="">/</label>
                        </div>
                        <div class="input-field col s4 m4">
                            <input type="text" size="4" data-culqi="card[exp_year]" id="card[exp_year]" data-length="4" maxlength="4" required>
                            <label for="card[exp_year]">YYYY</label>
                        </div>
                    </div>
                    <div class="input-field">
                        <div class=" input-field col s12 m10">
                            <i class="material-icons prefix">edit_pen</i>
                            <input type="text" id="descripcion">
                            <label for="descripcion">Descripción del pago</label>
                        </div>
                    </div>
                    <div class="input-field col s5 m5 right">
                        <button type="button" id="btn-pagar" class="btn-flat">Pagar</button>
                    </div>
                </form>
                <script>
                    function culqi() {
                        if(Culqi.token) { // ¡Token creado exitosamente!
                            // Get the token ID:
                            var token = Culqi.token.id;
                            var monto = $('#monto').val();
                            var venta = $('#descripcion').val();
                            //var email = $('#card[email]').val();
                            $.ajax({
                                method: 'POST',
                                url: 'web-pay.php',
                                data: {
                                    token: token,
                                    monto: monto,
                                    descripcion_venta: venta

                                },
                                dataType: 'JSON',
                                success: function (data) {
                                    console.log(data);
                                },
                                error: function (error_data) {
                                    console.log(error_data);
                                }
                            });

                            $.ajax({
                                method: 'POST',
                                url: 'web-pay.php',
                                data: {
                                    token: token,
                                    monto: monto,
                                    descripcion_venta: venta

                                },
                                dataType: 'JSON',
                                success: function (data) {
                                    console.log(data);
                                    if(data.capture == true){
                                        alert("Todo salio bien");
                                    }
                                },
                                error: function (error_data) {
                                    console.log(error_data);
                                }
                            });

                        }else{ // ¡Hubo algún problema!
                            // Mostramos JSON de objeto error en consola
                            console.log(Culqi.error);
                            alert(Culqi.error.mensaje);
                        }
                    };

                    $(document).ready(function () {
                        /*$('#culqi-card-form').on('submit', function (e) {
                            e.preventDefault();
                            Culqi.createToken();
                        });*/
                        $('#culqi-card-form').on('submit', function () {
                            Culqi.createToken();

                        });
                    });

                </script>
            </div>
            <div class="col s12 m3"></div>
        </div>
    </div>
</div>-->

<div class="row">
    <div class="col s12 m12 center-align" id="contenido">
        <div class="col s12 m12">
            <h4 class="center">Realizar Pago</h4>
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
                                <span class="white-text">El monto se ingresa sin punto. Ejemplo 50090 = 500.90</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <i class="material-icons prefix">mail</i>
                                <input class="input-field" id="card[email]" name="correo">
                                <label for="card[email]">Correo Electrónico</label>
                            </div>
                            <div class="col s12 m4 teal" style="padding-top: 10px; padding-bottom: 10px" id="tip-cor">
                                <span class="white-text">Ingrese su correo electrónico para confirmación</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m8">
                                <div class="row" id="tarjetas">
                                    <a type="button" id="card-visa" class="btn-flat col s3 m3"><img src="img/marcas/visa.png" width="80%"></a>
                                    <a type="button" id="card-master" class="btn-flat col s3 m3"><img src="img/marcas/mastercard.png" width="80%"></a>
                                    <a type="button" id="card-american" class="btn-flat col s3 m3"><img src="img/marcas/amercan.png" width="80%"></a>
                                    <a type="button" id="card-diners" class="btn-flat col s3 m3"><img src="img/marcas/diners-club.png" width="80%"></a>
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
                                    <input type="text" size="2" data-culqi="card[exp_month]" id="card[exp_month]" maxlength="2">
                                    <label for="card[exp_month]">MM</label>
                                </div>
                                <div class="input-field col s1 m1">
                                    <label for="">/</label>
                                </div>
                                <div class="input-field col s6 m4">
                                    <input type="text" data-culqi="card[exp_year]" id="card[exp_year]" maxlength="4">
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
                            <div class="center col s12 m10">
                                <div class="g-recaptcha" data-sitekey="6Ld0TkkUAAAAAI0DsL8rg2HEW4tlc4K0Qif3hM2b"></div>
                            </div>

                            <!-- Descripcion del pago -->
                            <div id="pago" class="modal">
                                <div class="modal-content" id="total"></div>
                                <div class="modal-footer">
                                    <button type="button" id="btn-cancelar" data-target="pago" class="btn-flat waves-effect waves-orange modal-close">Cancelar</button>
                                    <button type="submit" id="btn-pagar" class="btn-flat waves-effect waves-orange">Pagar</button>
                                </div>
                            </div>

                            <!-- Terminos y condiciones -->
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <?php include ("page/terminos.php");?>
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
                                console.log("Token creado... Listo para enviar");
                                var token = Culqi.token.id;
                                var monto = $('#monto').val() * 100;
                                var venta = $('#descripcion').val();
                                var correo = $('input[name="correo"]').val();
                                console.log("datos obtenidos... creando ajax...");
                                $.ajax({
                                    url: 'controller/pay-web.php',
                                    method: 'POST',
                                    data: {
                                        token: token,
                                        monto: monto,
                                        descripcion_venta: venta,
                                        correo: correo
                                    },
                                    type: 'JSON',
                                    beforeSend: function () {
                                        console.log("Todo listo.... enciando datos....")
                                    },
                                    success: function (data) {
                                        console.log(data);
                                    },
                                    error: function (error_data) {
                                        console.log(error_data);
                                    }
                                });

                            }else{ // ¡Hubo algún problema!
                                // Mostramos JSON de objeto error en consola
                                console.log(Culqi.error);
                                alert(Culqi.error.mensaje);
                            }
                        };

                        /*function email() {
                            var monto = $('#monto').val();
                            var venta = $('#descripcion').val();
                            var email = $('input[name="correo"]').val();
                            $.ajax({
                                url: 'controller/send-mail.php',
                                method: 'POST',
                                data: {
                                    monto: monto,
                                    descripcion_venta: venta
                                    correo: correo
                                },
                                type: 'JSON',
                                success: function (data) {
                                    console.log(data);
                                },
                                error: function (error_data) {
                                    console.log(error_data);
                                }
                            });
                        }*/

                        $(document).ready(function () {
                            $('#culqi-card-form').submit(function (e) {
                                Culqi.createToken();
                                e.preventDefault();
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