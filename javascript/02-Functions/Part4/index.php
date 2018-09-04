<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Functions [Part 4]</title>
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

  <h1>Functions [Part 4]</h1>

  <p>
  Determines whether a number or text is a palindrome (the same backward and forward) when you enter 5 digits.
  <br>
  For example: 12321, 55555, 11611, 45554.
  <br>
  Uses Jquery to display instructions.
  </p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <h2>Palindrome</h2>

  <div id="dialog" title="Instructions">
    <p>Input a five-digit integer (not starting with zero) to display if it is a palindrome, not a palindrome, or an input error.</p>
  </div>

  <button id="opener">Click for Instructions</button>

  <br><br>
  <!-- Form Input -->
  <form name="myform">
    Palindrome Check<br>
    <br>
    <input type="text" name="digits" size="10" placeholder="Digits"><br>

    <br>
    <input type="button" onclick="process()" value="SUBMIT">
    <input type="reset" onclick="location.reload();" value="RESET">
    <br><br>
  </form>

  <script>
  function process()
  {
    //I got tired of making so many different names
    //So i am going to give everything the same name
    var digits, length;
    
    //initializing variables
    digits = parseInt(document.forms["myform"].elements["digits"].value);
    
    //If someone doesnt enter a number. Produce a warning statement
    if (isNaN(digits) )
    {
    document.getElementById("text2").innerHTML = "<h2>PLEASE ENTER A VALID INPUT! Numbers only</h2>";
    } else {
    document.getElementById("text2").innerHTML = "<p></p>";
    }
    
    
    //check to see if user entered 5 digits
    var str = digits.toString();
    dlength = str.length;
    
    if( dlength != 5)
    {
    document.getElementById("text3").innerHTML = "<h2>The number you inputed isn't 5 digits</h2>";
    } else { 
      //Check for palidrome
      if(str.charAt(0) == str.charAt(4) && str.charAt(1) == str.charAt(3))
      {
      document.getElementById("text1").innerHTML = "<h3>Congrats the number you entered " + digits + " is a Palidrome!</h2>";
      document.getElementById("text3").innerHTML = "";
      } else {
      document.getElementById("text1").innerHTML = "<h2>I am sorry the number " + digits + " is not a Palidrome</h2>";
      }
    }
    
  }
  </script>

  <!-- easier for me to premade text than injecting with nothing-->
  <p id="text1"></p>
  <p id="text2"></p><!-- used for errors -->
  <p id="text3"></p> <!-- used for errors -->



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