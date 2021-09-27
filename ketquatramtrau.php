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
for($x=1; $x<=20;$x++){
    for($y=1;$y<=33;$y++){
        $z = 100 - $x -$y;
        if(5*$x+3*$y+$z/3 == 100 && $z%3==0){
            echo "so trau dung ".$x;
            echo "<br>";
            echo "so trau nam ".$x;
            echo "<br>";
            echo "so trau gia ".$x;
            echo "<br>";
        }
    }
} 
?>
</body>
</html>