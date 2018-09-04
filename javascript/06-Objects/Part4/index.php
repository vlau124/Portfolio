<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Objects [Part 4]</title>
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
  textarea {
  width: 300px;
  height: 150px;
  }
  
  .area2 {
  width: 300px;
  height: 450px;
  }
  </style>
  
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Objects [Part 4]</h1>

  <p>
  Counts the number of characters in the text area using indexOf
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

 
  <h3>Counting Number of Characters using indexOf</h3>

  <form id="Form1">

    Enter Text:<br>
    <textarea name="comment" form="Form1" placeholder="Enter text here..." required></textarea>
    <br>
    <input type="button" value="Submit" onclick="process1()">
  </form> 

    
    
  <h4>Output:</h4>

  <textarea id="text_area">
  </textarea>

  <script>
  function process1()
  {
    var input1 = document.getElementById("Form1").elements.namedItem("comment").value;
    input1 = input1.toUpperCase();
    inputlength = input1.length;
    var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var split = str.split("");
    
    //array must be initialized before use or it will be NaN
    var char1 = [];
    for(x = 0; x < 26; x++)
    {
      char1[x] = 0;
    }
      
    
    document.getElementById("text_area").innerHTML = "";
    for (n = 0; n < 26; n++)
    {
    
      for (x = 0; x < inputlength; x++)
      {
        index = input1.indexOf(split[n], x);
        if (index != -1)
        {
          char1[n]++;
          x = index;
        } else {
          //all occurance has been found
          //exit loop and move on to speed up program
          x = inputlength;
        }
      }//end of inner loop
      
      //only print out the statement if it is a character in the text
      if (char1[n] !=0)
      {
      document.getElementById("text_area").innerHTML += 
      "The Letter '"+ split[n] + "' occurred " + char1[n] + " times&#13;&#10;";
      }
    }//end of outer loop

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