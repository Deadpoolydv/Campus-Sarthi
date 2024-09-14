<?php 
require_once("config.php");

if (isset($_POST['contact-submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $options = $_POST['options'];
    $message = $_POST['message'];


    $query = " INSERT INTO `contact_us` (`name`, `email`, `number`, `options`, `message`)
 VALUES ('$name', '$email', '$number', '$options', '$message')" ;

$result = mysqli_query($conn, $query);


if($result) {
    // echo '<script>alert("Your Form Is Submitted")</script>';
    echo '<script>alert(" Your Query Is Submitted ")</script>';

    // header("Refresh: 0 sec");
    header("refresh:0; url='contact-us.html' ");
    exit(); // It's good practice to exit after a header redirect

} else {
    echo 'Something went wrong';
}



}





?>