<?php
function getAge($d){
    //explode the date to get month, day and year
    $d = explode("/", $d);
    //get age from date or birthdate
    $age = (date("md", date("U", mktime(0, 0, 0, $d[0], $d[1], $d[2]))) > date("md")
        ? ((date("Y") - $d[2]) - 1)
        : (date("Y") - $d[2]));
    return $age;
}
$name = $_POST["name"];$name2 = $_POST["name2"];
$date = $_POST["date"];$date2 = $_POST["date2"];

echo "<br>Name: $name <br>Birthday: " . date("l,F d,Y",$date) . "(" . getAge($date) . " olds)";

echo "<br>Name: $name2 <br>Birthday: " . date("l,F d,Y",$date2) . "(" . getAge($date2) . " olds)";
?>
