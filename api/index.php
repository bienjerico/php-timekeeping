<?php

require_once('../commands/command.php');

$compute = new Command;

$iTimeIn = "2015-12-24 12:00:00";
$iTimeOut = "2015-12-24 14:05:01";
$fDecimalHours = 5.01;
$fTimeHours = "5:40";


echo $compute->getComputeTotalHours($iTimeIn,$iTimeOut);
echo "<br/>";
echo $compute->getDecimalToTimeFormat($fDecimalHours);
echo "<br/>";
echo $compute->getTimeToDecimalFormat($fTimeHours);
?>
