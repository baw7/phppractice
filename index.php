<?php
$date =  date('Y-m-d', time());
$date = str_replace('-', '/', $date);
print "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";


if ($date > "0") {
    print  "the future";
    }
elseif ($date < "0") {
    print "the past";
    }
else ($date == "0") {
    print "Oops";
    }
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
