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
    $x=45;
        if($x<="40"){
            echo "บริษัทจ้างในอัตราขั่วโมงละ100บาท";
            $r=$x *100;
            echo "<br>";
            echo "ได้รับค่าจ้าง $r ";
            echo "<br>";
        }else{
            echo "บริษัทจ้างในอัตราขั่วโมงละ150บาท";
            $r=$x*150;
            echo "<br>";
            echo "ได้รับค่าจ้าง $r ";
            echo "<br>";
        }
        echo $r ;
    ?>
</body>
</html>