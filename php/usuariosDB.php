<?php

require_once("conexionDB.php");

$sql = "SELECT * FROM Persona";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['resultDB'] = $result;
} else {
    echo "0 results";
}