<html>
    <head>
        <title>
            ...
        </title>
    </head>
    <body>
        <?php
            function radianToDO($radian){
                return $radian*180/3.14;
            }
            function doToRadian($do){
                return $do*3.14/180;
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?> "method="GET">
            <table>
                <tr>
                    <td>
                        Radian sang do
                    </td>
                    <td>
                        <input type="text" name="radian"
                        value="<?php
                        if(array_key_exists("radian",$_GET)){
                            echo $_GET["radian"];
                        }
                        ?>"> =
                        <input type="text" name="output1" 
                        value="<?php
                        if(array_key_exists("radian",$_GET)){
                            $radian = $_GET["radian"];
                            echo radianToDO($radian);
                        }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Do sang radian
                    </td>
                    <td>
                        <input type="text" name="do"
                        value="<?php
                        if(array_key_exists("do",$_GET)){
                            echo $_GET["do"];
                        }
                        ?>"> =
                        <input type="text" name="output2"
                        value="<?php
                        if(array_key_exists("do",$_GET)){
                            $do = $_GET["do"];
                            echo doToRadian($do);
                        }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit">
                    </td>
                    <td>
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>