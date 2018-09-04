<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Looping Statements [Part 5]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <!-- jquery show hide stuff -->
  <script> 
  $(document).ready(function(){
      $("#flip").click(function(){
          $("#panel").slideToggle("slow");
      });
  });
  </script>
  
  <style> 
  #panel, #flip {
      padding: 5px;
      text-align: center;
      color: #FFFFFF;
      background-color: #000000;
      border: solid 1px #c3c3c3;
      opacity:0.7;
  }

  #panel {
      padding: 10px;
      display: none;
  }
  </style>
  
  <!-- jquery valdiation stuff to check if input are correct--> 
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  <script>
  //JQuery for validation displays error message if form input is not a number
  $(document).ready(function()
  {
    $("#myform").validate(
    {
      // Rules for each input item
      rules: 
      {
        num: { required: true, number: true, min: 1, max: 3}
      }
    });	  
  });

  function process()
  {
    if ($("#myform").valid())
    {
      // define variables	
      var numb;
      // get input number value from form using getElementById
      numb = document.getElementById("num").value;
      document.forms["myform"].elements["comment"].value =  ( numb + "  is a number between 0 and 10" );
    }
  }
  </script>
  <!-- style for jquery error -->
  <style>
  .error
  {
  font: normal 14px arial;
  padding: 3px;
  margin: 3px;
  color: white;
  background-color: rgba(0,0,0,0.7);
  width:200px;
  display:block;
  }
  </style>
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Looping Statements [Part 5]</h1>

<p>
Changes list formats for one of the three formats listed:
<br><br>
1 - unordered list (&lt;  ul style="list-style-type: square;">)<br>
2 - ordered number list (&lt; ol>)<br>
3 - ordered letter list (&lt; ol style="list-style-type: upper-alpha;">)<br>
<br>
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
<br><br>
<div id="flip">Click to Show/Hide Instructions</div>
<div id="panel">Please pick number between 1 and 3 to see different list format</div>

<br>

<form id="myform" name="myform" novalidate="novalidate">
  <input type="text" name="num" size="10" value="1" style="width: 200px; height:50px; font-size:30px;" autofocus="">
  <br><br>
  <input type="button" value="Select" onclick="process()" style="width: 100px; height:30px; font-size:20px;">
  <input type="reset" value="Reset" size="10" style="width: 100px; height:30px; font-size:20px;">
</form>

<p id="text1"></p>

<div id="listme">
</div>

<br><br><br>
<p>Samples:</p>
<ul style="list-style-type:square">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

<ol>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol> 

<ol type="A">
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ol>

<script>
function process()
{
  var choice = parseInt(document.forms["myform"].elements["num"].value);
  var open1;
  var open2;
  var superstr;

  //we are using jquery to check for valid numbers instead
  //check(choice);
  switch (choice)
    {
      case 1:
        var open1 = '<ul style="list-style-type:square">';
        var open2 = '</ul>';
        break; 
      case 2:
        var open1 = '<ol>';
        var open2 = '</ol>';
        break; 
      case 3:
        var open1 = '<ol type="A">'; //why doesnt this statement work
        //var open1 = '<ol style="list-style-type: upper-alpha;">';
        var open2 = '</ol>';
        break;  
    default:
    valInput = false;
    }
    //writelist(open1, open2);
    
    //it only works if its added together as 1 whole string you cant add it on to it separately
    writelist2(open1, open2);
    //document.getElementById("listme").innerHTML = '<ul style="list-style-type:square"><li>List item ' + 1 + '</li></ul>';
    
    
    
    //document.getElementById("listme").innerHTML += '</ol>';
}//end of process()

function check(digits)
{
  if (isNaN(digits) || digits ==0 )
  {
  document.getElementById("text1").innerHTML = "<h2>PLEASE ENTER A VALID INPUT!<br> Numbers 1-3 only</h2>";
  } else {// if all the numbers are correct then clear the warning
  document.getElementById("text1").innerHTML = "<p></p>";
  }
}//end of check

//glueing all the strings together and printing them o ut
function writelist(str1, str2)
{
  var str3;
  document.getElementById("listme").innerHTML = "<h3>Order Number List</h3>";
  document.getElementById("listme").innerHTML += str1;
  for(x = 0; x < 3; x++)
  {
    str3 = "<li>List item " + x + "</li>";
    document.getElementById("listme").innerHTML += str3;
  }
  document.getElementById("listme").innerHTML += str2;
}//end of writelist

//it only works if its added together as 1 whole string you cant add it on to it separately
function writelist2(str1, str2)
{
  var str3;
  document.getElementById("listme").innerHTML = "<h3>Order Number List</h3>";
  superstr = str1;
  for(x = 0; x < 3; x++)
  {
    str3 = "<li>List item " + x + "</li>";
    superstr = superstr + str3;
  }
  superstr = superstr + str2;
  document.getElementById("listme").innerHTML = superstr;
}//end of writelist

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