<!-- Requerimientos de Hardware y Software -->
<div id="requisitos" class="modal modal-fixed-footer z-depth-5">
    <div class="modal-content">
        <h4>Requerimientos para <?php echo $moduloShort;?></h4>
        <li class="divider"></li>
        <table class="highlight">
        <thead>
            <tr>
                <th colspan="2"><h5>Hardware y Software</h5></th>
            </tr>
        </thead>
        <tbody>
           <?php if($moduloSo != null){?>
            <tr>
                <td><img src="img/so1.png" alt="Sistema Operativo"></td>
                <td><?php echo $moduloSo;?></td>
            </tr>
            <?php }if($moduloRam != null){?>
            <tr>
                <td><img src="img/ram1.png" alt=""></td>
                <td><?php echo $moduloRam;?></td>
            </tr>
            <?php }if($moduloDiscoDuro != null){?>
            <tr>
                <td><img src="img/disco1.png" alt=""></td>
                <td><?php echo $moduloDiscoDuro;?></td>
            </tr>
            <?php }if($moduloProcesador != null){?>
            <tr>
                <td><img src="img/procesador1.png" alt=""></td>
                <td><?php echo $moduloProcesador;?></td>
            </tr>
            <?php }if($moduloBaseDatos != null){?>
            <tr>
                <td><img src="img/base1.png" alt=""></td>
                <td><?php echo $moduloBaseDatos;?></td>
            </tr>
            <?php }if($moduloServerWeb != null){?>
            <tr>
                <td><img src="img/web1.png" alt=""></td>
                <td><?php echo $moduloServerWeb;?></td>
            </tr>
            <?php }if($moduloFrameNet != null){?>
            <tr>
                <td><img src="img/net1.png" alt=""></td>
                <td><?php echo $moduloFrameNet;?></td>
            </tr>
            <?php }else{?>
            <tr>
                <td><img src="img/peligro.png" alt=""></td>
                <td>Actualizando requerimientos</td>
            </tr>
            <?php }?>
        </tbody>
      </table>
      <p><b>Nota: </b><?php echo $nota;?><a href="http://clientes.gis-sac.com">contáctenos</a></p>  
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
    </div>
</div>