<?php
//array
$cars = array("Volvo", "BMW", "Toyota");
echo ($cars[0]);
echo "<br>";
echo ($cars[1]);
echo "<br>";
echo ($cars[2]);
echo "<br>";
for($i=0;$i<count($cars);$i++){
    echo ($cars[$i]);
    echo "<br>";
}
//Associarive Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "Ben is " . $age['Ben'] . " years old.";
echo "Joe is " . $age['Joe'] . " years old.";
//Aultidimensional Arrays มิติ
$cars1 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold: ".
  $cars1[0][2].".<br>";
  echo $cars1[1][0].": In stock: ".$cars1[1][1].", sold: ".
  $cars1[1][2].".<br>";
  echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold: ".
  $cars1[2][2].".<br>";
  echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold: ".
  $cars1[3][2].".<br>";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>