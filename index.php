<?php include_once "./include/head.php"?>

    
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="guardar.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="nombre" class ="form-control" placeholder="Digite nombre del producto" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="descripcion" rows="4" class="form-control" placeholder="Digite la descripción del producto"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="precio" class ="form-control" placeholder="Digite precio del producto" >
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar Producto">
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre del producto</th>
                        <th>Descripción del producto</th>
                        <th>Precio del producto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query ="SELECT * FROM productos";
                    $resultado_prod= mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($resultado_prod)) {
                    ?>
                        <tr>
                            <td> <?php echo $row['nombre']?> </td>
                            <td> <?php echo $row['descripcion']?> </td>
                            <td> <?php echo $row['precio']?> </td>
                            <td> <a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">editar</a> 
                                 <a href="borrar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">borrar</a> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php include_once "./include/footer.php"?>
