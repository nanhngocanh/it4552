<!DOCTYPE html>
<html>
<head>
    <title>Bài tập 2.7.2</title>
</head>
<body>
    <h1 style="color:blue">Mời nhập các giá trị</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Tên người thứ nhất: <input type="text" name="name1"> <br>
    Ngày sinh người thứ nhất: <input type="date" name="birth1"> <br>
    Tên người thứ hai: <input type="text" name="name2"> <br>
    Ngày sinh người thứ hai: <input type="date" name="birth2"> <br>
    <input type="Submit" value="Submit">
    <input type="Reset" value="Reset">
    </form>
    <?php
        function is_birthday($name,$birth){
            print("Sinh nhật của $name là ");
            echo date("D, M d, o", strtotime($birth));
            print"<br>";
        }
        
        function Difference($birth1,$birth2){
            print("Chênh lệch giữa hai ngày sinh là ");
            $x = abs(strtotime($birth1) - strtotime($birth2));
            echo round($x / (60 * 60 * 24));
            print(" ngày <br>");
        }
        function Age($birth){
            $x = strtotime(str_replace("/","-",$birth));
            $date = time();

            $age = 0;
            while ($date > $x = strtotime('+1 year',$x)){
                ++$age;
            }
            return $age;
        }

        if(isset($_POST['name1'])){
            $name1 = $_POST['name1'];
        }else{
            $name1 = NULL;
        }
        if(isset($_POST['name2'])){
            $name2 = $_POST['name2'];
        }else{
            $name2 = NULL;
        }
        if(isset($_POST['birth1'])){
            $birth1 = $_POST['birth1'];
        }else{
            $birth1 = NULL;
        }
        if(isset($_POST['birth2'])){
            $birth2 = $_POST['birth2'];
        }else{
            $birth2 = NULL;
        }
        is_birthday($name1,$birth1);
        is_birthday($name2,$birth2);
        Difference($birth1,$birth2);
        $x=Age($birth1);
        print("$name1 năm nay $x tuổi<br>");
        $y=Age($birth2);
        print("$name2 năm nay $y tuổi<br>");
        $a = abs($x - $y);
        print"Chênh lệch tuổi giữa hai người là $a tuổi";
    ?>
</body>