<?php
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
    header('location: ./index.php?error=file');
    exit();
} if ($type === "image/jpeg" or $type === "image/png") {
    move_uploaded_file($tmp, "photos/profile.jpg");
    header('location: ./index.php');
} else {
    header('location: ./index.php?error=type');
}
?>