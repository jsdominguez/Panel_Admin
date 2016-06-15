<script type="text/javascript" language="javascript" src="plugin/paginar.js"></script>

<table  class="table table-bordered table-hover" id="tabla_lista_paises" align="center" >
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        <?php
include("conexion.php");
$res = pg_query("select * from usuario");
while ($row =  pg_fetch_array($res)) 
    {
        ?>
        <tr id="color">
            <td class="color2"><?php echo $row['codigo']; ?></td>
            <td class="color2"><?php echo $row['nombre']; ?></td>
            <td class="color2"><?php echo $row['apellido']; ?></td>
            <td class="color2"><?php echo $row['edad']; ?></td>
            <td class="color2"><?php echo $row['correo']; ?></td>
            <td class="color2"><?php echo $row['telefono']; ?></td>
            <td class="color2"><?php if($row['estado']=="Active") { echo "<span class='label label-success'>Active</span>";} else{ echo "<span class='label label-danger'>Offline</span>";}?></td>
            <td>
            <a data-toggle="modal" data-target="#myModal<?php echo $row['codigo']; ?>"><img src="images/flaca.jpg"></a>

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['codigo']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['codigo']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

            <form>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Codigo</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control"  value="<?php echo $row['codigo']; ?>" disabled>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Nombre</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="nom<?php echo $row['codigo']; ?>" value="<?php echo $row['nombre']; ?>">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Apellido</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="ape<?php echo $row['codigo']; ?>" value="<?php echo $row['apellido']; ?>">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Edad</label>
                        <div class="col-xs-8">
                            <input type="number" class="form-control" id="eda<?php echo $row['codigo']; ?>" value="<?php echo $row['edad']; ?>">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">             
                 <label class="col-xs-3 control-label" >Estado</label>             
                    <div class="col-xs-8 selectContainer">
                    <select class="form-control" name="size"  id="selec<?php echo $row['codigo']; ?>" value="<?php echo $row['estado']; ?>">
                <option value="">Selecciona</option>
                <option value="Active">Activo</option>
                <option value="Offline">Inactivo</option>
                    </select>
                </div>
                    </div> 
                       <br>
                        <br>                 
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Correo</label>
                        <div class="col-xs-8">
                            <input type="text" class="form-control" id="cor<?php echo $row['codigo']; ?>" value="<?php echo $row['correo']; ?>">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" >Telefono</label>
                        <div class="col-xs-8">
                      <input type="Tel" class="form-control" id="tel<?php echo $row['codigo']; ?>" value="<?php echo $row['telefono']; ?>">        
                        </div>
                    </div>
                    <br>
                    <br>
              <!-- Single button -->
                <div class="form-group"><!-- CREAMOS UN GRUPO DONDE IRAN LOS BOTONES --> 
                <div class="col-xs-8 col-xs-offset-3"><!-- LE DAMOS UNA COLUMNA DE 8 Y QUE ESTARA CENTRADO --> 
                <center><button type="button" class="btn btn-primary" id="act" onclick="updatedata('<?php echo $row['codigo']; ?>')">Actualizar</button>
                <button type="button" id="act2" class="btn btn-default" data-dismiss="modal" >Cancel</button></center>
                </div>
                </div><!-- CERRAMOS EL GRUPO -->
                <br>
                <br>
            </form>
      
      </div>
    </div>
  </div>
</div>
        
        </td>
      </tr>
<?php
}
?>
    </tbody>
      </table>