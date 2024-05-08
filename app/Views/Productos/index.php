<?=$cabecera?>
  <?php if($aviso ==1){?>
    <div class="alert alert-success" role="alert"> Registro agregado </div>  
  <?php }?>
  <?php if($aviso ==2){?>
    <div class="alert alert-danger" role="alert"> Registro Eliminado </div>  
  <?php }?>
  <?php if($aviso ==3){?>
    <div class="alert alert-success" role="alert"> Registro actualizado </div>  
  <?php }?>
  <div class="alert alert-primary" role="alert"> Examen de conocimientos </div>

  <!-- boton para agregar el producto -->
  <div class="row">
    <div class="offset-md-10 col-2"><a href="<?php echo base_url()?>productos/crear"><button type="button" class="btn btn-primary">Agregar producto</button></a></div>
  </div>

  <hr>

  <!-- listado de productos -->
  <div class="card">
    <div class="card-header">
      Listado de productos
    </div>
    <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($lista as $producto):?>
        <tr>
          <th scope="row"><?=$producto['id']?></th>
          <td><?=$producto['nombre']?></td>
          <td><?=$producto['descripcion']?></td>
          <td><?=$producto['precio']?></td>
          <td><?=$producto['cantidad']?></td>
          <td>
          <a href="<?php echo base_url()?>productos/editar/<?=$producto['id']?>"><button type="button" class="btn btn-primary">Editar</button></a>
            <a href="<?php echo base_url()?>productos/eliminar/<?=$producto['id']?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    </div>
  </div>

 
 
</div>

<?=$footer?>
   