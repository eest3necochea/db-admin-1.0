<?php
if(require_once("connDB.php")){
    $sql = "SELECT * FROM Persona";
    $result = mysqli_query($conn, $sql);
    $respuesta = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $respuesta[]=$row;
        }
        $_SESSION['resultDB'] = $respuesta;
        $_SESSION['tableName'] = "Persona";
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    header('Location: ../usuarios.php');
}else{
    
}


