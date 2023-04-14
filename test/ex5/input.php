<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <?php
            
            print("Select start number<br>");
            print("<select name = \"start\">");
            for ($i=0; $i < 10; $i++) { 
                print("<option>$i</option>");
            }
            print("</select>");

            print("<br>Select end number<br>");
            print("<select name = \"end\">");
            for ($i=0; $i < 10; $i++) { 
                print("<option>$i</option>");
            }
            print("</select>");
        ?>
        <input type="submit" value="Send">

        <?php

        if (array_key_exists("start", $_GET)) {
            $start = $_GET["start"]; 
            $end = $_GET["end"];
            $a = $start;
            print ("<table border=\"1\">");
            while ($a <= $end) {
                $a2 = ($a*$a);
                $a3 = ($a*$a*$a);
                
                print ("<tr>");
                print ("<td>$a</td>");
                print ("<td>$a2</td>");
                print ("<td>$a3</td>");
                print ("</tr>");
                $a++;
            }
            print ("</table>");
        } 
        ?>
    </form>
</body>
</html>