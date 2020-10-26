<?php

function StatisticLowLetters($sInput)
{

  for($i=0;$i<26;$i++)
  {
    $cChar = chr(97+$i);
    $aRet[$i][0] = $cChar;
    $aRet[$i][1] = substr_count($sInput, $cChar);
  };

  return $aRet;
};

function StatisticBigLetters($sInput)
{

  for($i=0;$i<26;$i++)
  {
    $cChar = chr(65+$i);
    $aRet[$i][0] = $cChar;
    $aRet[$i][1] = substr_count($sInput, $cChar);
  };

  return $aRet;
};

function ShowStatisticTable($INPUT)
{
  if  (isset($INPUT))
  {
      $oMyString=new MyString($INPUT);

      $aStat= $oMyString->aStatLowLetters;


      echo "<table border=0 borderline=1>";

      echo "<tr>";
      for($i=0;$i<26;$i++)
      {
        echo "<td width=30 align=center>".$aStat[$i][0]."</td>";
      };
      echo "</tr><tr>";
      for($i=0;$i<26;$i++)
      {
        echo "<td width=30 align=center>".$aStat[$i][1]."</td>";
      };

      echo "</tr>";
      echo "</table>";
    }
}

class MyString
{
  var $sStr="Empty";
  var $sStrLower="Empty";
  var $sStrUpper="Empty";
  var $iLen=0;
  var $aStatLowLetters;
  var $aStatBigLetters;

  function __construct($_sText)
  {
     $this->sStr = $_sText;
     $this->iLen = strlen($_sText);
     $this->sStrLower=strtolower($_sText);
     $this->sStrUpper=strtoupper($_sText);
     $this->aStatLowLetters=StatisticLowLetters($_sText);
     $this->aStatBigLetters=StatisticBigLetters($_sText);
  }

};



?>
