<html>
    <head>
        <title> Output </title>
    </head>
    <body>
        <?php
        $rating = $_GET["rating"];
        print ("Xếp loại : ");
        switch ($rating) {
            case 1:
                print ("A");
                break;
            case 2:
                print ("B");
                break;
            case 3:
                print ("C");
                break;
            
            default:
                print ("D");
                break;
        }
        ?>
    </body>
</html>