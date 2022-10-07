<?php 
 include ("db.php");
 if (isset($_GET['id'])){     /* verifica si llega información por el metodo GET */
    $id = $_GET['id'];
    $query = "DELETE FROM productos WHERE id = $id";       /* Prepara el query para el borrado en la b.d. */
    $resultado = mysqli_query($conn,$query);
    if (!$resultado){
        die ("Fallo en el borrado de la base de datos");
    }
    header ("Location: index.php");
 }
?>
