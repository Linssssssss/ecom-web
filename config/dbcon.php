<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "zuriaccessories";

//creating database connection
$con = mysqli_connect($host, $username, $password, $database);

// check database connection
if(!$con)
{
    die("Connection Failed: ". mysqli_connect_error());
}

?>