<?=$cabecera?>
<div class="container">
    <div class="card">
    <div class="card-header">
        Nuevo producto
    </div>
    <div class="card-body">
        <form action="<?php echo base_url()?>productos/actualizar" method="POST" class="form-control">
            <div class="row">
                <input type="text" class="form-control" name="id" id="id" value="<?=$valor['id']?>">
                <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" require value="<?=$valor['nombre']?>">
                </div>
                </div>

                <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control"  rows="3" id="descripcion" name="descripcion" require> <?=$valor['descripcion']?></textarea>
                </div>
                </div>

                <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" require value="<?=$valor['cantidad']?>">
                </div>
                </div>

                <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio</label>
                    <input type="numer" class="form-control" id="precio" name="precio" require value="<?=$valor['precio']?>">
                </div>
                </div>

                <div class="offset-md-10 col-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="listar"><button type="button" class="btn btn-secondary">Regresar</button></a>
                </div>

            </div>
        </form>
    </div>
    </div>
</div>


<?=$footer?>