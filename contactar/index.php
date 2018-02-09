<?php
require_once ('../modelo/Conexion.php');
require_once ('../modelo/Modulo.php');
require_once ('../modelo/urlIndex.php');

$modulo = new Modulo();
$link = new urlIndex();
$marcaFull = "Contactar";

$id = 602;

$dataBussines = $modulo->getBussines($id);

$nameShort;
$nameFull;
$moduloFull = "Global Investment Solution S.A.C";


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

    <title><?php echo $nameFull;?></title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.parallax').parallax();
            $('.button-collapse').sideNav();
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
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
            $('input.autocomplete').autocomplete({
                data: {
                    "Solarwinds": 'img/solarwinds.png',
                    "Iboss": 'img/iboss.png',
                    "Varonis": 'img/varonis.png'
                },
                limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                onAutocomplete: function(val) {
                    // Callback function when value is autcompleted.
                },
                minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
            });

            $('input.pais').autocomplete({
                data: {
                    'Afganistán': null,
                    'Albania': null,
                    'Alemania': null,
                    'Andorra': null,
                    'Angola': null,
                    'Antigua y Barbuda': null,
                    'Arabia Saudita': null,
                    'Argelia': null,
                    'Argentina': null,
                    'Armenia': null,
                    'Australia': null,
                    'Austria': null,
                    'Azerbaiyán': null,
                    'Bahamas': null,
                    'Bangladés': null,
                    'Barbados': null,
                    'Baréin': null,
                    'Bélgica': null,
                    'Belice': null,
                    'Benín': null,
                    'Bielorrusia': null,
                    'Birmania': null,
                    'Bolivia': null,
                    'Bosnia y Herzegovina': null,
                    'Botsuana': null,
                    'Brasil': null,
                    'Brunéi': null,
                    'Bulgaria': null,
                    'Burkina Faso': null,
                    'Burundi': null,
                    'Bután': null,
                    'Cabo Verde': null,
                    'Camboya': null,
                    'Camerún': null,
                    'Canadá': null,
                    'Catar': null,
                    'Chad': null,
                    'Chile': null,
                    'China': null,
                    'Chipre': null,
                    'Ciudad del Vaticano': null,
                    'Colombia': null,
                    'Comoras': null,
                    'Corea del Norte': null,
                    'Corea del Sur': null,
                    'Costa de Marfil': null,
                    'Costa Rica': null,
                    'Croacia': null,
                    'Cuba': null,
                    'Dinamarca': null,
                    'Dominica': null,
                    'Ecuador': null,
                    'Egipto': null,
                    'El Salvador': null,
                    'Emiratos Árabes Unidos': null,
                    'Eritrea': null,
                    'Eslovaquia': null,
                    'Eslovenia': null,
                    'España': null,
                    'Estados Unidos': null,
                    'Estonia': null,
                    'Etiopía': null,
                    'Filipinas': null,
                    'Finlandia': null,
                    'Fiyi': null,
                    'Francia': null,
                    'Gabón': null,
                    'Gambia': null,
                    'Georgia': null,
                    'Ghana': null,
                    'Granada': null,
                    'Grecia': null,
                    'Guatemala': null,
                    'Guyana': null,
                    'Guinea': null,
                    'Guinea ecuatorial': null,
                    'Guinea-Bisáu': null,
                    'Haití': null,
                    'Honduras': null,
                    'Hungría': null,
                    'India': null,
                    'Indonesia': null,
                    'Irak': null,
                    'Irán': null,
                    'Irlanda': null,
                    'Islandia': null,
                    'Islas Marshall': null,
                    'Islas Salomón': null,
                    'Israel': null,
                    'Italia': null,
                    'Jamaica': null,
                    'Japón': null,
                    'Jordania': null,
                    'Kazajistán': null,
                    'Kenia': null,
                    'Kirguistán': null,
                    'Kiribati': null,
                    'Kuwait': null,
                    'Laos': null,
                    'Lesoto': null,
                    'Letonia': null,
                    'Líbano': null,
                    'Liberia': null,
                    'Libia': null,
                    'Liechtenstein': null,
                    'Lituania': null,
                    'Luxemburgo': null,
                    'Madagascar': null,
                    'Malasia': null,
                    'Malaui': null,
                    'Maldivas': null,
                    'Malí': null,
                    'Malta': null,
                    'Marruecos': null,
                    'Mauricio': null,
                    'Mauritania': null,
                    'México': null,
                    'Micronesia': null,
                    'Moldavia': null,
                    'Mónaco': null,
                    'Mongolia': null,
                    'Montenegro': null,
                    'Mozambique': null,
                    'Namibia': null,
                    'Nauru': null,
                    'Nepal': null,
                    'Nicaragua': null,
                    'Níger': null,
                    'Nigeria': null,
                    'Noruega': null,
                    'Nueva Zelanda': null,
                    'Omán': null,
                    'Países Bajos': null,
                    'Pakistán': null,
                    'Palaos': null,
                    'Panamá': null,
                    'Papúa Nueva Guinea': null,
                    'Paraguay': null,
                    'Perú': null,
                    'Polonia': null,
                    'Portugal': null,
                    'Reino Unido': null,
                    'República Centroafricana': null,
                    'República Checa': null,
                    'República de Macedonia': null,
                    'República del Congo': null,
                    'República Democrática del Congo': null,
                    'República Dominicana': null,
                    'República Sudafricana': null,
                    'Ruanda': null,
                    'Rumanía': null,
                    'Rusia': null,
                    'Samoa': null,
                    'San Cristóbal y Nieves': null,
                    'San Marino': null,
                    'San Vicente y las Granadinas': null,
                    'Santa Lucía': null,
                    'Santo Tomé y Príncipe': null,
                    'Senegal': null,
                    'Serbia': null,
                    'Seychelles': null,
                    'Sierra Leona': null,
                    'Singapur': null,
                    'Siria': null,
                    'Somalia': null,
                    'Sri Lanka': null,
                    'Suazilandia': null,
                    'Sudán': null,
                    'Sudán del Sur': null,
                    'Suecia': null,
                    'Suiza': null,
                    'Surinam': null,
                    'Tailandia': null,
                    'Tanzania': null,
                    'Tayikistán': null,
                    'Timor Oriental': null,
                    'Togo': null,
                    'Tonga': null,
                    'Trinidad y Tobago': null,
                    'Túnez': null,
                    'Turkmenistán': null,
                    'Turquía': null,
                    'Tuvalu': null,
                    'Ucrania': null,
                    'Uganda': null,
                    'Uruguay': null,
                    'Uzbekistán': null,
                    'Vanuatu': null,
                    'Venezuela': null,
                    'Vietnam': null,
                    'Yemen': null,
                    'Yibuti': null,
                    'Zambia': null,
                    'Zimbabue': null
                },
                limit: 20,
                onAutocomplete: function (val) {

                },
                minLength: 2,
            });

            $('select').material_select();

            $('.modal').modal({
                dismissible: false, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                inDuration: 300, // Transition in duration
                outDuration: 200, // Transition out duration
                startingTop: '40%', // Starting top style attribute
                endingTop: '10%', // Ending top style attribute
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn-enviar').click(function(){
                var url = "contactar.php";
                $.ajax({
                    method: "POST",
                    url: url,
                    data: $("#formulario").serialize(),
                    beforeSend: function (){
                        $('#modal1').modal('open');
                        $("#resp").html("<p class='center-align'><i class='material-icons medium orange-text'>file_upload</i></p><p class='center-align'>Enviando información...</p>");
                    },
                    success: function(data){
                        $('#resp').html(data);
                    },
                    error: function (data){
                        $('#resp').html(data);
                    }
                });
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
    </style>
</head>

<body>

<!--Toda la modificacion -->
<?php include("../componentes/menu.php");?>
<!--Toda la modificacion -->

<div class="container">
    <div class="section">
        <div class="row">
            <form id="formulario" method="POST">
                <div class="col s6">

                    <h5 class="center-align">Campos Obligatorios (*)</h5>

                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">dashboard</i>
                                <input name="producto" type="text" id="autocomplete-input" class="autocomplete validate" required>
                                <label for="autocomplete-input">Productos (*)</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">account_balance_wallet</i>
                                <select name="motivo" required>
                                    <option value="" disabled selected>Motivo</option>
                                    <option value="Consulta Comercial">Consulta Comercial</option>
                                    <option value="Consulta Técnica">Consulta Técnica</option>
                                    <option value="Sugerencia">Sugerencia</option>
                                </select>
                                <label>Motivo del contacto (*)</label>
                            </div>

                            <p><b>Datos personales</b></p>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">account_box</i>
                                <input name="empresa" type="text" id="empresa" class="validate" required>
                                <label for="empresa">Empresa (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">account_box</i>
                                <input name="nombre" type="text" id="nombre" class="validate" required>
                                <label for="nombre">Nombre (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">account_box</i>
                                <input name="apellido" id="apellido" type="text" class="validate" required>
                                <label for="apellido">Apellido (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">email</i>
                                <input name="correo" type="text" id="correo" class="validate" required>
                                <label for="correo">Correo (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">phone</i>
                                <input name="celular" id="celular" type="text" class="validate" required>
                                <label for="celular">Celular (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">map</i>
                                <input name="pais" type="text" id="pais" class="pais validate" required>
                                <label for="pais">País (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">pin_drop</i>
                                <input name="ciudad" id="ciudad" type="text" class="validate" required>
                                <label for="ciudad">Ciudad (*)</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix orange-text">format_align_left</i>
                                <textarea name="mensaje" id="mensaje" class="materialize-textarea" maxlength="120" data-length="120" required></textarea>
                                <label for="mensaje">Mensaje (*)</label>
                            </div>
                            <div>
                                <button type="button" style="margin-top: 20px" class="btn-flat waves-effect waves-orange right" id="btn-enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

                <div class="col s6 center-align">
                    <br>
                    <br>
                    <br>
                    <img src="img/fondo.png" >
                </div>


            <div id="modal1" class="modal">
                <div class="modal-content" id="resp">
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include("../componentes/pie.php");?>

</body>
</html>