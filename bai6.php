<?php
$n=2;
function tong($n){
    $S=0;
    for($i=1;$i<=$n;$i++){
        $S+=$i;
    }
    return $S;
}
$S=tong($n);
echo "tong S(n) =".$S;

?>