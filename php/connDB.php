<?php
session_start();

require_once('../configDB.php');
            
$conn = mysqli_connect(DBM_HOST, DBM_USER, DBM_PASSWORD, DBM_NAME);

// Check connection
if (!$conn) {
    return false;
}else{
    return true;
}


