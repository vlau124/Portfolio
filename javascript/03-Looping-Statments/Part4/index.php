<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 4]</title>
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

<h1>Looping Statements [Part 4]</h1>

<p>
Calculate the total amount sold
<br><br>
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
<br><br>

<form name="myform">
  <table border="1"><tbody>
    <tr>
      <th>Product #</th>
      <th>Qty</th>
      <th>Price</th>
      <th>Amount</th>
    </tr>

    <tr>
      <td><input class="c" type="text" name="p1" size="10" value="1" disabled="disabled"></td>
      <td><input class="r" type="text" name="qty1" size="5" value="2"></td>
      <td>2.98</td>
      <td><input class="r" type="text" name="a1" size="8" value="0"></td>
    </tr>

    <tr>
      <td><input class="c" type="text" name="p2" size="10" value="2" disabled="disabled"></td>
      <td><input class="r" type="text" name="qty2" size="5" value="3"></td>
      <td>4.50</td>
      <td><input class="r" type="text" name="a2" size="8" value="0"></td>
    </tr>

    <tr>
      <td><input class="c" type="text" name="p2" size="10" value="3" disabled="disabled"></td>
      <td><input class="r" type="text" name="qty3" size="5" value="4"></td>
      <td>9.98</td>
      <td><input class="r" type="text" name="a3" size="8" value="0"></td>
    </tr>

    <tr>
      <td><input class="c" type="text" name="p4" size="10" value="4" disabled="disabled"></td>
      <td><input class="r" type="text" name="qty4" size="5" value="1"></td>
      <td>4.49</td>
      <td><input class="r" type="text" name="a4" size="8" value="0"></td>
    </tr>

    <tr>
      <td><input class="c" type="text" name="p5" size="10" value="5" disabled="disabled"></td>
      <td><input class="r" type="text" name="qty5" size="5" value="1"></td>
      <td>6.87</td>
      <td><input class="r" type="text" name="a5" size="8" value="0"></td>
    </tr>

    <tr>
      <th colspan="3">Total Amount Sold:</th>
      <td><input class="r" type="text" name="ts" size="8" value="0"></td>
    </tr>
            
    <tr>
      <td><input type="button" value="Calculate" onclick="process()"></td>
      <td><input type="reset" value="Reset" size="10"></td>
    </tr>
        
  </tbody></table>
</form>

<p id="text1"></p>

<script>
var checkcount = 0;
function process()
{
  var price = [];
  var quantity = [];
  var amount = [];
  var total = 0;
  var price_val = 0;
  
  price[0] = 2.98;
  price[1] = 4.50;
  price[2] = 9.98;
  price[3] = 4.49;
  price[4] = 6.87;
  
  //check count is for displaying the warning and clearing the warning
  checkcount = 0;
  
  for(x = 0; x < 5; x++)
  {
    quantity[x] = parseInt(document.forms["myform"].elements["qty" + (x + 1)].value);
    check(quantity[x]);
    //amount[x] = price[x] * quantity[x];
    //teacher wants me to use a switch statement, but i already did it without it...
    // i guess ill do it again with the case statement
    switch (x)
    {
      case 0:
        price_val = price[x];
        break; 
      case 1:
        price_val = price[x];
        break; 
      case 2:
        price_val = price[x];
        break;  
      case 3:
        price_val = price[x];
        break; 
      case 4:
        price_val = price[x];
        break; 
    default:
    valInput = false;
    }
    
    amount[x] = price_val * quantity[x];
    //printing values
    document.forms["myform"].elements["a" + (x + 1)].value = amount[x];
    //runing total
    total += amount[x]; 
  }
  
  //printing values
  document.forms["myform"].elements["ts"].value = total.toFixed(2);

}

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