<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
 
if ($email === 'san@test.com' and $password === 'san123'){     
    $_SESSION['email'] = ['email' => 'san@test.com'];
    echo "<h3 style='text-align:center'>Logged in successfully</h3>";
}
else{
  header('location: index.php?incorrect=1');
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
 