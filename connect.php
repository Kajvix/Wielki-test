<?php
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "użytkownicy";

    $con = mysqli_connect($host,$db_user,$db_password,$db_name);

    if(!$con){
        die ("Conuldn't connect with Database".mysqli_connect_error());
    }
?>