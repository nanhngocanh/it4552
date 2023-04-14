<html>
    <head>
        <title> Output </title>
    </head>
    <body>
        <?php
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
        
        ?>
    </body>
</html>