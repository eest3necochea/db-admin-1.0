<?php
session_start();

const DBM_NAME = 'inet';
const DBM_HOST = '192.168.0.251';
const DBM_USER = 'usuario';
const DBM_PASSWORD = '123456';
            
$conn = mysqli_connect(DBM_HOST, DBM_USER, DBM_PASSWORD, DBM_NAME);

// Check connection
if (!$conn) {
    return false;
}else{
    return true;
}


