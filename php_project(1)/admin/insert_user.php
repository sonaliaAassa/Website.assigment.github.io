<?php
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];

      $conn = mysqli_connect("localhost","root","","acadamey");

      $sql = "INSERT INTO `user`( `username`, `email`, `password`) VALUES ('{$username}','{$email}','{$password}')";

      $run = mysqli_query($conn,$sql);

      if ($run) {
        header('location:index.php');
      }else{
        header('location:add-user.php?error=Failed');
      }
?>