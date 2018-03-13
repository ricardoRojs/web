<footer class="page-footer grey lighten-3">
    <div class="container">
        <div class="row">
            <div class="col l3 s12 ">
                <h5 class="black-text">Enlaces</h5>
                <ul>
                    <li><a class="blue-text" href="#!">Solarwinds</a></li>
                    <li><a class="blue-text" href="#!">Varonis</a></li>
                    <li><a class="blue-text" href="#!">Iboss</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="black-text">Siguenos</h5>
                <ul>
                    <li><a href="https://www.facebook.com/gissacperu/" title="GIS SAC" class="col s3 m3"><img src="<?=$link->url('inicio')?>img/social/facebook.png"></a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="black-text">Ubicanos</h5>
                <ul>
                    <li class="grey-text"><i class="small material-icons">place</i>Av. Santiago de Surco Ex Tomás Marsano Nro. 2875 Of. 602 Urb. Higuereta - Lima - Santiago de Surco</li>
                    <li class="grey-text"><i class="small material-icons">phone</i>(01) 271-0852</li>
                    <li class="grey-text"><i class="small material-icons">phone_android</i>RPC: 990690230 - RPM: #991707533</li>
                    <li class="grey-text"><i class="small material-icons">email</i>contacto@gis-sac.com</li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="black-text">Mapa</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.7865942269077!2d-77.00448368509596!3d-12.126748991414045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b80fe17113f7%3A0xa9fe8337f4e9819f!2sGlobal+Investment+Solution+S.A.C!5e0!3m2!1ses!2spe!4v1505751377042" width="320" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="footer-copyright black-text">
        <div class="container">
            <p>Copyright © Global Investment Solutions S.A.C 2018. Todos los derechos reservados</p>
        </div>
        <div class="left" >
            <a id="js_up" href="#" class="boton-subir left"><i class="material-icons">keyboard_capslock</i></a>
        </div>
    </div>
    <script>
        //invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
        $(window).scroll(function(){
            if($(this).scrollTop() > 300){              //condición a cumplirse cuando el usuario aya bajado 301px a más.
                $("#js_up").slideDown(300);             //se muestra el botón en 300 mili segundos
            }else{ // si no
                $("#js_up").slideUp(300);               //se oculta el botón en 300 mili segundos
            }
        });

        //creamos una función accediendo a la etiqueta i en su evento click
        $("#js_up i").on('click', function (e) {
            e.preventDefault();                         //evita que se ejecute el tag ancla (<a href="#">valor</a>).
            $("body,html").animate({                    // aplicamos la función animate a los tags body y html
                scrollTop: 0                            //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
            },700);                                     //el valor 700 indica que lo ara en 700 mili segundos
            return false;                               //rompe el bucle
        });
    </script>

</footer>