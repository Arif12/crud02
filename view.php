
<?php
$id = $_GET['id'];
$link=mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query="SELECT * FROM user WHERE id = '$id'";

$result=mysqli_query($link,$query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>


<table border="1" width="70%">
    <tr>
        <td> Id </td>
        <td> First Name</td>
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php

    }
    ?>
</table>


<a href ="list.php">Go to Home</a>