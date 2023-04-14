<!DOCTYPE html>
<html lang="en">

<head>
    <title>Guess a number</title>
</head>

<body>
    <p>
    <form action="" method="post">
        <label for="inputNumber">Enter a number</label><br>
        <input type="text" name="inputNumber">
        <br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    </p>

    <?php
    $randNumber = rand(1, 100);
    $inputNumber = '';
    if (isset($_POST['submit'])) {
        $inputNumber = $_POST['inputNumber'];
        if (!is_numeric($inputNumber)) {
            echo "You must enter a number!";
        } elseif ($inputNumber < $randNumber) {
            echo "<br>Wrong. Please try a higher number. You have guessed 1 time!";
        } elseif ($inputNumber > $randNumber) {
            echo "<br>Wrong. Please try a lower number. You have guessed 1 time!";
        } elseif ($inputNumber == $randNumber) {
            echo ("<br>Bingo!!!!!!!");
        } 
    }

    ?>






</body>

</html>