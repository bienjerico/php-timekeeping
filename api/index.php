<?php

require_once('../commands/command.php');
require_once('../commands/schedule.php');

$command = new Command;
$schedule = new Schedule;



# Step 1 - Fill-up variables

$sMethod = 'shift'; // shift / calendar mothed

$sBioTimeIn = '2016-06-14 08:20';
$sBioTimeOut = '2016-06-14 18:40';

$sDateBio = date('Y-m-d',strtotime($sBioTimeIn));
$sDateBioNext = date('Y-m-d',strtotime($sDateBio.' +1 day'));

$sBreakHours = '01:00';
$sGracePeriodHours = '00:10';

$sNDTimeIn = $sDateBio.' '.'22:00';
$sNDTimeOut = $sDateBioNext.' '.'06:00';

$sLeaveHours = '04:00';
$sLeaveType  = 'VL';
$sLeaveDay   = 'second';// first or second or whole day

$sObToilType  = 'OB';// OB or Toil
$sObToilTimeIn  = '2016-06-14 08:00';
$sObToilTimeOut = '2016-06-14 08:20';

$sSchedType   = 'fixed'; // flexi or fixed
$sSchedHours  = '09:00'; // for flexi only
$sSchedTimeIn = '08:00';
$sSchedTimeOut = '17:00';

$sRestDate = '2016-06-15';
$sHolidayDate = '2016-06-16';
$sSuspensionTimeIn = '2016-06-17 13:00';
$sSuspensionTimeOut = '2016-06-18 00:00';

$sOvertimeTimeIn = '17:00';
$sOvertimeTimeOut = '18:40';

# Step 2 - Transfer to Data array

$aData = array(
'sMethod' => $sMethod,
'sBioTimeIn' => $sBioTimeIn,
'sBioTimeOut' => $sBioTimeOut,

'sDateBio' => $sDateBio,
'sDateBioNext' => $sDateBioNext,

'sBreakHours' => $sBreakHours,
'sGracePeriodHours' => $sGracePeriodHours,

'sNDTimeIn' => $sNDTimeIn,
'sNDTimeOut' => $sNDTimeOut,

'sLeaveHours' => $sLeaveHours,
'sLeaveType' => $sLeaveType,
'sLeaveDay' => $sLeaveDay,

'sObToilTimeIn' => $sObToilTimeIn,
'sObToilTimeOut' => $sObToilTimeOut,

'sSchedType' => $sSchedType,
'sSchedHours' => $sSchedHours,

'sSchedTimeIn' => $sSchedTimeIn,
'sSchedTimeOut' => $sSchedTimeOut,

'sRestDate' => $sRestDate,
'sHolidayDate' => $sHolidayDate,

'sSuspensionTimeIn' => $sSuspensionTimeIn,
'sSuspensionTimeOut' => $sSuspensionTimeOut,

'sOvertimeTimeIn' => $sOvertimeTimeIn,
'sOvertimeTimeOut' => $sOvertimeTimeOut
);

# Step 3 - Generate Schedule
$aSchedule = $schedule->getSchedule($aData);
$sSchedTimeIn = $aSchedule[0];
$sSchedTimeOut = $aSchedule[1];


//LATE HOURS
//UNDERTIME HOURS
//TOTAL WORKING HOURS
//EXCESS HOURS

$sTotalLate = '';
$sTotalUndertime = '';
$sTotalExcessHours = '';
$sTotalWorkingHours = '';

if($sSchedType == 'fixed')
{



  if(strtotime($sBioTimeIn)>strtotime($sSchedTimeIn))
  {
    if()
    $sTotalLate = $command->getComputeTotalHours($sSchedTimeIn,$sBioTimeIn);
  }


}


?>
