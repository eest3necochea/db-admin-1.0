<?php
if(require_once("connDB.php")){
    $_SESSION['dbConnect'] = true;
    $_SESSION['username'] = "Administrador";
    $_SESSION['dbName'] = DBM_NAME;
    header('Location: ../index.php');
}
