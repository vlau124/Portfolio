<!DOCTYPE html>
<html lang="en">
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 3]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <style type="text/css">
       body,td {
          font-size: 10pt;
        }
        table {
          background-color: black;
          border: 1px black solid;
          border-collapse: collapse;
        }
        th {
          border: 1px outset silver;
          background-color: rgba(0,0,0,0.5);
          color: white;
        }
        tr {
          background-color: rgba(255,255,255,0.95);
          margin: 1px;
        }
        tr.striped {
          background-color: rgba(0,0,0,0.20);
          color: white;
        }
        td {
          padding: 5px 10px;
        }
  </style>
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Looping Statements [Part 3]</h1>

<p>
Calculate compound interest on a principal of $1000 for interest rates of 5, 6, 7, 8, 9, and 10%, for years 1 through 10. The formula to use is :
<br><br>
P is the principal (the initial amount you borrow or deposit) 
<br><br>
r is the annual rate of interest (percentage)
<br><br>
n is the number of years the amount is deposited
<br><br>
A is the amount of money accumulated after n years, including interest
<br><br>
A = P(1 + r)n 
<br><br>
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

<!-- testing purposes -->
<p id="text1"></p>

<!-- 5 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="5deposit1">0</td><td>0.05</td></tr><tr>
<td>2</td><td id="5deposit2">0</td><td>0.05</td></tr><tr class="striped">
<td>3</td><td id="5deposit3">0</td><td>0.05</td></tr><tr>
<td>4</td><td id="5deposit4">0</td><td>0.05</td></tr><tr class="striped">
<td>5</td><td id="5deposit5">0</td><td>0.05</td></tr><tr>
<td>6</td><td id="5deposit6">0</td><td>0.05</td></tr><tr class="striped">
<td>7</td><td id="5deposit7">0</td><td>0.05</td></tr><tr>
<td>8</td><td id="5deposit8">0</td><td>0.05</td></tr><tr class="striped">
<td>9</td><td id="5deposit9">0</td><td>0.05</td></tr><tr>
<td>10</td><td id="5deposit10">0</td><td>0.05</td></tr>
</tbody></table>
<br><br>


<!-- 6 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="6deposit1">0</td><td>0.06</td></tr><tr>
<td>2</td><td id="6deposit2">0</td><td>0.06</td></tr><tr class="striped">
<td>3</td><td id="6deposit3">0</td><td>0.06</td></tr><tr>
<td>4</td><td id="6deposit4">0</td><td>0.06</td></tr><tr class="striped">
<td>5</td><td id="6deposit5">0</td><td>0.06</td></tr><tr>
<td>6</td><td id="6deposit6">0</td><td>0.06</td></tr><tr class="striped">
<td>7</td><td id="6deposit7">0</td><td>0.06</td></tr><tr>
<td>8</td><td id="6deposit8">0</td><td>0.06</td></tr><tr class="striped">
<td>9</td><td id="6deposit9">0</td><td>0.06</td></tr><tr>
<td>10</td><td id="6deposit10">0</td><td>0.06</td></tr>
</tbody></table>
<br><br>


<!-- 7 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="7deposit1">0</td><td>0.07</td></tr><tr>
<td>2</td><td id="7deposit2">0</td><td>0.07</td></tr><tr class="striped">
<td>3</td><td id="7deposit3">0</td><td>0.07</td></tr><tr>
<td>4</td><td id="7deposit4">0</td><td>0.07</td></tr><tr class="striped">
<td>5</td><td id="7deposit5">0</td><td>0.07</td></tr><tr>
<td>6</td><td id="7deposit6">0</td><td>0.07</td></tr><tr class="striped">
<td>7</td><td id="7deposit7">0</td><td>0.07</td></tr><tr>
<td>8</td><td id="7deposit8">0</td><td>0.07</td></tr><tr class="striped">
<td>9</td><td id="7deposit9">0</td><td>0.07</td></tr><tr>
<td>10</td><td id="7deposit10">0</td><td>0.07</td></tr>
</tbody></table>
<br><br>


