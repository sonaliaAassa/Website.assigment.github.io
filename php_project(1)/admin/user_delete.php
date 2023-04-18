<?php
    $conn = mysqli_connect('localhost','root','','acadamey') or die('mysql not connected'.mysqli_error());
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE `id`='{$id}'";
    $run = mysqli_query($conn,$query) or die("Mysql Query not run");
    if($run){
        echo "Data Inserted Successfully";
        mysqli_close($conn);
        header('location:index.php');
    }else{
        echo "Data Not Inserted Successfully";
    }
?>