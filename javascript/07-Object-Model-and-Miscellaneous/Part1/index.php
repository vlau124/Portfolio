<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Object Model and Miscellaneous jQuery [Part1]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
  .style1 {
    width: 300px;
    height: 100px;
    font-size: 25px;
    text-align: center;
    background-color: coral;
    color: white;
    margin-bottom: 10px;
    border-style: solid;
  }
  
  .style2 {
    width: 1000px;
    height: 120px;
    text-align: center;
    font-size: 100px;
    margin-bottom: 10px;
    border-style: solid;
  }
  
  .style3 {
    width: 300px;
    height: 100px;
    text-align: center;
    font-size: 25px;
    margin-bottom: 10px;
    border-style: solid;
  }
  
  .style4 {
    width: 300px;
    height: 100px;
    text-align: center;
    font-size: 25px;
    //font-family: Arial;
    font-family: "Comic Sans MS", cursive, sans-serif;
    margin-bottom: 10px;
    border-style: solid;
  }
  
  .style5 {
    width: 300px;
    height: 100px;
    text-align: center;
    font-size: 25px;
    margin-bottom: 10px;
    border-style: solid;
    font-weight: 900;
  }
  
  .default {
    width: 300px;
    height: 100px;
    font-size: 25px;
    border-style: solid;
    margin-bottom: 10px;
    text-align: center;

  }
  </style>
  
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Object Model and Miscellaneous jQuery [Part1]</h1>

  <p>
  Manipulate the page layout and formatting through properties.
  </p>
  
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>

  <form id="Form1">
    Select an option to change text format:<br>
    <input type="radio" name="round" value="1"> 1. Background color orange<br>
    <input type="radio" name="round" value="2"> 2. Increase font size<br>
    <input type="radio" name="round" value="3"> 3. Decrease font size<br>
    <input type="radio" name="round" value="4"> 4. Everyone Hates Comic Sans<br>
    <input type="radio" name="round" value="5"> 5. Increase Font Weight<br>
    <input type="radio" name="round" value="6"> 6. Back to normal<br>
    <br>
    <input type="button" value="Select" onclick="process1()">
  </form> 

  <br>
  <p>Output</p>

  <div id="myDIV" class="default">
  Sample Text Element
  </div>

  <p id="text1"></p>
  <p id="text2"></p>

  <script>
  function process1()
  {
    // both ways of getting form data works
    //var num = document.getElementById("Form1").elements.namedItem("num").value;
    //var num = parseFloat(document.querySelector('input[name = "num"]').value);
    var rselect = document.querySelector('input[name = "round"]:checked').value;
    
    if (rselect == null)
    {
      document.getElementById("text1").innerHTML = "You have selected: nothing";
    } else {
      document.getElementById("text1").innerHTML = "You have selected: " + rselect;
    }
      
    switch (rselect)
    {
    case "1":
      document.getElementById("myDIV").className = "style1";
      break;
    case "2":
      document.getElementById("myDIV").className = "style2";
      break;
    case "3":
      document.getElementById("myDIV").className = "style3";
      break;
    case "4":
      document.getElementById("myDIV").className = "style4";
      break;
    case "5":
      document.getElementById("myDIV").className = "style5";
      break;
    case "6":
      document.getElementById("myDIV").className = "default";
      break;
    default:
      document.getElementById("myDIV").className = "default";
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