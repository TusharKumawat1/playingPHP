<?php
 
 $dbServer="localhost";
 $dbUser="root";
 $dbPass="";
 $dbName="firstDB";
 $conn="";
 $conn=mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
 if($conn){
    echo"Successfully connected to database";
 }
 else{
    echo"Opps...somthing went wrong";
 }
 
?>