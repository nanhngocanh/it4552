<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IT4552</title>
</head>
<body>
    <div>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $server = 'localhost';
        $user = 'root';
        $pass = '732001';
        $userTable = 'user';
        $database = 'it4552';
        $table_name = 'Product';
        $connect = mysqli_connect($server, $user, $pass, $database);
        $searchUser = mysqli_query($connect, "SELECT * FROM $userTable where username = '$username' and password = '$password'");
        $isUser = mysqli_fetch_row($searchUser);
        if ($searchUser && $isUser) {
            mysqli_free_result($searchUser);
            print '<h2>Tìm kiếm sản phẩm</h2>
                    <form method="post">
                        Nhập tên hãng: <input type="text" name="brand"> <br>
                        Nhập khoảng giá: từ <input type="number" name="start">
                        đến<input type="number" name="end"><br>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>';
        } else print 'Tài khoản hoặc mật khẩu không đúng';
        ?>
    <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $server = 'localhost';
        $user = 'root';
        $pass = '732001';
        $userTable = 'user';
        $database = 'it4552';
        $table_name = 'Product';
        $connect = mysqli_connect($server, $user, $pass, $database);
        if (array_key_exists('brand', $_POST)) {
            $brand = $_POST['brand'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $query = "SELECT * FROM $table_name where brand like '%$brand%' and price >= $start and price <= $end";
            $results_id = mysqli_query($connect, $query);
            if ($results_id) {
                print '<table border=1>';
                print '<th>ID<th>Brand<th>Name<th>Color<th>Price<th>Image';
                while ($row = mysqli_fetch_row($results_id)) {
                    print '<tr>';
                    for ($i=0; $i < 6; $i++) { 
                        if ($i == 5) {
                            print "<td><img src=\"$row[$i]\"></td>";
                        } else print "<td>$row[$i]</td> ";
                    }
                    print '</tr>';
                }
                mysqli_free_result($results_id);
            } else {
                die("Query=$query failed!");
            }
        }
        ?>

        </table>
    </div>
    <footer>
        Đinh Thị Ngọc Anh 20194469
    </footer>
</body>
</html>