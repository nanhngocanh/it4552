<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional lists</title>
</head>
<body>
    <h3>Hardware Harry's Inventory Information</h3>
    <p>Select part number for more information</p>
    <form action="output.php" method="post">
        <input type="radio" name="id" value="AC1000"> AC1000
        <input type="radio" name="id" value="AC1001"> AC1001
        <input type="radio" name="id" value="AC1002"> AC1002
        <input type="radio" name="id" value="AC1003"> AC1003
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>