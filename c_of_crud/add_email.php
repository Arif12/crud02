<?php
//print_r($_POST);
$email=$_POST['email'];

$link=mysqli_connect('localhost','root','lict@2','crud02');

$query = "INSERT INTO `crud02`.`email` (`email`) VALUES ('$email');";

mysqli_query($link,$query);

header('location:list_email.php');