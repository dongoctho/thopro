<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="5.css">
    <title>Document</title>
</head>
<body>
<form action="hienthi.php" method="POST" enctype="multipart/form-data" >
<body>
    <h1 style= "margin-top:100px;margin-bottom:50px;Text-align: center; color: rgb(255, 235, 10)">THÀNH CÔNG!!</h1>
    <table style="margin-left: auto; margin-right: auto;margin-top:50px;margin-bottom:100px">
    <br>
    <td><input type="submit" value="Xem Kết Quả" style="color:rgb(0, 0, 255);Text-align: center"></td>
    <br>
    <td><button type="button" onclick="quay_lai_trang_truoc()" style="color:rgb(255, 0, 0);Text-align: center">Quay lại</button></td>
    <script>
    function quay_lai_trang_truoc(){
        history.back();
    }
    </script>
    </table>
    </form>
<?php
    $id = (isset($_GET['id']))?$_GET['id']:0;
    $username = (isset($_POST['username']))?$_POST['username']:"";
    $password = (isset($_POST['password']))?$_POST['password']:"";
    $nhaplaipassword = (isset($_POST['nhaplaipassword']))?$_POST['nhaplaipassword']:"";
    $sex = (isset($_POST['gioitinh']))?$_POST['gioitinh']:"";
    $birthday = (isset($_POST['ngaysinh']))?$_POST['ngaysinh']:"";
    $address = (isset($_POST['diachi']))?$_POST['diachi']:"";
    $gioitinh = (isset($_POST['sothich']))?$_POST['sothich']:"";
    $hinhanhpath = (isset($_POST['avatar']))?$_POST['avatar']:"";
    $hobby = "";
    
    
    if(is_array($gioitinh)){
        foreach ($gioitinh as $value){
            // echo 'value: '.$value.'<br>'; 
            $hobby = $hobby.' - '.$value;
    
        }
    }
    // echo 'h: '.$hobby;
    // $avatar = $_POST['avatar'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
    $uploadOk = 0;
    }

    if ($_FILES["avatar"]["size"] > 5000000) {
    $uploadOk = 0;
    }

    if ($uploadOk == 0) {
    } else {
    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
    } else {
    }
    }
    $hinhanhpath = "http://localhost/hochtml/uploads/" . basename($_FILES["avatar"]["name"]);
    //echo '<img src="' .$hinhanhpath.'" alt="">';



    // echo '<br>Tên: '.$username.'<br>';
    // echo 'Mat khau: '.$password.'<br>';
    // echo 'nhap lai mat khau: '.$nhaplaipassword.'<br>';
    // echo 'gioi tinh: '.$gioitinh.'<br>';
    // echo 'ngay sinh: '.$ngaysinh.'<br>';
    // echo 'dia chi: '.$diachi.'<br>';
    // echo 'avatar: '.$avatar.'<br>';
    // echo 'so thich: '.'<br>';
    // var_dump($sothich);

//kết nối
    $servername = "localhost";
    $username_sql = "root";
    $password_sql = "";
    $dbname = "demo";
    // Create connection
    $conn = new mysqli($servername, $username_sql, $password_sql, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
       // echo "Connected successfully";
        // tạo câu truy vấn 
    
        
        if($id>0){
            echo 'ID ' .$id;
            $sql = "UPDATE user SET username='$username',password='$password',repassword='$nhaplaipassword',sex='$sex',birthday='$birthday',address='$address',hobby='$hobby' WHERE id=$id";
            //insert db
            if ($conn->query($sql) === TRUE) {
           // echo "record updated successfully";
            } else {
               // echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else{
            $sql = "INSERT INTO user (username, password, repassword, sex, birthday, address, hobby, avatar)
        VALUES ('$username', '$password', '$nhaplaipassword','$sex','$birthday','$address','$hobby','$hinhanhpath')";
        //insert db
        if ($conn->query($sql) === TRUE) {
       // echo "New record created successfully";
        }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
       
        $conn->close();
    
    
        ?>
    
        
    </body>
    </html>