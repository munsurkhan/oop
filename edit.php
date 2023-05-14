<?php

require_once 'classes/User.php';

$user = new User();

$id = $_GET['id'];

$data = $user->updateUser($id);
$data = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])){
    $user->updateUserSave($_POST);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <input type="hidden" name="id" value="<?=$data['id'];?>">
            <td><input type="text" name="name" value="<?=$data['name'];?>"></td>
        </tr>

        <tr>
            <td><input type="email" name="email" value="<?=$data['email'];?>"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>

</form>

</body>
</html>
