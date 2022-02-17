<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
 
if ($username == 'san' and $password == 'san123'){     
    $_SESSION['user'] = ['username' => 'san'];
    echo "Logged in successfully";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-form">
    <div class="form-group">
      <a href="logout.php">Logout
    </div>  
  </div>
</body>
</html>
 