<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>11 - Northwoods Database Setup</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">
<br><br><br>
<h1>Selecting Database Information</h1>
<p>Selects and retrieve faculty database information based on term.</p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>

<?php include 'action.php'; ?>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>