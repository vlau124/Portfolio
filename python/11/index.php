<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>11 - Web service</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation.php'; ?>
<div class="info-container">


<h1>11 - Web service</h1>

<!-- Background Color + Text Color -->
<p>
Write a CGI program which serves up all the words from the dictionary which start with a given stem. Expect the stem to be passed as an HTTP parameter called stem.
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-python.php'; ?>
<br>



</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>
