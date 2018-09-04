<html>
<head>
<title>Assignment 7 - Repetition using loops</title> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/header.php'; ?>

</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/navigation.php'; ?>
<div class="info-container">


<h1>Assignment 7 - Repetition using loops</h1>
<h2>Called Action Page</h2>


<?php 
//Second page
$Size = $_REQUEST['Size'];

//check if user entered a number
if (ctype_digit($Size) == false )
{
  print "<h1>You did not enter a number!</h1>";
}

if ($Size < 1 || $Size > 10 ) {
  //check to see if number is between 1 and 10
  print "<h1>Please Enter a number between 1 and 10</h1>";
  print "<h1>The number is to small or to large!</h1>";
} else {

  print "<table border='1'>";
  print "<tbody>";
  
    // Top row numbers
    for ( $y=0; $y <= $Size; $y++)
    {
      print "<th>$y</th>";
    }
  
    for ( $x=1; $x <= $Size; $x++)
    {
      print "<tr>";
      print "<th>$x</th>";
      for ( $y=1; $y <= $Size; $y++)
      {
        $z = $x * $y;
        print "<th> $x * $y = $z </th>";
        
      }      
      print "</tr>";

    } //end of for loop
  
  print "</tbody>";
  print "</table>";  
  
}//end of else statement


?>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/footer.php'; ?>
</body>
</html>