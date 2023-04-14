<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sorting</title>
</head>

<body>
    <?php
    function user_sort($a, $b)
    {
        // smarts is all-important, so sort it first
        if ($b == 'smarts') {
            return 1;
        } else if ($a == 'smarts') {
            return -1;
        }
        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }
    $values = array(
        'name' => 'Buzz Lightyear',
        'email_address' => 'buzz@starcommand.gal',
        'age' => 32,
        'smarts' => 'some'
    );
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td><input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort</td>
                <td><input type="radio" name="sort_type" value="rsort" /> Reverse sort</td>
                <td><input type="radio" name="sort_type" value="usort" /> User-defined sort</td>
            </tr>
            <tr>
                <td><input type="radio" name="sort_type" value="ksort" /> Key sort</td>
                <td><input type="radio" name="sort_type" value="krsort" /> Reverse key sort</td>
                <td><input type="radio" name="sort_type" value="uksort" /> User-defined key sort</td>
            </tr>
            <tr>
                <td><input type="radio" name="sort_type" value="asort" /> Value sort</td>
                <td><input type="radio" name="sort_type" value="arsort" /> Reverse value sort</td>
                <td><input type="radio" name="sort_type" value="uasort" /> User-defined value sort</td>
            </tr>
            <tr></tr>
            <tr>
                <td></td>
                <td align="center"><input type="submit" value="Sort" name="submitted" /></td>
            </tr>
        </table>
        <p>
            Values unsorted
        </p>
        <ul>
            <?php
            foreach ($values as $key => $value) {
                echo "<li><b>$key</b>: $value</li>";
            }
            ?>
        </ul>
    </form>
    <?php
    if (isset($_POST["sort_type"])) {
        $value = $_POST["sort_type"];
        switch ($value) {
            case 'usort':
                usort($values, 'user_sort');
                break;
            case 'uksort':
                uksort($values, 'user_sort');
                break;
            case 'uasort':
                uasort($values, 'user_sort');
                break;
            case 'sort':
                sort($values);
                break;
            case 'rsort':
                rsort($values);
                break;
            case 'ksort':
                ksort($values);
                break;
            case 'krsort':
                krsort($values);
                break;
            case 'asort':
                asort($values);
                break;
            case 'arsort':
                arsort($values);
                break;
        }
    }
    ?>
    <?php
    print("Values sorted by $value </br>");
    ?>
    <ul>
        <?php
        foreach ($values as $key => $value) {
            echo "<li><b>$key</b>: $value</li>";
        }
        ?>
    </ul>
</body>

</html>