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
    $Test1 = 25;
    $Test2 = 5;
    $Test3 = 10;
    $Test4 = 25;
    if ($Test1 > 25 || $Test2 > 25 || $Test3 > 25 || $Test4 > 25){
        echo "มีคะแนนเกินนะจ๊ะ","<br>";
    } else{
        echo "คะแนนไม่เกิน","<br>";}
    $total = $Test1 + $Test2 + $Test3 + $Test4;
        echo "คะแนนรวมทั้งหมด" , $total, "<br>";
    if ($total >= 80) {
        echo "Your grade is A.";    
    } else if ($total >= 75) {
        echo "Your grade is B+.";    
    } else if ($total >= 70) {
        echo "Your grade is B.";    
    } else if ($total >= 65) {
        echo "Your grade is C+.";
    } else if ($total >= 60) {
        echo "Your grade is c.";
    } else if ($total >= 55) {
        echo "Your grade is D+.";
    } else if ($total >= 50) {
        echo "Your grade is D.";    
    } else {
        echo "Sorry, you got grade F."; 
    }
    ?>
</body>
</html>