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
    $I = 15;
    $II = 13;
    $III = 26;
    $IV = 17 ;
    $total = $I + $II + $III + $IV;
    echo "คะแนนสอบทั้งหมด : $total คะแนน<br>";
    switch($total){
        case ($I > 25);
            echo "ครั้งที่1 มีคะแนนเกิน <br>";
            break;
        case ($II > 25);
            echo "ครั้งที่ 2 มีคะแนนเกิน <br>";
            break;
        case ($III > 25);
            echo "ครั้งที่3 มีคะแนนเกิน<br>";
            break;
        case ($IV > 25);
            echo "ครั้งที่4 มีคะแนนเกิน <br>";
            break;
        case ($total >= 80 && $total <= 100 );
            echo "เกรด A  <br>";
            break;
        case ($total >= 75 && $total <= 79 );
            echo "เกรด B+  <br>";
            break;
        case ($total >= 70 && $total <= 74 );
            echo "เกรด B  <br>";
            break;
        case ($total >= 65 && $total <= 69 );
            echo "เกรด C+  <br>";
            break;
        case ($total >= 60 && $total <= 64 );
            echo "เกรด C  <br>";
            break;
        case ($total >= 55 && $total <= 59 );
            echo "เกรด D+  <br>";
            break;
        case ($total >= 50 && $total <= 54 );
            echo "เกรด D  <br>";
            break;
        case ($total < 50);
            echo "เกรด F  <br>";
            break;
    }
    ?>

</body>
</html>