<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split</title>
</head>

<body>
    <?php
    $line = 'Baseball, hot dogs, apple pie';
    $item =  explode(',', $line);
    print("0=$item[0] 1=$item[1] 2=$item[2]<br>");

    $line = 'AA1234:Hammer:122:12';
    list($partno, $part, $num, $cost) = explode(':', $line, 4);
    print "partno=$partno part=$part num=$num cost=$cost";
    ?>
</body>

</html>