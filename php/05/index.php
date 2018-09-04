<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?> 
  <title>05 - Conditional Statements</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


<h1>05 - Conditional Statements</h1>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<h2>Input Page</h2>
<p>
Changes the background and text color.
</p>
<!-- Background Color + Text Color -->

<p>Select Background Color:</p>
<select name="BackColorList" form="Colorform">
  <option value="Red">Red</option>
  <option value="Green">Green</option>
  <option value="Blue">Blue</option>
  <option value="Purple">Purple</option>
  <option value="Orange">Orange</option>
</select>

<p>Select Font Color:</p>
<select name="TextColorList" form="Colorform">
  <option value="Red">Red</option>
  <option value="Green">Green</option>
  <option value="Blue">Blue</option>
  <option value="Purple">Purple</option>
  <option value="Orange">Orange</option>
</select>

<br><br>

<form method="GET" action="action.php" id="Colorform">
<!--
  Background Color:<br>
  <input type="text" name="Red" placeholder="Loan Amount">
  <br>
  <br>
  Interest Rate:<br>
  <input type="text" name="Rate" placeholder="Interest">
  <br>
  <br>
  Number of months:<br>
  <input type="text" name="Months" placeholder="Months">
  <br><br>
  -->
  <input type="submit" value="Submit">
</form>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>
