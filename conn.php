<?php
$servername = "localhost";
$password = "";
$username = "root";
$dbname = "itec_website";

$conn = new mysqli($servername, $username, $password ,$dbname);

if ($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);

}

?>

