<?php

$clubs["De spartelkuikens"] = 25;
$clubs ["De waterbuffels"] = 32;
$clubs ["Plonsmderin"] = 11;
$clubs ["Bommetje"] = 23;

echo "<table style='border: 1px solid black'>";

foreach($clubs as $club=>$waarde){
    echo "<tr>";

    echo "<td>" . $club . "</td>" . "<td>" . $waarde . "</td><td>";

    for($i=0; $i <$waarde; $i++){

        if($i%5==4) {

            echo "*";
        }
    }

    echo"</td>";

    echo "</tr>";
}

