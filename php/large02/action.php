<?php

// There will be excessive or redundant things done throughout in order to furfill
// the assignment prompt. So this code will not be the most efficient.

$Dice = 0;
$Standing = 10000; //give user 10,000 to start with
$WinLose = false;
$WinAmount = 0;

if (isset($_POST['submit1']))
{
  $obj = new RollDice;
  $obj2 = new Calculate;
  $obj3 = new DisplayData;
  $obj4 = $obj;
  
  //it wouldnt let me grab the variables inside the class
  $Bet = $_REQUEST['Bet_Amount'];
  
  //check to see if user made an appropriate bet amount
  if (($Bet) <= $Standing)
  {
    $Dice = $obj->Dice_Roll(); //Roll dice
    $WinAmount = $obj->Winner($Bet, $Dice); //determin if lose or win
    $WinLose = publicDice($Dice);
    
    $obj2->Standings($Bet, $WinLose, $Standing);//calculate the earnings or lose
    
    $obj3->DisplayWinnigs($Bet, $Dice, $WinAmount, $Standing, $WinLose);//Display everything
    
    $obj->JackPot = new JackPot;
    $obj->JackPot->Millionare($Standing);
    
    unset($obj);
    unset($obj2);
    unset($obj3);
    unset($obj4);
  }
  
  // if user does not have enough money to place bet
  if (($Bet) > $Standing)
  {
    echo "<script>";
    echo "document.getElementById('text1').innerHTML = 'I am sorry you are Bankrupted!';";
    echo "document.getElementById('text2').innerHTML = 'Please place a smaller bet!';";
    echo "</script>";
  }
  
}// end of isset

function publicDice($Dice)
{
    if ($Dice >= 4)
    {
      return True;
    }else{
      return False;
    }
}

Class RollDice
{
  function Dice_Roll()
  {
    $RandomNum = rand(1,6);
    return $RandomNum;
  }//end of Dice roll
  
  function Winner($Bet, $Dice)
  {
    if ($Dice >= 4)
    {
      $WinLose = True;
      $Amount = $Bet;
      return $Amount;
    }else{
      $WinLose = False;
      $Amount = $Bet * (-1);
      return $Amount;
    }
    
  }//end of winner
  
}//end of roll dice

Class Calculate
{
  function Standings($Bet, $WinLose, $Standing)
  {
    if ($WinLose)
    {
      $GLOBALS['Standing'] = $Standing + $Bet;
      //$Standing = $Standing + $Bet;
    } else{
      //$Standing = $Standing - $Bet;
      $GLOBALS['Standing'] = $Standing - $Bet;
    }
  }//end of STandings
}//end of calculate


Class DisplayData
{
  function DisplayWinnigs($Bet, $Dice, $WinAmount, $Standing, $WinLose)
  {
    echo "<script>";
    echo "document.getElementById('text1').innerHTML = 'You have rolled: $Dice';";

    if ($WinLose)
    {
      echo "document.getElementById('text2').innerHTML = 'Winner!';";
    }else{
      echo "document.getElementById('text2').innerHTML = 'You Have Lost! Try Again!';";
    }
    
    echo "document.getElementById('text3').innerHTML = 'Earned: ' + $WinAmount;";
    echo "document.getElementById('Standing').value = $Standing;";
    echo "</script>";
    
  }//end of function
}//end of displaydata

class JackPot extends RollDice
{
  function Millionare($Standing)
  {
    //if you become a millionare
    if ($Standing >= 1000000)
    {
      echo "<script>";
      echo "document.getElementById('text1').innerHTML =
      'YOU HAVE BECOME A MILLIONARE! WOOOOO!<br>Ding! Ding! Ding! Ding!';";
      echo "</script>";
    }
  }
}// end of myother class extend rolldice



 
?>

