<?php
//Ex1
$cars=array("Volvo","BMW","Toyota","Honda");
echo "I like" . $cars[0] . "," . $cars[1] . "and"
. $cars[2] . ".";
echo ("<br>");
echo "I like $cars[0] , $cars[1] and $cars[2] .";
echo "<br>";
for ($i=0;$i<count($cars);$i++){
    echo ("$cars[$i]<br>");
}

//Multidimensional Arrays [EX.2]
$cars1 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

//Sort Array [Ex.3]
sort($cars);
for ($i=0;$i<count($cars);$i++){
    echo ("$cars[$i]<br>");
}
?>