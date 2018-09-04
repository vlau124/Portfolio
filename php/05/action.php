<html>
<head>
<title>Assignment 6 - Conditional Statements</title> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/header.php'; ?>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/navigation.php'; ?>
<div class="info-container">


<h1>Assignment 6 - Conditional Statements</h1>
<h2>Called Action Page</h2>


<?php 
//Second page
$BackColor = $_REQUEST['BackColorList'];
$TextColor = $_REQUEST['TextColorList'];

if ($BackColor == $TextColor)
{
  print "<h1>ERROR: Please do not select the same color $BackColor $TextColor</h1>";
  print "<h1>Background Color: $BackColor</h1>";
  print "<h1>Text Color: $TextColor</h1>";
}else{

  //Changing Background Color here
  if ($BackColor == "Red")
  {
    echo '<body style="background-color:rgb(255,0,0)">';
  }
  if ($BackColor == "Green")
  {
    echo '<body style="background-color:rgb(0,255,0)">';
  }
  if ($BackColor == "Blue")
  {
    echo '<body style="background-color:rgb(0,0,255)">';
  }
  if ($BackColor == "Purple")
  {
    echo '<body style="background-color:rgb(255,0,255)">';
  }
  if ($BackColor == "Orange")
  {
    echo '<body style="background-color:rgb(255,128,0)">';
  }

  //Changing Text Color here
  if ($TextColor == "Red")
  {
    echo '<h1 style="color:rgb(255,0,0)">Sample Text: Red</h1>';
  }
  if ($TextColor == "Green")
  {
    echo '<h1 style="color:rgb(0,255,0)">Sample Text: Green</h1>';
  }
  if ($TextColor == "Blue")
  {
    echo '<h1 style="color:rgb(0,0,255)">Sample Text: Blue</h1>';
  }
  if ($TextColor == "Purple")
  {
    echo '<h1 style="color:rgb(255,0,255)">Sample Text: Purple</h1>';
  }
  if ($TextColor == "Orange")
  {
    echo '<h1 style="color:rgb(255,128,0)">Sample Text: Orange</h1>';
  }
   

}//end of if else statement
  

?>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/footer.php'; ?>
</body>
</html>