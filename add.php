<?php
//print_r($_POST);
$firstname=$_POST['firstname'];

$link=mysqli_connect('localhost','root','lict@2','crud02');

$query = "INSERT INTO `crud02`.`user` (`first_name`) VALUES ('$firstname');";

mysqli_query($link,$query);

header('location:list.php');