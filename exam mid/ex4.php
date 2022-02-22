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

$num = array(16, 25, 59, 58, 21);
$sum = 0 ;
for ($i=0;$i<5;$i++){
  $sum = $sum+$num[$i];
} echo " ผลรวม = $sum";

?>
</body>
</html>