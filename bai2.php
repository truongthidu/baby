<?php
$a=12;
echo "<b>";
echo "cạnh hình vuông:".$a; echo "m";echo "</b>";echo "</br>";
function tinh($a){
    $cv=4*$a;
    $dt=$a*$a;

    return $cv;

}
$cv=tinh($a);
echo "<b>";
echo "chu vi hình vuông là :".$cv;echo"m";echo "</b>"; echo "</br>";

function tinh1($a){
//    $cv=4*$a;
    $dt=$a*$a;

    return $dt;

}
$dt=tinh1($a);
echo "<b>";
echo "dien tich hinh vuông:".$dt;echo "m";echo "<sup>";echo "2";echo "</sup>"; echo "</b>";

?>