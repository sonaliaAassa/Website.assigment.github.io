<?php
    if(isset($_FILES['b_image'])){
        echo '<pre>';
        print_r($_FILES['b_image']);
        echo '</pre>';
        move_uploaded_file($_FILES['b_image']['tmp_name'],'./img/'.$_FILES['b_image']['name']);
    }
?>