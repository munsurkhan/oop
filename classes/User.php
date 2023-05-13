<?php
/**
 * Created by PhpStorm.
 * User: MUNSUR-KHAN
 * Date: 5/13/2023
 * Time: 11:40 PM
 */

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

}