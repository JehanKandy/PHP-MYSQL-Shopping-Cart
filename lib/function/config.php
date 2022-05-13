<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "cart_db";

        $con = mysqli_connect($server,$user,$pass,$database);

        $result = (!$con)?null:$con;

        return $result;
    }
?>