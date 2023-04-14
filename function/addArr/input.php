<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <form action="output.php" method="post">
        <input type="radio" name="action" value="Add" > Add
        <input type="radio" name="action" value="Unknown" > Unknown <br>
        Enter Index: <input type="text" name="index" size=10> 
        Enter Value: <input type="text" name="value" size=10>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>