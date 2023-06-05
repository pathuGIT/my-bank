<?php
    $conn = mysqli_connect('localhost','root','','mydb');
    if(mysqli_connect_errno()){
        die('Database connection filed' . mysqli_connect_error());
    }else{
        //echo"Connected!";
    }
?>