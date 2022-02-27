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
    $birthyear = 2000;
    $currentyear = 2021; 
    $age = $currentyear - $birthyear ;
        echo"อายุของคุณ \n". $age ."<br>";
    
    if ($age > 30 ){
        echo "กีฬาที่เลือกได้ 1.ไม่จำกัดอายุ";
    } else if ($age <= 30 & $age >=20 ){
        echo "กีฬาที่เลือกได้ 1.ไม่จำกัดอายุ 2.อายุ 20 ปีขึ้นไป";
    } else
        echo"ก๊ฬาที่เลือกได้ 1.ไม่จำกัดอายุ 2.อายุต่ำกว่า 20 ปี"
    ?>
</body>
</html>