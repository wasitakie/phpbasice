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
    //sort=========================================================================================
    $fan = array("Hatari","Xiomi","yoobao");
    sort($fan);

    $clength = count($fan);
    for($x=0;$x<$clength;$x++){
        echo $fan[$x];
        echo "<br>";
    }
    echo"<br>";
    //rsot=========================================================================================
    $fan = array("Hatari","Xiomi","yoobao");
    rsort($fan);

    $clength = count($fan);
    for($x=0;$x<$clength;$x++){
        echo $fan[$x];
        echo "<br>";
    }
    echo"<br>";
    //asort=========================================================================================
    $fan = array("Hatari"=>"1000","Xiomi"=>"5000","yoobao"=>"10000");
    asort($fan);

    
    foreach($fan as $x =>$x_value){
        echo "Key=".$x .",Value=". $x_value;
        echo "<br>";
    }
    echo"<br>";
    //ksort=========================================================================================
    $fan = array("Hatari"=>"1000","Xiomi"=>"5000","yoobao"=>"10000");
    ksort($fan);

    
    foreach($fan as $x =>$x_value){
        echo "Key=".$x .",Value=". $x_value;
        echo "<br>";
    }
    echo"<br>";
    //arsort=========================================================================================
    $fan = array("Hatari"=>"1000","Xiomi"=>"5000","yoobao"=>"10000");
    arsort($fan);

    
    foreach($fan as $x =>$x_value){
        echo "Key=".$x .",Value=". $x_value;
        echo "<br>";
    }
    echo"<br>";
    //krsort=========================================================================================
    $fan = array("Hatari"=>"1000","Xiomi"=>"5000","yoobao"=>"10000");
    krsort($fan);

    
    foreach($fan as $x =>$x_value){
        echo "Key=".$x .",Value=". $x_value;
        echo "<br>";
    }
    echo"<br>";
    ?>
</body>
</html>