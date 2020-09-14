<?php
$n=5;
function sao($n){
    for($i=0;$i<=$n;$i++){
        for($j=0;$j<$i;$j++)
        {
            echo '*';

        }

    echo '</br>';
    }

}
echo "".sao($n);

?>