<!DOCTYPE html>
<html><head> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Larger Projects 2 - Object Oriented Programming</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="style.css">
  <!-- styling for table only works here for some reason -->
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Larger Projects 2 - Object Oriented Programming</h1>
<h2>Input Page</h2>

<p>
Created a Casino Dice game using the inheritance, public properties, public methods, private properties, private methods with one class that store an object of a different class as a property. Also stores user current gambling amount.
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>

<h1>Welcome to Jackpot Casino!</h1>
<p>Win Fabulous Prizes! Go Big or Go Home!
</p>

<form action='#' method='post'>
  <div class='container'>
    <table>
    <h3>Enter the amount you want to bet! and Roll a 6 sided dice. If you roll a 4 or higher you win!</h3>
    
    </tr>
    <td><label><b>Amount</b></label></td>
    <td><input type='Number' placeholder='1234' name='Bet_Amount' required></td>
    </tr>

    </table><!-- end of table -->
    
    <div class='clearfix'>
      <!--
      <button type='button'  class='cancelbtn'>Cancel</button>-->
      <button type='reset'  class='cancelbtn' value='Reset'>Reset</button>
      <button type='submit' class='signupbtn' name='submit1'>Roll Dice</button>
    </div>
    
  </div> <!-- end of container -->
</form>


  <div class='container'>
    <table>
      </tr>
      <td><b>Current Standings</b></td>
      <td><input type='text' value='10000' id="Standing" disabled></td>
      </tr>
    </table><!-- end of table -->
    
    <!-- Displaying Text here -->
    <h2 id ="text1"></h2>
    <h2 id ="text2"></h2>
    <h2 id ="text3"></h2>
    <h1 id ="text4"></h1>
    
  </div> <!-- end of container -->


<?php include 'action.php'; ?>

<br><br><br><br><br><br><br><br><br><br><br>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>