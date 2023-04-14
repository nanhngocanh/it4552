<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h3>First person : </h3>
        <div>
        <label for="name1">Enter Name</label><br>
        <input type="text" name="name1" id="">
        </div>

        <div>
        <label for="date1">Enter Birthday</label><br>
        <input type="date" name="date1" id="">
        </div>

        <br><h3>Second person : </h3>
        <div>
        <label for="name2">Enter Name</label><br>
        <input type="text" name="name2" id="">
        </div>

        <div>
        <label for="date2">Enter Birthday</label><br>
        <input type="date" name="date2" id="">
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
        <br>
    </form>

    <?php
        if(array_key_exists("name1", $_POST)) {
            $name1 =  $_POST["name1"];
            $name2 =  $_POST["name2"];
            $date1 = $_POST["date1"];
            $fullDate1 = date_create("$date1");
            $date2 = $_POST["date2"];
            $fullDate2 = date_create("$date2");

            function DiffDate($date1, $date2){
                $diff = strtotime($date1) - strtotime($date2);
                return abs(round($diff/86400));
            }

            $dateDiff = DiffDate($date1, $date2);
            $yearDiff = round(DiffDate($date1, $date2)/365);
            $age1 = round(DiffDate(date("Y-m-d"), $date1)/365);
            $age2 = round(DiffDate(date("Y-m-d"), $date2)/365);

            printf("First person : $name1, ");
            echo date_format($fullDate1,"l, F d, Y");
            print("<br>");
            printf("Second person : $name2, ");
            echo date_format($fullDate2,"l, F d, Y");
            print("<br>The difference in days between two dates: $dateDiff");
            print("<br>$name1 is $age1 years old");
            print("<br>$name2 is $age2 years old");
            print("<br>The difference years between two persons: $yearDiff");
        }
    ?>
</body>
</html>
