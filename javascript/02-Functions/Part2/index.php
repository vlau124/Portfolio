<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 2]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="/css/override.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Tool tip -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
  
  <style> 
  input.t {text-align: right;}
  </style>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Functions [Part 2]</h1>
  
  <!--
  <p>A large company pays its salespeople on a commission basis. The salespeople receive $200 per week, plus 9% of their gross sales for that week. For example, a salesperson who sells $5000 worth of merchandise in a week receives $200 plus 9% of $5000, or a total of $650. You have been supplied with a list of the items sold by each salesperson. The value of these items are as follows:
  </p>

  <p>
  Create a webpage that contains a script that includes at the top of your form  a text box for the salesperson's name for the user to enter. When the user's mouse hovers over this name field, use the jQuery UI tooltip coding to display the message "Please make sure that the salesperson's name is spelled correctly". See this site for more about the jQuery UI tooltip (Links to an external site.)Links to an external site.. Next input that salesperson's items sold for last week, calculates how much the salesperson sold and how much they earned, and then output the results. Be sure to round the outputted results to 2 decimal places. Use form text boxes to input the number sold for each of the items 1-4. You should also check for valid numeric input and right-justify all amounts. Here is a sample display (Links to an external site.)Links to an external site. using tables and form elements.  
  </p>
  -->
  <p>
  Calculate the Weekly Sales & Earnings of sales people. Also displays a tool tip when user hovers over name field using jquery
  </p>
  
  <p>
  A large company pays its salespeople on a commission basis. The salespeople receive $200 per week, plus 9% of their gross sales for that week. For example, a salesperson who sells $5000 worth of merchandise in a week receives $200 plus 9% of $5000, or a total of $650.
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>

  <h2>Weekly Sales & Earnings</h2>

  <!-- Form Input -->
  <form name="myform">
    <p><label for="age">Name:</label>
    <input id="age" title="Please make sure that the person's name is spelled correctly." type="text" name="sp" size="20"></p>

    <h3>Input the number of items sold for each item number:</h3>
    Item 1: <input class="t" type="text" name="num_item1" size="8"><br>
    Item 2: <input class="t" type="text" name="num_item2" size="8"><br>
    Item 3: <input class="t" type="text" name="num_item3" size="8"><br>
    Item 4: <input class="t" type="text" name="num_item4" size="8"><br><br>
    <input type="button" onclick="process()" value="SUBMIT">
    <input type="reset" onclick="location.reload();" value="RESET"><br><br>

    <table>
      <tbody><tr><th>Item #</th><th>Price</th><th>Number Sold</th><th>Total</th></tr>
        <tr><td>1</td><td>$239.99</td><td><input type="text" class="t" name="int_item1" id="item1"></td><td><input type="text" class="t" name="total_item1" id="value1"></td></tr>
        <tr><td>2</td><td>$129.75</td><td><input type="text" class="t" name="int_item2" id="item2"></td><td><input type="text" class="t" name="total_item2" id="value2"></td></tr>
        <tr><td>3</td><td>$99.95</td><td><input type="text" class="t" name="int_item3" id="item3"></td><td><input type="text" class="t" name="total_item3" id="value3"></td></tr>
        <tr><td>4</td><td>$350.89</td><td><input type="text" class="t" name="int_item4" id="item4"></td><td><input type="text" class="t" name="total_item4" id="value4"></td></tr>
        <tr><td colspan="3">Total Amount Sold:</td><td><input type="text" class="t" name="final_total" id="total_sold"></td></tr>
        <tr><td colspan="3">Total Weekly Earnings:</td><td><input type="text" class="t" name="salary" id="week_earn"></td></tr>
      </tbody>
    </table>

  </form>

  <!-- 
  $200 + (0.9 * gross sales)
  -->
  <script>
  function process()
  {
    var name, item1, item2, item3, item4, price1, price2, price3, price4, amount1, amount2, amount3, amount4, amount_sold, earnings;
    
    //initializing variables
    name = document.forms["myform"].elements["sp"].value;
    item1 = parseInt(document.forms["myform"].elements["num_item1"].value);
    item2 = parseInt(document.forms["myform"].elements["num_item2"].value);
    item3 = parseInt(document.forms["myform"].elements["num_item3"].value);
    item4 = parseInt(document.forms["myform"].elements["num_item4"].value);
    
    //If someone doesnt enter a number. Produce a warning statement
    if (isNaN(item1) || isNaN(item2) || isNaN(item3) || isNaN(item4))
    {
    document.getElementById("text4").innerHTML = "<h2>PLEASE ENTER A VALID INPUT!</h2>";
    } else {
    document.getElementById("text4").innerHTML = "<p></p>";
    }
    
    if (name == "")
    {
    document.getElementById("text4").innerHTML = "<h2>NAME MISSING. Please Input the person's name</h2>";
    } else {
    document.getElementById("text4").innerHTML = "<p></p>";
    }
    
    //continue initializing variables
    price1 = 239.99;
    price2 = 129.75;
    price3 = 99.95;
    price4 = 350.89;
    
    amount1 = 0;
    amount2 = 0;
    amount3 = 0; 
    amount4 = 0;
    amount_sold = 0;
    earnings = 0;
    
    //math here
    amount1 = item1 * price1;
    amount2 = item2 * price2;
    amount3 = item3 * price3;
    amount4 = item4 * price4;
    
    amount_sold = amount1 + amount2 + amount3 + amount4;
    //$200 + (0.09 * gross sales)
    earnings =  200 + (0.09 * amount_sold);
    
    //inputting values + rounding to the 2 decimal points
    document.getElementById("item1").value = item1.toFixed(2);
    document.getElementById("item2").value = item2.toFixed(2);
    document.getElementById("item3").value = item3.toFixed(2);
    document.getElementById("item4").value = item4.toFixed(2);
    
    document.getElementById("value1").value = amount1.toFixed(2);
    document.getElementById("value2").value = amount2.toFixed(2);
    document.getElementById("value3").value = amount3.toFixed(2);
    document.getElementById("value4").value = amount4.toFixed(2);
    
    document.getElementById("total_sold").value = amount_sold.toFixed(2);
    document.getElementById("week_earn").value = earnings.toFixed(2);
    
  }
  </script>


  <p id="text1"></p>
  <p id="text2"></p>
  <p id="text3"></p>
  <p id="text4"></p>
  <p id="text5"></p>


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