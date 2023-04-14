<?php
$pick = $_POST["pick"];
$value = $_POST["value"];
if($pick == 0){
    $degrees = $value * 180/3.14;
    print "$value Radian = $degrees Degrees";
}elseif ($pick == 1){
    $radian = $value * 3.14/180;
    print "$value Degrees = $radian Radian";
}else{
    print "<br>Illegal state error!";
}
?>