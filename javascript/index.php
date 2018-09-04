<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Interactive Web Pages - JavaScript and AJAX Examples</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <style>
  body {
    background: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5), rgba(255,255,255,0.5), rgba(240,219,78,0.5));
    background-attachment: fixed;
  }
  </style>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">
  <h1 class="info-title">Interactive Web Pages - JavaScript and AJAX Examples</h1>
  <p class="info-p">Here are some JavaScript samples</p>
  
  <!-- Probably too basic
  <button class="accordion">Basic Operations</button>
  <div class="panel">
    <a href="01-Basic-Operations/Part1/" class="info-p">Part 1 - Use document.write to display characters on a page</a><br>
    <a href="01-Basic-Operations/Part2/" class="info-p">Part 2 - Input integers and display sum, average, product, min and max</a><br>
    <a href="01-Basic-Operations/Part3/" class="info-p">Part 3 - Input numbers on a form and fade the results via jQuery</a><br>
    <a href="01-Basic-Operations/Part4/" class="info-p">Part 4 - Display squares and cubes for 1-6 and then generate for 7-10</a><br>
  </div>
  -->
  <button class="accordion">Functions</button>
  <div class="panel">
    <a href="02-Functions/Part1/" class="info-p">Part 1 - Student Grade Calculation</a><br>
    <a href="02-Functions/Part2/" class="info-p">Part 2 - Weekly Sales and Earnings</a><br>
    <a href="02-Functions/Part3/" class="info-p">Part 3 - Customer Credit Limit Calculation</a><br>
    <a href="02-Functions/Part4/" class="info-p">Part 4 - Palindrome</a><br>
    <a href="02-Functions/Part5/" class="info-p">Part 5 - Temperature Conversion</a><br>
    <a href="02-Functions/Part6/" class="info-p">Part 6 - Educational Program</a><br>
  </div>

  <button class="accordion">Looping Statements</button>
  <div class="panel">
    <a href="03-Looping-Statments/Part1/" class="info-p">Part 1 - Product Sum</a><br>
    <a href="03-Looping-Statments/Part2/" class="info-p">Part 2 - Gross Pay</a><br>
    <a href="03-Looping-Statments/Part3/" class="info-p">Part 3 - Compound Interest</a><br>
    <a href="03-Looping-Statments/Part4/" class="info-p">Part 4 - Total Sales</a><br>
    <a href="03-Looping-Statments/Part5/" class="info-p">Part 5 - List Formats</a><br>
    <a href="03-Looping-Statments/Part6/" class="info-p">Part 6 - 12 Days of Christmas</a><br>
  </div>

  <button class="accordion">Arrays</button>
  <div class="panel">
    <a href="04-Arrays/Part1/" class="info-p">Part 1 - Webform Selection & Link</a><br>
    <a href="04-Arrays/Part2/" class="info-p">Part 2 - 2010 Census</a><br>
    <a href="04-Arrays/Part3/" class="info-p">Part 3 - Employee Performance Index</a><br>
    <a href="04-Arrays/Part4/" class="info-p">Part 4 - Duplicate Numbers</a><br>
  </div>

  <button class="accordion">Objects</button>
  <div class="panel">
    <a href="06-Objects/Part1/" class="info-p">Part 1 - Math Rounding</a><br>
    <a href="06-Objects/Part2/" class="info-p">Part 2 - Character Search</a><br>
    <a href="06-Objects/Part3/" class="info-p">Part 3 - Date Time Strings Manipulation</a><br>
    <a href="06-Objects/Part4/" class="info-p">Part 4 - Counting Characters using indexOf</a><br>
  </div>

  <button class="accordion">Object Model and Miscellaneous</button>
  <div class="panel">
    <a href="07-Object-Model-and-Miscellaneous/Part1/" class="info-p">Part 1 - ClassName Property Formatting</a><br>
    <a href="07-Object-Model-and-Miscellaneous/Part2/" class="info-p">Part 2 - Password and Mouseover Event</a><br>
    <a href="07-Object-Model-and-Miscellaneous/Part3/" class="info-p">Part 3 - Navigation Hover Toggle</a><br>
    <a href="07-Object-Model-and-Miscellaneous/Part4/" class="info-p">Part 4 - Photo Slide Show</a><br>
  </div>

  <button class="accordion">Ajax Applications</button>
  <div class="panel">
    <a href="08-Ajax-Applications/Part1/" class="info-p">Part 1 - Search Hint Suggestion</a><br>
    <a href="08-Ajax-Applications/Part2/" class="info-p">Part 2 - Server data with Date and Time</a><br>
    <a href="08-Ajax-Applications/Part3/" class="info-p">Part 3 - Poll Count and Date Picker</a><br>
    <a href="08-Ajax-Applications/Part4/" class="info-p">Part 4 - Recieve Sent Data From Server State Code</a><br>
  </div>

<!-- must be loaded after -->
<script src="http://www.vluxcreations.com/js/accordion.js"></script>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>

</body>
</html>