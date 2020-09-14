<?php
$a=10;
$b=5;
echo "<b>";
echo "chiều dài hình chữ nhật là:".$a;echo "m";echo "</b>";echo "</br>";
echo "<b>";
echo "chiều rộng hình chữ nhât là:".$b;echo "m";echo "</b>";echo "</br>";

function add($a,$b){
    $cv=($a+$b)/2;
    return $cv;
}
$cv=add($a,$b);
echo "<b>";
echo "chu vi hình chữ nhật là:".$cv;echo "m";echo "</b>";echo "</br>";
function add1($a,$b){
    $dt=($a*$b);
    return $dt;
}
$dt=add1($a,$b);
echo "<b>";
echo "diện tích hình chữ nhật là:".$dt;echo "m";echo "</b>"; echo "<sup>";echo "2" ;echo "</sup>"

?>