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
$result = '';
if (isset($_POST['tinh']))
{
// Bước 1: Lấy thông tin
$a = isset($_POST['so1']) ? (float)trim($_POST['so1']) : '';
$b = isset($_POST['so2']) ? (float)trim($_POST['so2']) : '';

// Bước 2: Validate thông tin và tính toán
if ($a == ''){
$result = 'Bạn chua nhập số a';
}
else if ($b == ''){
$result = 'Bạn chưa nhập số b';
}
else if ($a == 0){
$result = 'Số a phải nhập khác 0';
}
else {
    echo 'ket qua= '.$result = -($b) / $a;

}
}
?>
<?php
echo $result;
?>
</body>
</html>