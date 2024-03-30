<?php
if(require_once("connDB.php")){
   if(isset($_POST["email"]) && isset($_POST["password"])){

        $email = trim($_POST['email']);
        $passw = trim($_POST['password']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $direccion = trim($_POST['direccion']);
        $ciudad = trim($_POST['ciudad']);
        $sexo = trim($_POST['sexo']);
        $fechaNacimiento = trim($_POST['fnacimiento']);
        $provincia = trim($_POST['provincia']);
        $pais = 'Argentina';
        $otrosDatos = trim($_POST['otrosDatos']);

        $sql = "INSERT INTO Persona (Email,Passw,Nombre,Apellido,Direccion,Ciudad,Sexo,FechaNacimiento,Provincia,Pais,Otros_Datos)
                VALUES ('$email','$passw','$nombre','$apellido','$direccion','$ciudad','$sexo','$fechaNacimiento','$provincia','$pais','$otrosDatos')";
        
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);            
            header('Location: selectAllDB.php');
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
   }
}else{
    
}
