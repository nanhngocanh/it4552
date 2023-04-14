<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">Type here to search : </label>
        <input name="text"><br>
        <input type="submit" value="Submit"><input type="reset" value="Reset">

    </form>

    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '732001';
    $database = 'php_test';
    $table_name = 'Products';
    $connect = mysqli_connect($server, $user, $pass, $database);
    if (array_key_exists('text', $_POST)) {
        $text = $_POST['text'];
        print("<h2>$table_name</h2>");

        $query = "SELECT * FROM $table_name where (Product_desc like '%$text%')";
        print "The query is <i>$query </i><br>";
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            print '<table border=1>';
            print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
            mysqli_free_result($results_id);
        } else {
            die("Query=$query failed!");
        }
        mysqli_close($connect);
    }

    ?>
    </table>
</body>

</html>