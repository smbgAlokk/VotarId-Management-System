<?php 
ob_start(); 
require 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$aadhar = $_POST['aadhar'];
$voter = $_POST['voterid'];

$query = mysqli_query($con, "INSERT INTO `voter_list`(`id`, `name`, `email`,`dob`, `gender`, `aadhar`, `voter`) VALUES ('','$name','$email','$dob','$gender','$aadhar','$voter')");
echo '<script>alert("Thank You..! Your data have been updated in our database."); window.location = "/votar";</script>';

?>