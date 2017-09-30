<?php
$date =  date('Y-m-d', time());
$date = str_replace('-', '/', $date);
print "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";


if ($tar  > "0") {
    echo  "the future";
    }
elseif ($tar < "0") {
    echo "the past";
    }
else ($tar == "0") {
    echo "Oops";
    }
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
