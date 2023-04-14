<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiêm chủng vacxin Covid</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Họ tên :</label><br>
        <input type="text" name="name" id=""><br><br>
        <label for="mssv">MSSV :</label><br>
        <input type="text" name="mssv" id=""><br><br>
        <label for="num">Số mũi vắc xin Covid đã tiêm :</label><br>
        <input type="text" name="num" id=""><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php
    class Student
    {
        private $name;
        private $mssv;
        private $num;
        function __construct($name, $mssv, $num)
        {
            $this->name = $name;
            $this->mssv = $mssv;
            $this->num = $num;
            echo "<h3>Quét mã để lấy thông tin tiêm chủng :</h3><img src=\"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$name-$mssv-$num mũi vắc xin Covid đã tiêm\" alt=\"thông tin tiêm chủng\">";
        }
        function __destruct()
        {
            echo "";
        }
    }
    if (array_key_exists("name", $_POST)) {
        $name = $_POST["name"];
        $mssv = $_POST["mssv"];
        $num = $_POST["num"];
        $student = new Student($name, $mssv, $num);
    }
    ?>
</body>

</html>