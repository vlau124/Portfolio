<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Objects [Part 1]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
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

  <h1>Objects [Part 1]</h1>

  <p>
  Uses Math.round, Math.sqrt and Math.floor to round numbers.
  <br><br>

  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
<br>
  <form id="Form1">
    Enter Number Here:<br>
    <input type="number" name="num" placeholder="1234" required>
    <br><br>
    Select an operation:<br>
    <input type="radio" name="round" value="a" required>round to nearest integer<br>
    <input type="radio" name="round" value="b">square root & round to integer<br>
    <input type="radio" name="round" value="c">round to nearest tenths<br>
    <input type="radio" name="round" value="d">round to nearest hunderdths<br>
    <input type="radio" name="round" value="e">round to nearest thousandths<br>
    <br>
    <input type="button" value="Submit" onclick="process1()">
  </form> 

  <br>
  <p>Output</p>
  <textarea id="text_area" rows="10" cols="50">
  </textarea>

  <p id="text1"></p>
  <p id="text2"></p>

  <script>
  function process1()
  {
    // both ways of getting form data works
    //var num = document.getElementById("Form1").elements.namedItem("num").value;
    var num = parseFloat(document.querySelector('input[name = "num"]').value);
    var rselect = document.querySelector('input[name = "round"]:checked').value;
    
    var new_num;
    var html;
    
    switch(rselect) {
      case "a":
          //round to integer
          new_num = Math.round(num);
          html = "round to integer: ";
          break;
      case "b":
          //square root then round to inter
          new_num = Math.round( Math.sqrt(num) );
          html = "square root then round to integer: ";
          break;
      case "c":
          //round to tenths
          new_num = (Math.round(10*num)/10).toFixed(1);
          html = "round to tenths: ";
          break;
      case "d":
          //round to hundredths
          new_num = (Math.round(100*num)/100).toFixed(2);
          html = "round to hundredths: ";
          break;
      case "e":
          //round to thousandths
          new_num = (Math.round(1000*num)/1000).toFixed(3);
          html = "round to thousandths: ";
          break;
      default:
          new_num = "Wrong selection..";
    }
    document.getElementById("text_area").innerHTML = html + "&#13;&#10;"  + new_num;
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