<?php

require_once('command.php');

class Schedule extends Command
{
  public function getSchedule($aData)
  {
    if($aData['sSchedType'] == 'fixed')
    {
      if($this->getTimeToDecimalFormat($aData['sSchedTimeIn'])>$this->getTimeToDecimalFormat($aData['sSchedTimeOut']))
      {
        $aData['sSchedTimeIn'] = $aData['sDateBio'].' '.$aData['sSchedTimeIn'];
        $aData['sSchedTimeOut'] = $aData['sDateBioNext'].' '.$aData['sSchedTimeOut'];
      }
      else
      {
        $aData['sSchedTimeIn'] = $aData['sDateBio'].' '.$aData['sSchedTimeIn'];
        $aData['sSchedTimeOut'] = $aData['sDateBio'].' '.$aData['sSchedTimeOut'];
      }
    }
    else
    {
      $aData['sSchedTimeIn']   = $aData['sBioTimeIn'];
      $aData['sSchedTimeOut']  = date('Y-m-d H:i',strtotime($aData['sBioTimeIn']. ' +'.$this->getTimeToDecimalFormat($aData['sSchedHours']).' hours'));
    }

    return array($aData['sSchedTimeIn'],$aData['sSchedTimeOut']);
  }


}
?>
