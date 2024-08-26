<?php
$num = 153;
$newNum = $num;
$total = 0;
while($num > 0){
    $rem = $num % 10;
    $total = $total + ($rem*$rem*$rem);
    $num = (int)($num/10);
}
if($total == $newNum){
    echo "THis is an armstrom number";
}else{
    echo "THis is not an armstrom number";
}
?>