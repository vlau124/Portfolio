<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Object Model and Miscellaneous jQuery [Part2b]</title>
  
  <?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/header.php'; ?>
  
  <!-- using google's jquery version 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  -->
  

  
  <script src="/js/jquery-1.7.1.js"></script>
  <script src="/js/jquery-1.7.1.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-1.7.1.js"></script>
  
  <style>
  .box {
    width: 200px;
    height: 100px;
    float: left;
    background-color: transparent;
    border-style: solid;
    text-align: center;
  }
  </style>
  
  
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/navigation.php'; ?>
<div class="info-container">


<p>All extra scripts, style, editing, and etc... has been removed to keep things simple.</p>
<p>Everything will be re-added after</p>

<h1>Object Model and Miscellaneous jQuery [Part2b]</h1>

<p>
Create a page that has a header of Password Protection Page, a form password element, and submit and reset buttons. Use jQuery version 1.7.1 or jQuery version 1.11.0 or google's jQuery version to allow the user to click on a login button which will bring up the password prompt. You should use an input type="password", which will display asterisks when the user enters the password. I suggest that you name your password as obama. If the password entered is incorrect then display "password is incorrect" and remain on the page. You may use javascript (insecure) or a php file (secure) to do this part. If the password is correct then allow entrance to a second page that contains a script that contains three hotspot labels, "Stop", "Caution", and "Go". When the user mouses over the "Stop" hotspot, the background color of the browser window should turn red. When the user mouses over the "Caution" hotspot, the background color should turn yellow. When the user mouses over the "Go" hotspot, the background color should turn green. When the user mouses off of any of these hotspots, return the background color to the original color of the browser window.
</p>
<p><b>Extra Styling on this page has been removed due to Collission</b></p>
<h2>You have logged in this is the second part</h2>
<h3>Use Your mouse to over over the boxes</h3>

<!--
<div id="red" class="box" onmouseover="box1a()" onmouseout="box1b()" >
Stop<br>
(Turns Red)
</div>
-->

<div id="red" class="box" onmouseover="box1()" onmouseout="reset()">
Stop<br>
(Turns Red)
</div>

<div id="yellow" class="box" onmouseover="box2()" onmouseout="reset()">
Caution<br>
(Turns Yellow)
</div>

<div id="green" class="box" onmouseover="box3()" onmouseout="reset()">
Go<br>
(Turns Green)
</div>


<script>
function box1()
{
  document.body.style.background = "red";
}

function box2()
{
  document.body.style.background = "yellow";
}

function box3()
{
  document.body.style.background = "green";
}

function reset()
{
  document.body.style.background = "white";
}

</script>








<p id="text1"></p>
<p id="text2"></p>




  <h2 id="h2"></h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/footer.php'; ?>
</body>
</html>