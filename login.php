<?php
    $name=$_POST["username"];
    $pswd=$_POST["pswd"];
    $host="localhost";
    $user="root";
    $password="";
    $database="trial";
    $con = mysqli_connect($host,$user,$password,$database);
    if(!$con)
    {
        echo "not connected";
    }
    $query="INSERT INTO `mytable` (`slno`, `name`, `pswd`, `datetime`) VALUES (NULL, '$name', '$pswd', current_timestamp());";
    if(mysqli_query($con,$query))
    {
        echo "hola";
    }
    else
    {
        echo "not created";
    }
    $query="UPDATE `mytable` SET `name` = 'nihal2' WHERE `mytable`.`slno` = 10;";
    if(mysqli_query($con,$query))
    {
        echo "hola 1111";
    } 
?>