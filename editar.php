<?php 
    include ("db.php");

    // aqui se lee la informacion de la base de datos
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query ="SELECT * FROM productos WHERE id=$id";
        $resultado = mysqli_query($conn,$query);
        if (mysqli_num_rows($resultado) == 1 ){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
        }
    }

    // aqui se actualiza la informacion en la base de datos con lo que viene en el post

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];

        $query = "UPDATE productos SET nombre ='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";
        mysqli_query ($conn,$query);
        header ("Location: index.php");
    }

?>

<?php include ("./include/head.php");?>

    <div class="container p-4">
       <div class="row">
           <div class = "col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" 
                            class="form-control" placeholder="digite el nombre del producto">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" 
                            class="form-control" placeholder="digite la descripcion del producto">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" name="precio" value="<?php echo $precio; ?>" 
                            class="form-control" placeholder="digite el precio del producto">
                        </div>
                        <br>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
           </div>
       </div>
    </div>   

<?php include ("./include/footer.php");?>