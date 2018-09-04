<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Objects [Part 3]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- jquery mask -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
  
  <style>
  label {
  display: inline-block;
  width: 320px;
  text-align: right;
  padding-right: 1em;
  }
  
  textarea {
  width: 300px;
  height: 150px;
  }
  </style>
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Objects [Part 3]</h1>

  <p>
  1. Uses different string formats to write the Date and Time.
  <br><br>
  2. Extracts the Area code of a phone number by splitting the strings. with proper formatting.
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <hr>

  <h3>Part1. Date Time Tracking</h3>

  <h4>Using toString()</h4>
  <p id="date1"></p>

  <h4>Using toLocalString()</h4>
  <p id="date2"></p>

  <h4>Using toUTCString()</h4>
  <p id="date3"></p>


  <hr>
  <h4>PST UTC difference (our current time is pst)</h4>
  <p id="time1"></p>

  <h4>EST UTC difference</h4>
  <p id="time2"></p>

  <script>
  var d = new Date();
  document.getElementById("date1").innerHTML = d.toString();
  document.getElementById("date2").innerHTML = d.toLocaleString();
  document.getElementById("date3").innerHTML = d.toUTCString();

  //time zone difference
  //d.getTimezoneOffset(); returns minutes

  /*
  Our current time is PST
  pst to utc (utc is 8 hours ahead)
  est to utc (est is 3 hours ahead of pst)
  */
  var pst = d.getTimezoneOffset() / 60;
  var est = pst - 3;

  document.getElementById("time1").innerHTML = pst + " hours";
  document.getElementById("time2").innerHTML = est + " hours";
  </script>


  <hr>
  <h3>Part2. Area Code & Phone Number Information</h3>

  <form id="Form1">
    <label>Enter Phone Number
      <input type="text" name="phone-number" />
    </label>
    <input type="button" value="Submit" onclick="process1()">
  </form> 

  <!-- jquery mask -->
  <script>
  $('input[name="date"]').mask('00/00/0000');
  $('input[name="postal-code"]').mask('S0S 0S0');
  $('input[name="phone-number"]').mask('(000) 000 0000');

  $('input[name="postal-code"]').focusout(function() {
    $('input[name="postal-code"]').val( this.value.toUpperCase() );
  });
  </script>

  <br>
    
    
  <h4>Output:</h4>

  Area Code:
  <input type="text" id="num1">

  Phone Number:
  <input type="text" id="num2">

  <br>
  Note: Assignment wants the area code and phone number in separate text fields

  <br><br><br>
  
  Error reporting:<br>
  <textarea id="text_area">
  </textarea>
  
  <script>
  function process1()
  {
    var input1 = document.getElementById("Form1").elements.namedItem("phone-number").value;

    //spliting the numbers up
    var split = input1.split(" ");
    
    //document.getElementById("text_area").innerHTML = input1;
    document.getElementById("num1").value = split[0];
    document.getElementById("num2").value = split[1] + "-" + split[2];
    
    //error reporting
    document.getElementById("text_area").innerHTML = "";
    if (input1 == "")
    {
    document.getElementById("text_area").innerHTML += "Please enter a phone number! &#13;&#10;";
    }
    
    if (input1.length != 14)
    {
    document.getElementById("text_area").innerHTML += "Please enter the full number! &#13;&#10;";
    }
  }
  </script>

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