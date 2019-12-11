<?php

    $servername = "localhost";
    $username = "userweb";
    $password = "php2"; 
    $database = "crudproduct";
    $port = "3306";


    //Conexión a la base de datos php2 con el usuario webuser y contraseña php2
    $conexion = mysqli_connect($servername,$username,$password,$database, $port);

    //$con=mysql_connect("localhost","root","");
    //$sdb=mysql_select_db("database");
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }


    //$servername = "localhost";
    //$username = "root";
    //$password = ""; 
    //$conn = new mysqli($servername , $username ,$password );
    
    //if($conn->connect_error){
      // echo "no conectado";
    //}
    
    //echo "conectado";


?>