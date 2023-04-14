<!DOCTYPE html>
<html>
<head>
    <title>Bai Tap 2.7.1</title>
</head>
<body>
    <h1 style="color:blue">Mời nhập giá trị muốn quy đổi</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Giá trị: <input type="text" name="value"><br>
    Đơn vị: Từ: <select name="Unit1">
            <option>Degrees</option>
            <option>Radians</option>
        </select> 
    Thành:  <select name="Unit2">
                <option>Degrees</option>
                <option>Radians</option>
            </select>
    <br>
    <input type="Submit" value="Change">
    <input type="Reset" value="Clear">
</form> 
<?php
    function Change($value,$unit1,$unit2){
        if($unit1=="Radians" && $unit2=="Degrees"){
            $y=rad2deg($value);
            print "<br>Giá trị sau khi thay đổi: $y";
        } elseif($unit1=="Degrees" && $unit2=="Radians"){
            $y=deg2rad($value);
            print "<br>Giá trị sau khi thay đổi: $y";
        } else {
            print "<br>Hãy chọn đơn vị muốn đổi!";
        }
    }

    if(isset($_POST['value'])){
        $x = $_POST['value'];
    }else{
        $x = NULL;
    }
    
    if(is_numeric($x)){
        $unit1=$_POST['Unit1'];
        $unit2=$_POST['Unit2'];
        Change($x,$unit1,$unit2);
    } else {
        print"<br>Bạn phải nhập số!";
    }
    
?>
</body>
</html>
