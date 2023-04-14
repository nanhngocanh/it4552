<form action="GuessANumber.php" method="post">
    <label for="num">Enter a number: </label>
    <input type="text" id="num" name="inp">
    <button type="submit">Submit</button>
</form>

<?php

$high = "Wrong. Please try a higher number. You have guessed ";
$low = "“Wrong. Please try a lower number. You have guessed ";

session_start();

if(!isset($_SESSION["rand"])) {
    try {
        $_SESSION["count"] = 1;
        $_SESSION["rand"] = random_int(0, 101); // [0, 101)
    } catch (Exception $e) {
    }
} else {
    $_SESSION["count"] = $_SESSION["count"] + 1;
}

$rand = $_SESSION["rand"];
$inp = $_POST["inp"];

if (is_numeric($inp)) {
    if ($inp > $rand) {
        echo $low . $_SESSION["count"] . " time!";
    } elseif ($inp < $rand) {
        echo $high . $_SESSION["count"] . " time!";
    } else {
        echo "Success. You have guessed " . $_SESSION["count"] . " time!";
        session_destroy();
    }
} elseif ($inp) {
    echo "You must enter a number!";
}

?>