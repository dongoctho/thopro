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
    $tienrut = $_POST['input-money'];
    if($tienrut%50000!=0){
        echo 'Số tiền rút phải là bội của 50000' ;
    }
    else if ($tienrut % 500000 == 0){
        echo 'Số tiền rút được là: ' . $tienrut/500000 . '  tờ 500k  ';
    }
    else{

        $d = $tienrut % 500000;
        
        if($d%200000 == 0){
            echo 'Số tiền rút được là: ' . $tienrut/500000 . '  tờ 500k  ' . ' , ' . $d/200000 . '  tờ 200k  '  ;
        }
        else {
            $d1 = $d % 200000;
            if($d1 % 100000 == 0){
                echo 'Số tiền rút được là: ' . $tienrut/500000 . '  tờ 500k  ' . ' , ' . $d/200000 . '  tờ 200k  ' . ' , ' . $d1/100000 . '  tờ 100k  ';
            }
            else{
                $d2 = $d1 % 100000;
                if($d2!=0){
                echo 'Số tiền rút được là: ' . $tienrut/500000 . '  tờ 500k  ' . ' , ' . $d/200000 . '  tờ 200k  ' . ' , ' . $d1/100000 . '  tờ 100k  ' . ' , '  . $d2/50000 . '  tờ 50k  ';
                }   
            }
        }
    }
    ?>
</body>
</html>