<!DOCTYPE html>
<html>
<head>
    <title>BAI TAP</title>
</head>
<body>
    <h3 style="color:blue" >Moi nhap 1 so thuoc khoang 0 -> 100.</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
   
    number :<input type="text" name="guess"><br>
    <br>
    <input type="submit"  value ="GUESS" >

</form>
<?php

$session_id = session_id();
// Chỉ bắt đầu 1 phiên duy nhất.
if (empty($session_id))
    session_start();

    
if(isset($_POST['guess'])){
    $x = $_POST['guess'];
}else{
    $x = NULL;
}
    
if (is_numeric($x))
{   $n= $_SESSION['number'];
    if ($x == $n)
    {   echo"Ban da doan dung so bi an la: $n ";
        unset($_SESSION['number']);
    }
    else
    {  $n= $_SESSION['number'];
        $_SESSION['dem']++;
        if($_SESSION['dem']>10){
            echo "So lan da chon vuot qua so lan thu cho phep!";
            unset($_SESSION['number']);
        }else{
            if ($x > $n)
            {   echo "moi nhap so nho hon!<br>";
                echo "so lan da chon {$_SESSION['dem']} .<br>";
            }
            elseif($x < $n)
            {
               echo "moi nhap so lon hon!<br> ";
               echo "so lan da chon {$_SESSION['dem']} .<br>";
            }
        }
    }
}elseif($x != NULL){
    echo "Khong phai so!<br>";
}

if (empty($_SESSION['number']))
{
    $_SESSION['dem'] = 0;
    $_SESSION['number'] = rand(1, 100);
    $n= $_SESSION['number'];
}

?>

</body>
</html>
