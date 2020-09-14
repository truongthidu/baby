<?php
$a=6;
echo "<b>";
echo "đường kính hình tròn:".$a;echo "m";echo "</b>";echo "</br>";
function add($a){
    $cv=3.14*$a;
    return $cv;
}
$cv=add($a);
echo "<b>";
echo "chu vi hình tròn là:".$cv;echo "m";echo "</b>";echo "</br>";


function add1($a){
    $dt=3.14*pow($a/2,2);
    return $dt;
}
$dt=add1($a);
echo "<b>";
echo "diện tích hình tròn là:".$dt;echo "m";echo "<sup>";echo "2";echo "</sup>"; echo "</b>";echo "</br>";
?>