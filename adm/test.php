<?php


$date=date("y/m/d");
$dddate=date(l);
$time=time("h:m:s");
$ddate='17/07/24';
echo "Day of the week:".$dddate.", today's date:".$date;

if($date>$ddate){
    echo "<br>".$date." is Greater than the current.";
}
else{
    echo "<br>".$date."<br> is not graeter than the current.<br><br>";
}

$calc=$date-$ddate;
echo "<br>".$calc;

echo "";
echo "";
echo "For Time: <br>";

$time=date("h:i A");

$ttime=date("h:i A");


echo $time;
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
?>


Main Solving

<?php
$initial_date='17/07/24';
$latest_date=date("y/m/d");
$normal_display_date=date("D, j F, y");

$initial_time=
$latest_time=date("h");

$calculated_date=$latest_date-$initial_date;


echo "<br>";
echo "initial_date: ".$initial_date;
echo "<br> ";
echo "latest_date: ".$latest_date;
echo " <br>";
echo "normal_display_date: ".$normal_display_date;
echo "<br>";
echo "";

echo "<br>";echo "<br>";echo "<br>";echo "<br>";




?>