<!-- 8 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="8deposit1">0</td><td>0.08</td></tr><tr>
<td>2</td><td id="8deposit2">0</td><td>0.08</td></tr><tr class="striped">
<td>3</td><td id="8deposit3">0</td><td>0.08</td></tr><tr>
<td>4</td><td id="8deposit4">0</td><td>0.08</td></tr><tr class="striped">
<td>5</td><td id="8deposit5">0</td><td>0.08</td></tr><tr>
<td>6</td><td id="8deposit6">0</td><td>0.08</td></tr><tr class="striped">
<td>7</td><td id="8deposit7">0</td><td>0.08</td></tr><tr>
<td>8</td><td id="8deposit8">0</td><td>0.08</td></tr><tr class="striped">
<td>9</td><td id="8deposit9">0</td><td>0.08</td></tr><tr>
<td>10</td><td id="8deposit10">0</td><td>0.08</td></tr>
</tbody></table>
<br><br>

<!-- 9 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="9deposit1">0</td><td>0.09</td></tr><tr>
<td>2</td><td id="9deposit2">0</td><td>0.09</td></tr><tr class="striped">
<td>3</td><td id="9deposit3">0</td><td>0.09</td></tr><tr>
<td>4</td><td id="9deposit4">0</td><td>0.09</td></tr><tr class="striped">
<td>5</td><td id="9deposit5">0</td><td>0.09</td></tr><tr>
<td>6</td><td id="9deposit6">0</td><td>0.09</td></tr><tr class="striped">
<td>7</td><td id="9deposit7">0</td><td>0.09</td></tr><tr>
<td>8</td><td id="9deposit8">0</td><td>0.09</td></tr><tr class="striped">
<td>9</td><td id="9deposit9">0</td><td>0.09</td></tr><tr>
<td>10</td><td id="9deposit10">0</td><td>0.09</td></tr>
</tbody></table>
<br><br>

<!-- 10 percent -->
<table border="1"><tbody>
<tr>
<th>Year</th><th>Amount on deposit</th><th>Interest Rate</th>
</tr>

<tr class="striped">
<td>1</td><td id="10deposit1">0</td><td>0.10</td></tr><tr>
<td>2</td><td id="10deposit2">0</td><td>0.10</td></tr><tr class="striped">
<td>3</td><td id="10deposit3">0</td><td>0.10</td></tr><tr>
<td>4</td><td id="10deposit4">0</td><td>0.10</td></tr><tr class="striped">
<td>5</td><td id="10deposit5">0</td><td>0.10</td></tr><tr>
<td>6</td><td id="10deposit6">0</td><td>0.10</td></tr><tr class="striped">
<td>7</td><td id="10deposit7">0</td><td>0.10</td></tr><tr>
<td>8</td><td id="10deposit8">0</td><td>0.10</td></tr><tr class="striped">
<td>9</td><td id="10deposit9">0</td><td>0.10</td></tr><tr>
<td>10</td><td id="10deposit10">0</td><td>0.10</td></tr>
</tbody></table>
<br><br>


<script>
var principal = 1000;

/*
//this for loop doesnt work for some unknown reason
//code is correct, so something else might be happening

for(x = 5; x < 10; x++)
{
  calculate(x);
}
*/

calculate(5);
calculate(6);
calculate(7);
calculate(8);
calculate(9);
calculate(10);
  
  
//document.getElementById("5deposit3").innerHTML = "100";
//document.getElementById("text1").innerHTML = "<h2>PLEASE ENTER A VALID INPUT! Numbers only</h2>";
  
function calculate(percent)
{
  var interest = 1 + (percent * 0.01);
  
  for(x = 0; x < 10; x++)
  {
    var amount = principal * Math.pow(interest, x);
    document.getElementById( percent + "deposit" + (x+1) ).innerHTML = amount.toFixed(2);
  }
}
</script>

<!-- easier for me to premade text than injecting with nothing-->
<!-- mostly used for testing purposes -->

<p id="text2"></p>
<p id="text3"></p>
<p id="text4"></p>

<p id="check1"></p>
<p id="check2"></p>
<p id="check3"></p>
<p id="check4"></p>
<p id="check5"></p>
<p id="check6"></p>


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