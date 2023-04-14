<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valiate</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Email :</label><br>
        <input type="text" name="email"><br>
        <label>Url address :</label><br>
        <input type="text" name="url"><br>
        <label>Phone number :</label><br>
        <input type="text" name="phone"><br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">
    </form>
    <?php
    $email_pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    $url_pattern = '/(https?:\/\/)?([\w\-])+\.{1}([a-zA-Z]{2,63})([\/\w-]*)*\/?\??([^#\n\r]*)?#?([^\n\r]*)/';
    $phone_pattern = '/^0{1}[[:digit:]]{9}/';
    if (array_key_exists('email', $_POST)) {
        $email = $_POST['email'];
        $url = $_POST['url'];
        $phone = $_POST['phone'];
        if (preg_match($email_pattern, $email)) {
            print 'Email match<br>';
        } else {
            print 'Email no match<br>';
        }
        if (preg_match($url_pattern, $url)) {
            print 'url match<br>';
        } else {
            print 'url no match<br>';
        }
        if (preg_match($phone_pattern, $phone)) {
            print 'phone match<br>';
        } else {
            print 'phone no match<br>';
        }
    }


    ?>
</body>

</html>