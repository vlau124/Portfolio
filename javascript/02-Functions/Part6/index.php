<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 6]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
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

  <h1>Functions [Part 6]</h1>

  <p>
  Educational program that helps elementary school student learn multiplication. Questions are generated randomly through a separate function.
  </p>
  
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <h2>Educational Program</h2>

  <!-- Form Input -->
  <form name="myform">
    <h2 id="Directions">Press start to begin!</h2>
    <!-- Celsius -->
    <input type="text" name="Answer" placeholder="Answer" id="Answer" style="width: 200px; height:50px; font-size:30px;" >
    <!-- Fahrenheit -->
    <br><br>
    <!-- injecting this.value -->
    <input type="button" onclick="process(this.value)" name="start" value="Start" id="S" style="width: 203px; height:50px; font-size:15px;">
    <!--
    <input type="button" onclick="process(this.value)" name="F" value="Convert to Fahrenheit" style="width: 203px; height:50px; font-size:15px;" >
    -->
    <br><br>
    <input type="reset" onclick="location.reload();" value="RESET">
    <br><br>
  </form>

  <script>
  var global = 0;
  var global_num1 = 0;
  var global_num2 = 0;
  var global_solution = 0;

  function process(val)
  {
    //I got tired of making so many different names
    //So i am going to give everything the same name
    var user_answer;
    
    /*  Statement1
    global = 0
    change start button to next
    Generate number and store them 
    change directions to question
    Reset answer box
    */
    if(global == 0)
    {
      document.getElementById("S").value = "Next => ";
      
      global_num1 = parseInt(Math.random()*10);
      global_num2 = parseInt(Math.random()*10);
      global_solution = global_num1 * global_num2;
      
      document.getElementById("Directions").innerHTML = "How much is " + global_num1 + " times " + global_num2 + "?";
      document.getElementById("Answer").value = "";
    }
    
    
    /*  Statement2
    global = 1
    user inputs answer and press next
    grab answer from user
    check if answer is a number
    check if answer is correct
    
    */
    if (global == 1)
    {
      user_answer = parseInt(document.forms["myform"].elements["Answer"].value);
      
      if (isNaN(user_answer) )
      {
        document.getElementById("text2").innerHTML = "<h2>PLEASE ENTER A VALID INPUT! Numbers only</h2>";
        document.getElementById("Answer").value = "";
      } else {
        document.getElementById("text2").innerHTML = "<p></p>";
      }
      
      if (user_answer == global_solution)
      {
        document.getElementById("Directions").innerHTML = "Correct! Press Next to continue or Reset to stop";
        document.getElementById("h2").innerHTML = "";
        document.getElementById("Answer").value = "";
        //we cannot start back at 0 so start at 1 to get other reset statement
        global = 1
      }
      
      if (user_answer != global_solution)
      {
        document.getElementById("h2").innerHTML = "I am sorry that answer is incorrect. Try again!";
        document.getElementById("Answer").value = "";
        //loop back to this statement2
        global = 0;
      }
      //global = 0;
    }
    
    /*  Statement3
    global = 2
    reset answer box
    generate numbers
    generate next question
    generate new answer
    */
    if (global == 2)
    {
      document.getElementById("S").value = "Next => ";
      
      global_num1 = parseInt(Math.random()*10);
      global_num2 = parseInt(Math.random()*10);
      global_solution = global_num1 * global_num2;
      
      document.getElementById("Directions").innerHTML = "How much is " + global_num1 + " times " + global_num2 + "?";
      document.getElementById("Answer").value = "";
      //loop back to other statement2
      global = 0;
    }
    
    //cannot get global back to 0 with this statement.
    global = global + 1;
    //change text


  }
  </script>

  <!-- easier for me to premade text than injecting with nothing-->
  <!-- mostly used for testing purposes -->
    <p id="text1"></p>
    <p id="text2"></p>
    <p id="text3"></p>
    <p id="text4"></p>
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