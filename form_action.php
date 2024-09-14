<?php
require_once("config.php");

if(isset($_POST['form_submit'] )){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $nationality = $_POST['nationality'];
    $faname = $_POST['faname'];
    $mname = $_POST['mname'];
    $fnumber =$_POST['fnumber'];
    $mnumber =$_POST['mnumber'];
    $occupation =$_POST['occupation'];
    $income =$_POST['income'];
    $regcourse =$_POST['regcourse'];
    $associate =$_POST['associate'];
    $location =$_POST['location'];
    $address =$_POST['address'];
    $gender =$_POST['gender'] ?? '' ;
    $education =$_POST['education'] ?? '' ;
    $category =$_POST['category'] ?? '' ;
    $options =$_POST['options']?? '' ;
    $dob = $_POST['dob'];
}


$sql = " INSERT INTO `registration` (`fname`, `lname`, `email`, `number`, `gender`, `education`, `category`, `nationality`, `dob`, `faname`, `mname`, `fnumber`, `mnumber`, `occupation`, `income`, `regcourse`, `options`, `associate`, `location`, `address`)
 VALUES ('$fname', '$lname', '$email', '$number', '$gender', '$education', '$category', '$nationality', '$dob', '$faname', '$mname', '$fnumber', '$mnumber', '$occupation', '$income', '$regcourse', '$options', '$associate', '$location', '$address')" ;

mysqli_query($conn, $sql) ;



?>