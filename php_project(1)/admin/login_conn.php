<?php
session_start();
include_once("config.php");
$email = $_POST['email'];
$password = $_POST['password'];

    // if (isset($_POST['email']) && isset($_POST['password'])){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    


            if(empty($email)){
                header('location:sign-in.php?error=email is required');
            }else if(empty($password)){
                header('location:sign-in.php?error=password is required');
            }else{
        $password = md5($password);
         $query = "SELECT * FROM `user` WHERE  email ='{$email}' AND password='{$password}'";
        
        $run = mysqli_query($conn,$query) or die("die");
        if(mysqli_num_rows($run) > 0){
            while($data = mysqli_fetch_assoc($run)){
           
            $_SESSION['email'] = $data['password'];
            $_SESSION['id'] = $data['id'];

            header('location:index.php');

            // echo"yup";  
            //     if(isset($_SESSION['email'])){
            //     header('location:blog.php');
            // }else{
            //     header('location:sign_in.php?error=username or password is incorrect');
            // }
        }            
    }else{
        header('location:login.php.php?error=username or password is incorrect');
    }
}


?>