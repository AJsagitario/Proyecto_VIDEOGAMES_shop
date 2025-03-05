<?php

function getConexion(){
    $hostname="localhost";
    $username="root";
    $password="";
    $database="proy_videogames";
    $port="3306";
    
    $con = mysqli_connect($hostname, $username, $password, $database, $port)
            or die("Error al conectar");
    return $con;
}

$con = getConexion();
function getList(){
    global $con;
    $cadSQL = "SELECT codigo,nombre,email,contraseña from usuario";
    $registros = mysqli_query($con, $cadSQL);
    $lista = [];
    while ($row = mysql_fetch_assoc($registros)) {
        $lista[] = $row;         
    }
    return $lista;
}

