
<?php
       $email = $_POST['email'];
       $password = $_POST['password'];

       $conn = mysqli_connect('localhost','root','','php_project');

      $sql = " INSERT INTO login (`email`, `password`) VALUES ('{$email}','{$password}')";

      $run = mysqli_query($conn,$sql);

      if ($run) {
        header('location:admin/index.php');
      }else{
        header('location:login.php?error=registrat ion Failed');
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>login reciever</title>
</head>
<body>
  <main>
  <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 login">
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Sign In Reciever</header>
                        <form method="POST" action= '<?php echo $_SERVER['PHP_SELF']; ?>'>
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" class="input" id="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <button name="submit" class="submit">Sign In</button>
                            </div>
                        </form>
                        <?php
                             if(isset ($_POST ['button'])){
                                 $_POST['email'];
                                 $_POST['password'];
                             }
                           ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </main>
</body>

</html>