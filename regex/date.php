<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Input date (mm/dd/yyy) :</label><br>
        <input type="text" size="10" maxlength="10" name="date"><br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    <?php
    $month = "(0[1-9])|(1[0-2])";
    // $month = "[0-1][[:digit:]]";
    $day = "(0[1-9])|([1-2][[:digit:]])|(3[0-1])";
    // $day = "[0-3][[:digit:]]";
    $year = "2[[:digit:]]{3}";
    if (array_key_exists('date', $_POST)) {
        $date = $_POST["date"];
        if (preg_match("/^($month)\/($day)\/($year)$/", $date)) {
            list($m, $d, $y) = explode('/', $date);
            if ($m == 2) {
                if ((($y % 4 == 0) && ($y % 100 != 0)) || ($y % 400 == 0)) {
                    if ($d == 29) {
                        print "Valid date : $date";
                    } else  print "Illegal day specifed Day=$d";
                } else if ($d == 28) {
                    print "Valid date : $date";
                } else  print "Illegal day specifed Day=$d";
            } else if ($m == 4 || $m == 6 || $m == 9 || $m == 11) {
                if ($d == 31) {
                    print "Valid date : $date";
                } else print "Illegal day specifed Day=$d";
            } else if ($d == 31) {
                print "Valid date : $date";
            } else print "Invalid date : $date";
        } else print "Invalid date : $date";
    }
    ?>
</body>

</html>