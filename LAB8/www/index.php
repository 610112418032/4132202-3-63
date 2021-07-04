<?php

echo "Hello World!!";
$a = 5;
$b = "PENG";
$c = 8.32;

echo $a . $b;
echo "<br>";
echo $b . $c;
echo "<br>";
echo $c + $a;

$array = array(5,8.32,"PENG");
echo $array[1] . "<br>";
echo $array[2] . "<br>";

var_dump($array);

$array = array(array(3,2),8,"BRU");
var_dump($array);
echo $array[0][1];

// json
echo "<br>";
$json = array("A","B",3);
$jObj = json_encode($json);
var_dump($jObj);

echo "<br>";
$array = array("one"=>"Mon","two"=>"Tue","three"=>"Fri");
var_dump($array);
echo $array["two"] . "<br>";

echo "<br>";
$jStr = json_encode($array);
var_dump($jStr);

echo "<br>";
$jObj = json_decode($jStr);
echo $jObj->one . "<br>";

// control
if($a == "PENG"){
    echo "TRUE";
}
else{
    echo $a;
}


// short term of if
echo "<br>";
echo ($b == "peng")?"TRUE":$b;

echo "<br>";
for($i = 0; $i < 5; $i++){
    echo $i . ".)PENG" . "<br>";
}
echo "<br>";
foreach($jObj as $key => $val){
    echo $key . ":" . $val . "<br>";
}
echo "<hr>";
$i = 0;
while($i < 5){
    echo $i++ . "<br>";
}

try{
    $i = 10;
    echo $i/0;
    include "conDB.php";
}
catch(Exception $e){
    $e->getMessage();
}


?>
