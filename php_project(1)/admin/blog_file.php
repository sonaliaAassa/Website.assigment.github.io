<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="blog_upload.php" method="POST" enctype="multipart/form-data">
        <label>b_image</label>
            <input type="file"   name="b_image">
            <button name="upload">Submit</button>    
            <?php
            if(isset($_GET['error'])){
                echo "<p>".$_GET['error']."</p>";
            }
        ?>
    </form>
    <?php
        if(isset($_POST['upload'])){
            $_FILES['profile'];
        }
    ?>
</body>
</html>