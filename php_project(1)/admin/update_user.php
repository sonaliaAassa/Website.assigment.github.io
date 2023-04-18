<?php
       $id = $_POST['id'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];  

      $conn = mysqli_connect("localhost","root","","acadmey");

      $sql = "UPDATE `user` SET `username`='{$username}',`email`='{$email}',`password`='{$password}' WHERE id='{$id}'";

      $run = mysqli_query($conn,$sql);

      if ($run) {
        header('location:user-list.php');
      }else{
        header('location:add-user.php?error=Failed');
      }
?>