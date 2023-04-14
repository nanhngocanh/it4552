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
        $id = $_POST['id'];
        $inventory = array (
            'AC1000'=>array('Part'=>'Hammer','Count'=>122, 'Price'=> 12.50 ),
            'AC1001' => array('Part' =>'Wrench','Count' =>5, 'Price'=>5.00 ),
            'AC1002'=>array('Part' =>'Handsaw','Count' =>10, 'Price'=>10.00 ),
            'AC1003'=>array('Part' =>'Screwdrivers','Count'=>222, 'Price'=>3.00)
        );
        if (isset($inventory[$id])) {
            print "Inventory Information for Part $id </font>";
            print '<table border=1> <th> ID <th> Part <th> Count <th> Price ';
            print "<tr> <td> $id </td>";
            print "<td> {$inventory[$id]['Part']} </td>";
            print "<td> {$inventory[$id]['Count']} </td>";
            print "<td> \${$inventory[$id]['Price']} </td></tr>";
        } else {
            print "Illegal part ID = $id ";
        }
    ?>
</body>
</html>