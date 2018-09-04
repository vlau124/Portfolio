<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 5]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>
  
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Functions [Part 5]</h1>

  <p>
  Temperature Conversion.
  <br>
  C = 5/9 * (F - 32) 
  <br>
  F = (9/5 * C) + 32
  </p>
  
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <h2>Temperature Conversion</h2>

  <!-- Form Input -->
  <form name="myform">
    <br>
    <!-- Celsius -->
    <input type="text" name="Celsius" placeholder="Celsius" id="C" style="width: 200px; height:50px; font-size:30px;" >
    <!-- Fahrenheit -->
    <input type="text" name="Fahrenheit" placeholder="Fahrenheit" id="F" style="width: 200px; height:50px; font-size:30px;" >
    <br><br>
    <!-- injecting this.value -->
    <input type="button" onclick="process(this.value)" name="C" value="Convert to Celsius" style="width: 203px; height:50px; font-size:15px;" >
    <input type="button" onclick="process(this.value)" name="F" value="Convert to Fahrenheit" style="width: 203px; height:50px; font-size:15px;" >
    
    <br><br>
    <input type="reset" onclick="location.reload();" value="RESET">
    <br><br>
  </form>


  <script>
  function process(val)
  {
    //I got tired of making so many different names
    //So i am going to give everything the same name
    var Cvalue, Fvlaue, mode, output;
    
    //initializing variables
    Cvalue = parseInt(document.forms["myform"].elements["Celsius"].value);
    Fvalue = parseInt(document.forms["myform"].elements["Fahrenheit"].value);
    mode = val.toString();
    output = 0;
    
    //document.getElementById("text2").innerHTML = "<h2>Cvalue " + Cvalue + " Fvalue " + Fvalue + "</h2>";
    
    switch(mode)
    {
    case "Convert to Celsius":
      //check to see if user entered a value
      if (isNaN(Fvalue) )
      {
      document.getElementById("text2").innerHTML = "<h2>Please input a numeric value for Celcius or Press the correct button</h2>";
      } else {
      document.getElementById("text2").innerHTML = "<p></p>";
      }
      
      //C = 5/9 * (F - 32) 
      output = (5/9) * (Fvalue - 32);
      document.getElementById("C").value = output.toFixed(2);
      break;
    case "Convert to Fahrenheit":
      //check to see if user entered a value
      if (isNaN(Cvalue) )
      {
      document.getElementById("text2").innerHTML = "<h2>Please input a numeric value for Fahrenheit or Press the correct button</h2>";
      } else {
      document.getElementById("text2").innerHTML = "<p></p>";
      }
      
      //F = (9/5 * C) + 32
      output = ( (9/5) * Cvalue ) + 32;
      document.getElementById("F").value = output.toFixed(2);
      break;
    }
    
    
    //If someone doesnt enter a number. Produce a warning statement
    /*
    if (isNaN(Cvalue) )
    {
    document.getElementById("text2").innerHTML = "<h2>PLEASE ENTER A VALID INPUT! Numbers only</h2>";
    } else {
    document.getElementById("text2").innerHTML = "<p></p>";
    }
    */

    
  }
  </script>

  <!-- easier for me to premade text than injecting with nothing-->
  <p id="text1"></p>
  <p id="text2"></p><!-- used for errors -->
  <p id="text3"></p> <!-- used for errors -->

  <!--
  <p id="text4"><b>This can be done with one button, but assignment requires 2 buttons for conversion</b></p>
  -->
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