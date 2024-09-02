<?php
$name = "Saurabh";
$Int = 10;
$Flo = 10.2;
$bool = true;
echo var_dump($name);
echo var_dump($Int);
echo var_dump($Flo);
echo var_dump($bool);
//var_dump is used to find the datatype


// declare array in php 
$arr = ["saurabh","golu","monu",10];
echo var_dump($arr);

$nul = null;
// echo var_dump($nul);


// create objects
//$user = new ClassName();

//Recourse
$connection = ftp_connect("127.0.0.1") or die("local host not found");
// echo var_dump($connection);

function marks($sub1,$sub2, $sub3, $sub4, $sub5){
    echo "$sub1 $sub2 $sub3 $sub4 $sub5";
}
marks("math","english","hindi","cs","bio")
?>