<?php
    //  print_r($_FILES['fileToUpload']);
    $images = $_FILES['fileToUpload'];
    $title = $_POST['b_title'];
    $description = $_POST['b_description'];
    $uploadfile = $_FILES['fileToUpload']['name'];
    $conn = mysqli_connect("localhost","root","","acadamey");

    $uploadimg = 'img/upload/'.$_FILES['fileToUpload']['name'];

    move_uploaded_file($_FILES['fileToUpload']['tmp_name'],'img/upload/'.$_FILES['fileToUpload']['name']);
    $sql ="INSERT INTO `blog_info`( `b_image`, `b_title`, `b_description`) VALUES ('{$uploadimg}','{$title}','{$description}')";

    $run = mysqli_query($conn,$sql);

    if ($run) {
      header('location:blog_list.php');
    }else{
      header('location:blog_add.php?error=Failed');
    }
?>