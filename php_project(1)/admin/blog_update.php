<?php
    $image = $_FILES['b_image'];
    $title = $_POST['b_title'];
    $description = $_POST['b_description'];

      $conn = mysqli_connect("localhost","root","","acadamey");

      $sql = "UPDATE `blog_info` SET `image`='{$image}',`title`='{$title}',`description`='{$description}' WHERE b_id='{$id}'";

      $run = mysqli_query($conn,$sql);

      if ($run) {
        header('location:blog_list.php');
      }else{
        header('location:blog_add.php?error=Failed');
      }
?>