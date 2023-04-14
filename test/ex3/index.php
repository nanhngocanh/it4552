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
        print ("Hi $lastName! Your full name is $firstName $midName $lastName.<br>");

        if ($firstName == $lastName) {
            print ("$firstName and $lastName are equal<br>");
        }
        if ($firstName < $lastName) {
            print ("$firstName is less than $lastName<br>");
        }
        if ($firstName > $lastName) {
            print ("$firstName is greater than $lastName<br>");
        }
        print ("Your final grade is : $avg<br>");

        if ($avg >= 8.5) {
            print ("You got an A. Congratulation!");
        } elseif ($avg >= 7) {
            print ("You got an B");
        } elseif ($avg >= 5.5) {
            print ("You got an C");
        } elseif ($avg >= 4) {
            print ("You got an D");
        } else print ("You got an F");
        
        ?>
    </body>
</html>