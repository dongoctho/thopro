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
$ten = $_POST['ten'];
$dau = $_POST['dau'];
$cuoi = $_POST['cuoi'];
$tientt = 0;
$sodung = $cuoi - $dau;
if($sodung<0){
    echo 'Số điện cuối kì phải lớn hơn hoặc bằng đầu kì!';
}
else{
    if($sodung<=100){
        $tientt = $sodung * 1250;
    }
    if($sodung<=150){
        $tientt = 100 * 1250 + ($sodung-100)*1550;
    }
    if($sodung<=200){
        $tientt = 100 * 1250 + 50 * 1550 +($sodung-150)*1850;
    }
    else{
        $tientt = 100 * (1250 +(1550 + 1850)/2 - 4500) +  $sodung * 2250;
    }
    echo 'Số điện dùng: '.$sodung .'<br>'.'Cần thanh toán: '.$tientt;
}
?>
</body>
</html>