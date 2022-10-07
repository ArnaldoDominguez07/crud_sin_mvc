<?php 
include ("db.php");

if (isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];

    $query="INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    
    $result= mysqli_query($conn,$query);
    if (!$result){
        die("Fallo en la base de datos");
    }
   
    echo '<script languaje ="javascript"> alert ("Registro guardado"); window.location.href="index.php";</script>';

    //header("Location: index.php");
    

}


?>