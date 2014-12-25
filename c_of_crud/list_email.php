<?php
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud02");

$query="SELECT * FROM email";

$result= mysqli_query($link,$query);
?>

<table border="1" width="70%">
    <tr>
        <td> id </td>
        <td> email</td>
        <td>created</td>
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['created']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php

    }
    ?>
</table>
<a href="create.html">HOME</a>