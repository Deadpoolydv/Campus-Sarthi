<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Your Connection Is Not Working". mysqli_connect_error());
}
else{
    echo"Your Are Connected To Database";
}



?>