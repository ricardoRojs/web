
    <br>
    <a href="<?=$link->url("inicio")?>/noticias/index.php?news=2018-03-15"><img src="news-day/2018-03-15/head.jpg" alt="¿Aplicacion lenta?" width="100%"></a>
    <p class="truncate left-align">Usted tiene aplicaciones lentas. Los usuarios no están satisfechos. Hay una lluvia de
        quejas y su jefe le respira en la nuca. ¿Cómo hace para encontrar el problema rápidamente?</p>


<?php if(isset($_GET['new'])){?>
    <div class="col s12 m3"></div>
    <div class="col s12 m6">
        <img src="news-day/<?=$_GET['new']?>/head.jpg" alt="">
    </div>
    <div class="col s12 m3"></div>
<?php}else{?>
    <div>hola</div>
<?php }?>