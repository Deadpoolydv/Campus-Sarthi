<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="campus_sarthi";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Your Connection Is Not Working". mysqli_connect_error());
}
else{
    // echo"Your Are Connected To Database";
}



?>