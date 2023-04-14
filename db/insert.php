<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert results</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Item : </label>
        <input name="Item"><br>
        <label for="">Cost : </label>
        <input name="Cost"><br>
        <label for="">Weight : </label>
        <input name="Weight"><br>
        <label>Quantity : </label>
        <input name="Quantity"><br>
        <input type="submit" value="Submit"><input type="reset" value="Reset">

    </form>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '732001';
    $database = 'php_test';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass, $database);
    if (array_key_exists('Item', $_POST)) {
        $Item = $_POST['Item'];
        $Cost = $_POST['Cost'];
        $Weight = $_POST['Weight'];
        $Quantity = $_POST['Quantity'];
        $query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";
        print("The query is <i>$query</i><br>");
        print '<br><font size="4" color="blue">';
        if (mysqli_query($connect, $query)) {
            print("Insert into $database was successful!</font>");
        } else {
            print("Insert into $database failed!</font>");
        }
        mysqli_close($connect);
    }

    ?>
</body>

</html>