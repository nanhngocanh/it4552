<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <h2>Product information</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Product code (use AB## format)</label><br>
        <input name="code"><br>
        <label>Description</label><br>
        <input name="desc"><br>
        <input type="submit" value="Send">
        <input type="reset" value="reset">
    </form>
    <?php
    $products = array(
        'AB01' => '25-Pound Sledgehammer',
        'AB02' => 'Extra Strong Nails',
        'AB03' => 'Super Adjustable Wrench',
        'AB04' => '3-Speed Electric Screwdriver'
    );
    if (array_key_exists('code', $_POST)) {
        $desc = $_POST["desc"];
        $code = $_POST["code"];
        if (preg_match('/boat|plane/', $desc)) {
            print 'Sorry, we do not sell boats or planes anymore';
        } else if (preg_match("/^AB/", $code)) {
            if (isset($products[$code])) {
                print "Code : $code<br>Description : $products[$code]";
            } else print 'Sorry, product code not found';
        } else {
            print 'Sorry, all our product codes start with AB';
        }
    }

    ?>
</body>

</html>