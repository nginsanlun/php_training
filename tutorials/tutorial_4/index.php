<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial 4</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login-form">
  <?php if (isset($_GET['incorrect'])) : ?>
    <div class="alert alert-warning">
      Incorrect Email or Password
    </div>
  <?php endif ?>
    <form name="frmUser" method="post" action="login.php">
      <h2 class="text-center">Log in and Logout</h2> 
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </div>
      <div class="form-group">
        <input type="password" autocomplete="off" class="form-control" placeholder="Password" name="password" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" value="login">Log in</button>
      </div>
    </form>
  </div>
</body>
</html>