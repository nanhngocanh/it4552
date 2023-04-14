<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <?php
             $destinations = $_POST["destinations"];
             $cities = array ('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC'=> 595, 'Miami' => 1189, 'Pittsburgh' => 409);
             $data = array();
             $no = 1;
             foreach($destinations as $destination){
                if (isset($cities[$destination])) {
                    $distance = $cities[$destination];
                    $time = round( ($distance / 60), 2);
                    $walktime= round( ($distance / 5), 2);
                    $data[$no] = array('destination'=>$destination,'distance'=>$distance,'driving time'=>$time,'walking time'=>$walktime);
                    $no++;
                }
                else {
                    print("Sorry, do not have destination information for $destination.<br>");
                }
             }
            print '<table border=1> <th> No. <th> Destination <th> Distance <th> Driving time <th> Walking time';
            foreach($data as $key=>$value){
                print "<tr> <td> $key </td>";
                print "<td> {$value['destination']} </td>";
                print "<td> {$value['distance']} </td>";
                print "<td> {$value['driving time']} </td>";
                print "<td> {$value['walking time']} </td></tr>";
            }
        ?>
    </body>
</html>