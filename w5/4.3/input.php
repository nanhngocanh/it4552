<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance</title>
</head>

<body>
    <h3>The page that calulates the distances from Chicago!</h3>
    <form action="output.php" method="POST">
        <select name='destinations[]' multiple>
            <?php
            $cities = array('Boston', 'Dallas', 'Las Vegas', 'Miami', 'Nashville', 'Pittsburgh', 'San Francisco', 'Toronto', 'Washington, DC', 'Hanoi', 'Haiphong');
            foreach ($cities as $item) {
                // print("<input type=\"checkbox\" value=\"$item\" name=\"destinations[]\"> $item<br>");

                print "<option>$item</option>";
            }
            ?>
        </select>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>