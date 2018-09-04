<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 2]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="/css/override.css">

  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Looping Statements [Part 2]</h1>

<p>
Determine the gross pay for each of six employees. The company pays "straight time" for the first 40 hours worked by each employee and pays "time and a half" for all hours worked in excess of 40 hours.</p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
<br><br>

<!-- form here -->
<p>Input the number of hours worked and the hourly rate:</p>

<form name="gross_pay">
  <table>
  <tbody><tr><th>Employee</th><th>Hours Worked</th><th>Hourly Rate</th></tr>
  <tr><td>Employee 1: </td><td><input type="text" name="hours1"></td><td><input type="text" name="rate1"></td></tr>
  <tr><td>Employee 2: </td><td><input type="text" name="hours2"></td><td><input type="text" name="rate2"></td></tr>
  <tr><td>Employee 3: </td><td><input type="text" name="hours3"></td><td><input type="text" name="rate3"></td></tr>
  <tr><td>Employee 4: </td><td><input type="text" name="hours4"></td><td><input type="text" name="rate4"></td></tr>
  <tr><td>Employee 5: </td><td><input type="text" name="hours5"></td><td><input type="text" name="rate5"></td></tr>
  <tr><td>Employee 6: </td><td><input type="text" name="hours6"></td><td><input type="text" name="rate6"></td></tr>
  </tbody>
  </table>
  
  <input type="button" value="Submit" onclick="process()">
  <input type="reset" value="Reset"> <br> <br>

  <table>
  <tbody><tr><th>Employee</th><th>Hours worked</th><th>Hourly Rate</th><th>Gross Pay</th></tr>
  <tr><td>1</td><td><input type="text" name="f_hours1" disabled=""></td><td><input type="text" name="f_rate1" disabled=""></td><td><input type="text" name="gross1" disabled=""></td>
  </tr><tr><td>2</td><td><input type="text" name="f_hours2" disabled=""></td><td><input type="text" name="f_rate2" disabled=""></td><td><input type="text" name="gross2" disabled=""></td>
  </tr><tr><td>3</td><td><input type="text" name="f_hours3" disabled=""></td><td><input type="text" name="f_rate3" disabled=""></td><td><input type="text" name="gross3" disabled=""></td>
  </tr><tr><td>4</td><td><input type="text" name="f_hours4" disabled=""></td><td><input type="text" name="f_rate4" disabled=""></td><td><input type="text" name="gross4" disabled=""></td>
  </tr><tr><td>5</td><td><input type="text" name="f_hours5" disabled=""></td><td><input type="text" name="f_rate5" disabled=""></td><td><input type="text" name="gross5" disabled=""></td>
  </tr><tr><td>6</td><td><input type="text" name="f_hours6" disabled=""></td><td><input type="text" name="f_rate6" disabled=""></td><td><input type="text" name="gross6" disabled=""></td>
  </tr></tbody>
  </table>
</form>

<p id="text1"></p>

<script>
var checkcount = 0;
function process()
{
  var hours = [];
  var rate = [];
  var employee = [];
  
  //check count is for displaying the warning and clearing the warning
  checkcount = 0;
  //condensing all the steps together
  for (x = 0; x < 6; x++)
  {
    //grabbing all the form data
    hours[x] = parseInt(document.forms["gross_pay"].elements["hours" + (x + 1)].value);
    rate[x] = parseInt(document.forms["gross_pay"].elements["rate" + (x + 1)].value);
    employee[x] = x + 1;
    
    //check if user entered numbers correctly
    check(hours[x]);
    check(rate[x]);
    check(employee[x]);
    
    //calculate and print the gross pay
    calculate(hours[x], rate[x], employee[x]);
  }

}

//checks to see if numbers are valid
function check(digits)
{
  if (isNaN(digits) )
  {
  checkcount++;
  document.getElementById("text1").innerHTML = "<h2>PLEASE ENTER A VALID INPUT! Numbers only</h2>";
  } else if (checkcount == 0) {// if all the numbers are correct then clear the warning
  document.getElementById("text1").innerHTML = "<p></p>";
  }
}

//calculate the gross pay for employees
function calculate(hoursx, ratex, employee)
{
  var pay = 0;
  //first 40 hours
  if(hoursx <=40)
  {
    pay = hoursx * ratex;
  }
  
  //over time
  //half pay when working extra hours
  
  if(hoursx > 40)
  { 
    //var extra_hours = (hoursx - 40) / 2;
    //pay  = (40 + extra_hours) * ratex;
    // i thought over time you get paid half less
    pay = (40 * ratex) + ((hoursx - 40) * 1.5 * 10);
  }
  
  print(hoursx, ratex, employee, pay);
}

//print the results + round to the 2 decimal places
function print(hoursx, ratex, employee, pay)
{
  document.forms["gross_pay"].elements["f_hours" + employee].value = hoursx;
  document.forms["gross_pay"].elements["f_rate" + employee].value = ratex;
  document.forms["gross_pay"].elements["gross" + employee].value = pay.toFixed(2);
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