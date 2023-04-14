<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
        $index = $_POST["index"]; 
        $value = $_POST["value"];
        $action = $_POST["action"];
        session_start();
        if (!isset($_SESSION["invent"])) {
            $_SESSION["invent"] = array('Nuts'=>44, 'Nails'=>34, 'Bolts'=>31);
        }
        if ($action == 'Add') {
            if (isset($_SESSION["invent"][$index])) {
                print("Already exists $index.<br>");
            }
            else {
                $_SESSION["invent"][$index] = $value;
                print("Adding<br>index : $index<br>value : $value<br>");
                print("<br><br>List items : <br>");
                foreach($_SESSION["invent"] as $key=>$value){
                    print("$key - $value<br>");
                }
            }
        }
        else print("Nothing to do!")
    ?>
</body>
</html>