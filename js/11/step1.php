<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        //create array and add three elements
        var myArray = new Array();
        myArray.push('Tim');
        myArray.push('Janice');
        myArray.push('Joe');

        //print out the contents and newline
        document.writeln(myArray.toString());
        document.writeln('<br>');

        //print out the lenght of the array and newline
        document.writeln('Array size : ' + myArray.length)
        document.writeln('<br>');
        
        //pop the last element off the array and display it
        var who = myArray.pop();
        document.writeln('Popped element : ' + who)
        document.writeln('<br>');
        
        //print out the lenght of the array and newline
        document.writeln("Array size : " + myArray.length)
        document.writeln('<br>');
        document.writeln('<br>');

        //populating array on instantiation
        var otherArray = new Array('dog', 3,8.4)

        document.writeln(otherArray.toString());
        document.writeln('<br>');
        document.writeln('<br>');

        //setting and accessing associative arrays
        otherArray['key'] = 'value'
        document.writeln(otherArray['key']);
        document.writeln('<br>')

        
    </script>
</body>
</html>