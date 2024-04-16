<?php 

include("db.php");

if(isset($_POST['save'])) { 
    $nombre=$_POST['nombre']; 
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono']; 
    $mail=$_POST['mail'];
    $comentario=$_POST['comentario'];

    $query="INSERT INTO usuario(nombre, direccion, telefono, mail, comentario) VALUES ('$nombre', '$direccion', '$telefono', '$mail', '$comentario')"; 
    $result=mysqli_query($conn, $query); 

    if (!$result) { 
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}

?>