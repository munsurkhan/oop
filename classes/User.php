<?php


class User
{
    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "oop";

        $this->link = mysqli_connect($host,$user,$password,$database);
    }

    public function save_user($data){
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

        $result = mysqli_query($this->link,$query);
        if ($result){
            echo "Data Insert Success";
        }else{
            echo "Data Not Saved";
        }
    }

    public function select(){
        return mysqli_query($this->link, "SELECT * FROM `users`");
    }

    public function delete($id){
        mysqli_query($this->link, "DELETE FROM `users` WHERE `id`= '$id'");
        header('Location: index.php');
    }

    public function updateUser($id){
        return mysqli_query($this->link, "SELECT * FROM `users` WHERE `id`='$id'");
    }

    public function updateUserSave($data){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        mysqli_query($this->link, "UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id` = '$id'");
        header('Location: index.php');

    }

}