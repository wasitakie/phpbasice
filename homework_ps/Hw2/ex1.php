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
$birthYear = 2540;  
    echo "ปีเกิดของนักกีฬาวิ่ง : $birthYear <br>";

    $currentYear = 2564;
    echo "ปีพ.ศ.ปัจจุบัน : $currentYear <br>";

    $age = $currentYear-$birthYear ;
    echo "อายุของนักกีฬาวิ่ง : $age <br>";

    if($age > 0){
        echo "กีฬารุ่นที่ 1<br>";
    }elseif($age > 20 && $age < 30){
        echo "กีฬารุ่นที่ 2<br>";
    }else{
        echo "กีฬารุ่นที่ 3<br>";
    }
    ?>
</body>
</html>