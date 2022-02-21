<?php
if (isset($_POST['submit'])) {
    include('phpqrcode/phpqrcode/qrlib.php');
    $text = $_POST['text'];
    $folder = "images/";
    $file_name = "img_qr.png";
    $file_name = $folder.$file_name;
    QRcode::png($text,$file_name); 
    echo"<center><img src='images/img_qr.png'></center>";
}
?>