<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kết quả</title>
</head>
<body>
	<h1><b>Hiển thị thông tin đăng ký</b></h1>
	<?php 
         $name = $_POST['username'];
         $password = $_POST['password'];
         $repassword = $_POST['repassword'];
         $gioitinh = $_POST['gioitinh'];
         $ngaysinh = $_POST['ngaysinh'];
         $avatar = $_POST['avatar'];
         $sothich = $_POST['sothich'];
         echo 'tên đăng nhập: '.$name.'<br>';
         echo 'mật khẩu: '.$password.'<br>';
         echo 'repassword: '.$repassword.'<br>';
         echo 'giới tính: '.$gioitinh.'<br>';
         echo 'ngày sinh: '.$ngaysinh.'<br>';
         echo 'avatar: '.$avatar.'<br>';
         echo 'sở thích: '.$sothich.'<br>';

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
	 ?>
</body>
</html>