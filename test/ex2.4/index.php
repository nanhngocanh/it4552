<html>
    <head>
        <title> Output </title>
    </head>
    <body>
        <?php
        
        $firstName = $_GET["firstName"];
        $midName = $_GET["midName"];
        $lastName = $_GET["lastName"];
        $mid = $_GET["mid"];
        $final = $_GET["final"];
        $avg = $mid * 0.3 + $final * 0.7;
        printf ("Hi $lastName! Your full name is $firstName $midName $lastName.<br>");

        if ($firstName == $lastName) {
            printf ("$firstName and $lastName are equal<br>");
        }
        if ($firstName < $lastName) {
            printf ("$firstName is less than $lastName<br>");
        }
        if ($firstName > $lastName) {
            printf ("$firstName is greater than $lastName<br>");
        }
        printf ("Your final grade is : %.lf<br>",$avg);

        if ($avg >= 8.5) {
            printf ("You got an A. Congratulation!");
        } elseif ($avg >= 7) {
            printf ("You got an B");
        } elseif ($avg >= 5.5) {
            printf ("You got an C");
        } elseif ($avg >= 4) {
            printf ("You got an D");
        } else printf ("You got an F");
        
        ?>
    </body>
</html>