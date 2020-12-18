<?php

$mysqli = new mysqli("localhost","admin","1234","agenda");
if(mysqli_connect_errno()){
    echo 'conexion fallida:', mysqli_connect_error();
    exit();
}
