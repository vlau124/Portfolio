<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 3]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- Tool tip -->
  <script>
    $( function() {
      $( document ).tooltip();
    } );
  </script>
  
  <style> 
  input.t {text-align: right;}
  </style>
  
  <script>
  $(document).ready(function(){
      $("button").click(function(){
          $("p").css({
              "color": "white",
              "background-color": "#000000",
              "font-family": "Arial",
              "font-size": "20px",
              "padding": "5px"
          });
      });
  });
  </script>

</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">
<!-- /////////////////////////////////////Everything Starts Here////////////////////////////// -->

  <h1>Functions [Part 3]</h1>

  <p>
  Determines whether a department-store customer has exceeded the credit limit on their charge account.
  Calculate the new balance (which equals beginning balance + charges – credits), and determine whether the new balance exceeds the customer's credit limit and by how much.
  <br><br>
  Click to change Textarea properties using Jquery.
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  
  <h2>Customer Store Credit</h2>

  <!-- Form Input -->
  <form name="myform">
    Account number<br>
    <input type="text" name="acc" size="10" placeholder="Account Number"><br>
    Balance at the begining of the month<br>
    <input type="text" name="balance" size="10" placeholder="Balance"><br>
    Total of all items charged by this customer this month<br>
    <input type="text" name="item_charge" size="10" placeholder="Items Charged"><br>
    Total of all credits applied to this customer's account this month<br>
    <input type="text" name="credit_applied" size="10" placeholder="Credits Applied"><br>
    Allowed credit limit<br>
    <input type="text" name="allowed_credit" size="10" placeholder="Credit Limit"><br>

    <input type="button" onclick="process()" value="SUBMIT">
    <input type="reset" onclick="location.reload();" value="RESET">
    <br><br>
  </form>

  <!--
  new balance = begining balance + charges - credits

  does new balance exceed customer's credit limit
  -->

  <script>
  function process()
  {
    //I got tired of making so many different names
    //So i am going to give everything the same name
    var acc, balance, item_charge, credit_applied, allowed_credit, 
      new_balance, available_credit;
    
    //initializing variables
    acc = parseInt(document.forms["myform"].elements["acc"].value);
    balance = parseInt(document.forms["myform"].elements["balance"].value);
    item_charge = parseInt(document.forms["myform"].elements["item_charge"].value);
    credit_applied = parseInt(document.forms["myform"].elements["credit_applied"].value);
    allowed_credit = parseInt(document.forms["myform"].elements["allowed_credit"].value);
    new_balance = 0;
    Total_credits_month = 0;
    available_credit = 0;
    
    //If someone doesnt enter a number. Produce a warning statement
    if (isNaN(acc) || isNaN(balance) || isNaN(item_charge) || isNaN(credit_applied) || isNaN(allowed_credit) )
    {
    document.getElementById("text11").innerHTML = "<h2>PLEASE ENTER A VALID INPUT!</h2>";
    } else {
    document.getElementById("text11").innerHTML = "<p></p>";
    }
    
    //math here
    // new balance = begining balance + charges - credits
    // allowed credit - new balance
    new_balance = balance + item_charge - credit_applied;
    available_credit = allowed_credit - new_balance;
    
    //Writing Output
    document.getElementById("text1").innerHTML = "<p>Credit Account Summary Account Number: " + acc +"</p>";
    document.getElementById("text2").innerHTML = "<p>Credit Limit: " + allowed_credit + "</p>";
    document.getElementById("text3").innerHTML = "<p>Balance at beginning of month: " + balance +"</p>";
    document.getElementById("text4").innerHTML = "<p>Total amount charged this month: " + item_charge + "</p>";
    document.getElementById("text5").innerHTML = "<p>Total amount of credits this month: " + credit_applied + "</p>";
    document.getElementById("text6").innerHTML = "<p>Summary: The new balance is: " + new_balance + "</p>";
    
    if(available_credit >=0)
    {
      document.getElementById("text7").innerHTML = "<p>Credit available is: " + available_credit + "</p>";
    }
    
    if(available_credit < 0)
    {
    document.getElementById("text7").innerHTML = "<p>Credit limit exceeded by: " + (available_credit * -1) + "</p>";
    }
    
    //inputting values + rounding to the 2 decimal points
    //document.getElementById("item1").value = item1.toFixed(2);
    
  }
  </script>

  <!-- easier for me to premade text than injecting with nothing-->
  <p id="text1"></p>
  <p id="text2"></p>
  <p id="text3"></p>
  <p id="text4"></p>
  <p id="text5"></p>
  <p id="text6"></p>
  <p id="text7"></p>
  <p id="text8"></p>
  <p id="text9"></p>
  <p id="text10"></p>
  <p id="text11"></p> <!-- used for errors -->


  <button>Set multiple CSS properties for all p elements</button>>

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