<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="7.css">
    <title>HIỂN THỊ KẾT QUẢ</title>

</head>
<body>
<tr>
            <h1 style= "margin-top:50px;margin-bottom:50px;Text-align: center; color: rgb(83, 235, 255)">DANH SÁCH NGƯỜI DÙNG</h1>
        </tr>
    <table style= "margin-left: auto; margin-right: auto">
    
        <tr>
            <th>TÊN ĐĂNG NHẬP</h1></th>
            <th>MẬT KHẨU</h1></th>
            <th>NHẬP LẠI MẬT KHẨU</h1></th>
            <th>GIỚI TÍNH</h1></th>
            <th>NGÀY SINH</h1></th>
            <th>ĐỊA CHỈ</h1></th>
            <th>SỞ THÍCH</h1></th>
            <th>ẢNH AVATAR</h1></th>
            <th>HÀNH ĐỘNG</h1></th>
        </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";
    $id = (isset($_GET['id']))?$_GET['id']:0;
 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql_delete = "";
    if($id > 0){
        $sql_delete = "delete from user where id = ".$id;
        if($conn->query($sql_delete)==true){
            // echo 'delete done!!';
        }else{
            // echo 'error delete!!'.$conn->error;   
        }

    }else{

    }

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?=$row["username"]?></td>
            <td><?=$row["password"]?></td>
            <td><?=$row["repassword"]?></td>
            <td><?=$row["sex"]?></td>
            <td><?=$row["birthday"]?></td>
            <td><?=$row["address"]?></td>
            <td><?=$row["hobby"]?></td>
            <td><img width="100px" src="<?=$row["avatar"]?>" alt=""></td>
            <td><a href="suadangki.php?id=<?=$row["id"]?>">SỬA</a>            
                <a href="hienthi.php?id=<?= $row["id"] ?>" onclick="return confirm('Bạn có muốn xóa không???');">Delete</a>
</form>

            </td>
        </tr>
        <?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();

    ?>
    <table>
</body>
</html>