<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$username = $_POST['username'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    

    echo 'Tên: '.$username.'<br>';
    echo 'Mat khau: '.$email.'<br>';
    echo 'nhap lai mat khau: '.$sdt.'<br>';
    echo 'gioi tinh: '.$diachi.'<br>';
}
?>
</body>
</html>