<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
input[type=number] {
    width: 50px;
    text-align: center;
}
</style>
</head>

<body>
<?php if(!$_POST) { ?>
<form method="post" action="">
    คู่ที่ 1 : <input type="number" name="k1_n1" required />
           <input type="number" name="k1_n2" required /><br>
    คู่ที่ 2 : <input type="number" name="k2_n1" required />
           <input type="number" name="k2_n2" required /><br>
    คู่ที่ 3 : <input type="number" name="k3_n1" required />
           <input type="number" name="k3_n2" required /><br>
  <input type="submit">
</form>
<?php } ?>
<?php
if(($_POST)) {
    echo "<b>ข้อมูล</b><br>";
    $kn[1][1] = isset($_POST["k1_n1"]);
    $kn[2][1] = isset($_POST["k2_n1"]) ;
    $kn[3][1] = isset($_POST["k3_n1"]) ;
   

    $k[1] = $kn[1][1] + $kn[2][1];
    $k[2] = $kn[1][1] + $kn[3][1];
    $k[3] = $kn[2][1] + $kn[3][1];

  /*  
    echo("คู่ที่ 1   $k[1] + $k[2]" = $k[1] ");
        echo("<br>");
        echo("คู่ที่ 2  $k[2] + $k[3]" = $k[2]");
        echo("<br>");
        echo("คู่ที่ 3  $k[2]+ $k[3]" = $k[3]");
        echo("<br>");
    echo "----------------------------------<br>";
    echo "<b>คู่ที่บวกกันได้มากที่สุดคือ</b><br>";
    echo "คู่ที่ ".array_search(max($k), $k).
         " บวกกันได้เท่ากับ ".max($k)."<br>";
    echo "----------------------------------<br>";
    echo "<b>คู่ที่บวกกันได้น้อยที่สุดคือ</b><br>";
    echo "คู่ที่ ".array_search(min($k), $k).
         " บวกกันได้เท่ากับ ".min($k);
}*/
?>

   
</body>
</html>