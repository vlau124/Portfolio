<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Arrays [Part 4]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->  
  <!-- jump to block has been deleted it was causing issues with the jquery drag addon -->
  <!-- ////////////////////////////////Self Note//////////////////////////////// -->
    
    
  
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <!-- validator stuff -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  
<!-- commenting it out because it keeps refreshing the page
  <script>
  $(document).ready(function(){
      $("#registerForm").validate();
    });
  </script>
-->
  
  <style>
  .error {
	font: normal 10px arial;
	padding: 3px;
	margin: 3px;
	background-color: #ffc;
	border: 1px solid #c00;
  }
  </style>
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Arrays [Part 4]</h1>

  <p>
  Using a 1 dimensional array read 10 numbers between 10 and 100 and find duplicate numbers entered.
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <!-- Part 1a -->
  <h2>Duplicate Numbers</h2>

  <p>
  We shall find duplicate numbers
  </p>

  <form id="Form1">
  Enter 10 Numbers Here:<br>
  <input type="number" placeholder="1234" name="input0" min="10" max="100" class="required"><br>

  <input type="button" value="Submit" onclick="process1()" style="width: 100px; height:30px; font-size:20px;">
  <!--
  <input type="submit" value="Submit" onclick="process1()" style="width: 100px; height:30px; font-size:20px;">
  -->
  </form>

  <!-- commenting it out because it keeps refreshing the page
  <script>
  $("#Form1").validate();
  </script>
  -->


  <script>
  //document.getElementById("text2").innerHTML = numberlist[n];
  //var numberlist = [];
  var numberstore = [];
  var count = [];
  var n = 0;

  function process1()
  {
    //numberlist[n] = document.getElementById("Form1").elements.namedItem("input0").value;
    new_number = document.getElementById("Form1").elements.namedItem("input0").value;
    var html2 = "";
      
    //if this is the first number entered store the number
    if (n == 0)
    {
      numberstore[0] = new_number;
      count[0] = 1;
      html2 += "numberstore[0]" + numberstore[0] + "<br>";
      html2 += "count[0]" + count[0] + "<br>";
    }

    if (n != 0)
    {
      //loop through all the numbers stored
      var nlength = numberstore.length;
      for (x = 0; x < nlength; x++)
      { 
        var bool_check = false;
        //check if we stored the number before if we did add to the count
        if (new_number == numberstore[x])
        {
          count[x]++;
          html2 += "x=" + x + " |count[x]=" + count[x] + "  asdfasdf1<br>";
          bool_check = true;
        }

        //if not then store the number
        if (new_number != numberstore[x])
        {
              html2 += bool_check +"<br>";
              bool_check = true;
              
          numberstore[nlength] = new_number;
          //cannot use ++ or += 1
          //we cant add 1 to null thats why
          count[nlength] = 1; 
          
              html2 += "x=" + x + " n= "+ n + " numberstore= " + 
              numberstore[nlength]+ " count= "+ count[nlength] 
              + " nlength= " + nlength + "  asdf2<br>";
        }
        
      }//end of foor loop
      
    }//end of n check
    
    n++;

    document.getElementById("text3").innerHTML = html2;
    
    document.getElementById("text1").innerHTML = "<b>You have entered " + n + " numbers total</b>";
    
    //intiating html string
    var html = "";
    document.getElementById("injectme").innerHTML = "";
    
    //creating the table
    html += '<table border="1">';
    html += '<tbody>';
    
    html += '<tr>';
    html += '<th>Number Entered</th>';
    html += '<th>Duplicates</th>';
    html += '</tr>';
    

    //loop through entire array to store html and print
    var nlength = numberstore.length;
    for (x = 0; x < numberstore.length; x++)
    {
      html += '<tr>';
      html += '<td>' + numberstore[x] + '</td>';
      html += '<td>' + count[x] + '</td>';
      html += '</tr>';
    }

    html += '<tbody>';
    html += '</table>';
    
    
    document.getElementById("injectme").innerHTML = html;
    //document.getElementById("text1").innerHTML = "<b>This employee does not meet the quota! Fire Him!</b>";
  }
  </script>

  <br>

  <p id="text1"></p>
  <p id="text2"></p>


  <div id="injectme">
  </div>

  <br>
  <br>
  <br>
  <br>
  <!-- testing purposes -->

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