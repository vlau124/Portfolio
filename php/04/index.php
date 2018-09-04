<!DOCTYPE html>
<html><head> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>04 - PHP and Web Forms</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>04 - PHP and Web Forms</h1>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>

<h2>Input Page</h2>

<!-- The first page view should contain a form with three text boxes,
 to allow the student to enter the following values:
 
Total amount of loan
Interest Rate
Number of months
-->
<!--
<p>Please enter the information below to calculate your monthly payment for a car loan.</p>
-->

<p>
Calculates your monthly payment for a car loan.
</p>

<form method="GET" action="action.php">
  Total amount of loan:<br>
  <input type="text" name="Loan" placeholder="Loan Amount">
  <br>
  <br>
  Interest Rate:<br>
  <input type="text" name="Rate" placeholder="Interest">
  <br>
  <br>
  Number of months:<br>
  <input type="text" name="Months" placeholder="Months">
  <br><br>
  
  <input type="submit" value="Submit">
</form>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>
