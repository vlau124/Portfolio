<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Larger Project 1 - Functions and Forms</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="style.css">
</head> 

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Larger Project 1 - Functions and Forms</h1>
<h2>Input Page</h2>

<p>
Collects user form registration data and displays the information back.
</p>


<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<br>

<!-- It says to use a function to Display the form 
and Another funciton to display output -->

<?php include 'action.php'; ?>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>