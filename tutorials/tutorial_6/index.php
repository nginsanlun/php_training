<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="photo-form">
    <h1 class="mb-5">Image Upload</h1>
    <?php if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning">
           Cannot upload File            
        </div>
    <?php endif ?>
    <?php if(file_exists('./tutorial_6/photos/profile.jpg')) : ?>
        <input type="text" value="./tutorial_6/photos/profile.jpg" class="img-thumnail mb-3">
    <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </div>
    </form>
    </div>
</body>
</html>