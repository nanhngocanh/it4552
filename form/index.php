<html>
    <head>
        <title> Receiving Input </title>
    </head>
    <body>
        <font size=5>Thank You: Got Your Input.</font>
        <?php
        $name = $_GET["name"];
        $age = $_GET["age"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        $university = $_GET["university"];
        $hobby = $_GET["hobby"];

        print ("<br>Hello $name $age years old!");
        print ("<br>Your email is $email");
        print ("<br>Your address is $address");
        print ("<br>Your university is $university");
        print ("<br>Your email hobby is \n");
        foreach($hobby as $item){
            print ("$item ");
        }
        ?>
    </body>
</html>