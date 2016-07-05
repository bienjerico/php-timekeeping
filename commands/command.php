<?php

class Command
{
  public $fResult = '';
  public $iTimeIn;
  public $iTimeOut;
  public $sHoursType = '';

  // Compute Total Hours from Time In to Time Out
  public function getComputeTotalHours($iTimeIn, $iTimeOut,$sHoursType = null)
  {
    $this->iTimeIn    = $iTimeIn;
    $this->iTimeOut   = $iTimeOut;
    $this->sHoursType = $sHoursType;

    if($this->iTimeIn!="" && $this->iTimeOut!="")
    {
        // Time Format
        if($this->sHoursType == "time")
        {
            // Convert to Time Format
            return $this->getDecimalToTimeFormat((strtotime($this->iTimeOut) - strtotime($this->iTimeIn))/60/60);
        }
        else
        {
            // Convert to Decimal Format
            return (strtotime($this->iTimeOut) - strtotime($this->iTimeIn))/60/60;
        }

    }
    return $fResult;

  }
  // Convert Time Format to Decimal Format
  // 00:00:00 to 0.0
  public function getTimeToDecimalFormat($sVar)
  {
    if(trim($sVar)!="" && !empty($sVar))
    {
      $aTime    = explode(':', $sVar);
      $fResult  = ($aTime[0]*60) + ($aTime[1]) + ((count($aTime)==3) ? ($aTime[2]/60) : 0);
      return $fResult/60;
    }
    return $fResult;
  }
  // Convert Decimal Format to Time Format
  // 0.0 to 00:00:00
  public function getDecimalToTimeFormat($sVar)
  {
    if(trim($sVar)!="" && !empty($sVar))
    {
          $iHours   = floor($sVar);
          $iMinutes = round(60*($sVar-$iHours));
          return str_pad($iHours, 2, "0", STR_PAD_LEFT) . ":" . str_pad($iMinutes, 2, "0", STR_PAD_LEFT);
    }
    return $fResult;
  }

}

?>
