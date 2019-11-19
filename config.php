<?php
session_start();
        $_SESSION["username"]="";
        $_SESSION["password"]="";
        
        $servername="localhost";
        $username="root";
        $pass="";
        $db="";
        $con = mysqli_connect($servername,$username,$pass,$db);

        if(!$con){
            echo "Check query";
        }
        else{

        }
?>