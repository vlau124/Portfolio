<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 1]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->  
  <!-- jump to block has been deleted it was causing issues with the jquery drag addon -->
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->

  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- drag me jquery add on -->
  <style>
  #draggable
  {
  background-color: rgba(0,0,0,0.90);
  color: rgba(255,255,255,1);
  width: 150px;
  height: 150px;
  padding: 0.5em;
  }

  #draggable:hover
  {
  background-color: rgba(0,0,0,0.70);
  }
  </style>
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Looping Statements [Part 1]</h1>

<p>
Part 1a: Calculates the product and sum of every third integer from 5 to 20 inclusive.
</p>

<p>
Part 1b: Calculates the product and sum of every fourth integer from 3 to 31 inclusive.
</p>

<p>
Use jQuery UI to allow the user to drag an element to a specific area of the page.
</p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

<!-- Part 1a -->
<h2>Part1a: Product and sum of every third integer from 5-20 inclusive</h2>

<p id="text1"></p>
<p id="text2"></p>

<script>
var result1 = 1;
var result2 = 0;

for (x=5; x<=20; x+=3)
{
  result1 = result1 * x;
  result2 = result2 + x;
}


document.getElementById("text1").innerHTML = "5 * 8 * 11 * 14 * 17 * 20 = " + result1;
document.getElementById("text2").innerHTML = "5 + 8 + 11 + 14 + 17 + 20 = " + result2;
</script>



<!-- Part 1b -->
<h2>Part1a: Product and sum of every third integer from 5-20 inclusive</h2>

<p id="text3"></p>
<p id="text4"></p>
  
<script>
var result1 = 1;
var result2 = 0;
var x = 3;

while (x <= 31)
{
  result1 = result1 * x;
  result2 = result2 + x;
  x+=4;
}

document.getElementById("text3").innerHTML = "3 * 7 * 11 * 15 * 19 * 23 * 27 * 31  = " + result1;
document.getElementById("text4").innerHTML = "3 + 7 + 11 + 15 + 19 + 23 + 27 + 31  = " + result2;
</script>



  
<div id="draggable" class="ui-widget-content">
  <p>Drag me around</p>
</div>

<script>
$( function() {
  $( "#draggable" ).draggable();
} );
</script>


<!-- easier for me to premade text than injecting with nothing-->
<!-- mostly used for testing purposes -->


  <h2 id="h2"></h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>