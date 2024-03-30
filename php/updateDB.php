<?php
if(require_once("connDB.php")){
    if(isset($_POST["id"]) && isset($_POST["email"])){

        
        $sql = "UPDATE Persona SET Email='$_POST[email]' WHERE id_Persona=$_POST[id]";
        
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);            
            header('Location: selectAllDB.php');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}else{
    
}


