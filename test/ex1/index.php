<html>
    <head>
        <title> Receiving Input </title>
    </head>
    <body>
        <?php
        $first = $_GET["first"];
        $second = $_GET["second"];
        $max = $first > $second ? $first : $second;
        $avg = ( $first + $second ) / 2;
        print ("<br> Average score : $avg.");
        if ($avg >= 89) {
            print ("<br>You got an A!");
        }
        print ("<br> Your max score was $max.");
        ?>
    </body>
</html>