
<?php

require_once 'classes/User.php';

$user = new User();

if (isset($_POST['submit'])){
    $user->save_user($_POST);
}

$allUser = $user->select();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Save">
</form>

<hr>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($allUser)){
        ?>

    <tr>
        <td><?=ucwords($row['name']);?></td>
        <td><?=$row['email'];?></td>
        <td>
            <a href="edit.php?id=<?=$row['id'];?>">Edit</a>
            ||
            <a href="delete.php?id=<?=$row['id'];?>">Delete</a>
        </td>
    </tr>
        <?php
    }
    ?>
</table>

</body>
</html>