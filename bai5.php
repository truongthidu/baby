<?php
//$n=10;
//function tong($n){
//   $S=$0;
//
//    for($i=1;$i<=$n;$i++)
//    {
//        $S+=1/$i;
//    }
//    return $S;
//}
//$S=tong($n);
//echo "tong cuar hamf S(n):".(float)$S;
$result='';

if(isset($_POST['submit']))
{
    $n=$_POST['n'];
    function tong($n)
    {
        $s=0;
        for($i=1;$i<=$n;$i++)
        {
            $s+=1/$i;
        }
        return $s;
    }
$s=tong($n);
    $result.="tong la:$s";

}
echo "<h3 style='color:red'>$result</h3>";
?>
<form>
    nhap n:<input type="number" name="n" value=""><br>
    <input type="submit" name="submit" value="save">

</form>
