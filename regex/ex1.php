<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $part = "^AA100";
    $pattern = "/^\^AA/";
    if (preg_match($pattern, $part)) {
        print 'Match';
    } else {
        print 'No match';
    }
    ?>
</body>

</html>