<!DOCTYPE html>
<?php
$linkTo = $_REQUEST['LinkTo'];
$userName = $_POST["UserName"];
$password = $_POST["password"];

if (isset($userName)) {
    $host = 'localhost';
    $user = 'root';
    $passwd = '732001';
    $database = 'lab12';
    $table_name = 'users';
    $query = "SELECT * FROM $table_name WHERE Username = '$userName' AND Password='$password'";
    $connect = mysqli_connect($host, $user, $passwd);

    if ($connect) {
        // mysqli_select_db($database);
        // $result = mysqli_query($query, $connect);

        $row = mysqli_fetch_row($result);
        if ($result && $row) {
            if ($linkTo != '') {
                // header("Location : ".$linkTo);
            }
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>