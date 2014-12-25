<?php
$id= $_GET['id'];

$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query="DELETE FROM `crud02`.`user` WHERE `user`.`id` = '$id'";

mysqli_query($link,$query);

header('location:list.php');
?>