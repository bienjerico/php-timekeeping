<?php

require_once('../commands/command.php');

$compute = new Command;

$sTimeIn = "2015-12-24 12:00:00";
$sTimeOut = "2015-12-24 14:05:01";
$fDecimalHours = 5.01;
$sTimeHours = "5:40";


echo $compute->getComputeTotalHours($sTimeIn,$sTimeOut);
echo "<br/>";
echo $compute->getDecimalToTimeFormat($fDecimalHours);
echo "<br/>";
echo $compute->getTimeToDecimalFormat($sTimeHours);
echo "<br/>";

$sBioTimeIn = '2016-06-14 08:20';
$sBioTimeOut = '2016-06-14 18:40';

echo $sDate = date('Y-m-d',strtotime($sBioTimeIn));
echo "<br/>";
echo $sDateNext = date('Y-m-d',strtotime($sDate.' +1 day'));

$sBreakHours = '01:00';

$sGracePeriodHours = '00:10';

$sNDTimeIn = $sDate.' '.'22:00';
$sNDTimeIn = $sDateNext.' '.'06:00';

$sLeaveHours = '04:00';
$sLeaveType  = 'VL';
$sLeaveDay   = 'second';// first / second / whole day

$sObToilTimeIn  = '2016-06-14 08:00';
$sObToilTimeOut = '2016-06-14 08:20';

$sSchedTimeIn = '08:00';
$sSchedTimeOut = '17:00';
echo "<br/>";
if($compute->getTimeToDecimalFormat($sSchedTimeIn)>$compute->getTimeToDecimalFormat($sSchedTimeOut))
{
  $sSchedTimeIn = $sDate.' '.$sSchedTimeIn;
  $sSchedTimeOut = $sDateNext.' '.$sSchedTimeOut;
}
else {
  $sSchedTimeIn = $sDate.' '.$sSchedTimeIn;
  $sSchedTimeOut = $sDate.' '.$sSchedTimeOut;
}
echo $sSchedTimeIn;echo "<br/>";
echo $sSchedTimeOut;

$sOvertimeTimeIn = '17:00';
$sOvertimeTimeOut = '18:40';


//LATE HOURS
//UNDERTIME HOURS
//TOTAL WORKING HOURS
//EXCESS HOURS



?>
