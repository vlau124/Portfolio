<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>06 - Repetition using loops</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>06 - Repetition using loops</h1>
<h2>Input Page</h2>

<!-- Background Color + Text Color -->
<p>
Generates a square multiplication table.
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<br>

<form method="GET" action="action.php">
  Please enter a number between 1 and 10 to create a multiplication table<br><br>
  <input type="text" name="Size" placeholder="Table Size">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>
