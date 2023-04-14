<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert item</title>
</head>

<body>
    <h2>Category administration</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '732001';
        $database = 'business_service';
        $table_name = 'categories';
        $connect = mysqli_connect($server, $user, $pass, $database);

        if (array_key_exists('catId', $_POST)) {
            $catId = $_POST['catId'];
            $desc = $_POST['desc'];
            $title = $_POST['title'];
            $query = "INSERT INTO $table_name VALUES ('$catId','$title','$desc')";
            // print("The query is <i>$query</i><br>");
            print '<br><font size="4" color="blue">';
            if (mysqli_query($connect, $query)) {
                print("Insert into $table_name was successful!</font>");
            } else {
                print("Insert into $table_name failed!</font>");
            }
        }

        $query = "SELECT * FROM $table_name";
        $results_id = mysqli_query($connect, $query);
        if ($results_id) {
            print '<table border=1>';
            print '<th>CatID<th>Title<th>Desc';
            while ($row = mysqli_fetch_row($results_id)) {
                print '<tr>';
                foreach ($row as $field) {
                    print "<td>$field</td> ";
                }
                print '</tr>';
            }
            print('
        
        ');
            mysqli_free_result($results_id);
        } else {
            die("Query=$query failed!");
        }

        // mysqli_close($connect);
        ?>
        <tr>
            <td><input name="catId"></td>
            <td><input name="desc"></td>
            <td><input name="title"></td>
        </tr>
        </table>
        <input type="submit" value="Submit"><input type="reset" value="Reset">
    </form>
</body>

</html>