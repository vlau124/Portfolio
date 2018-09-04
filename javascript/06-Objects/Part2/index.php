<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Objects [Part 2]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- jquery ui -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <style>
  textarea {
  width: 300px;
  height: 150px;
  }
  </style>
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Objects [Part 2]</h1>

  <p>
  Finds and counts the number of occurrences a character occured and uses a new window to display error messages.
  </p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
<br>
  <form id="Form1">
    Enter Text:<br>
    <textarea name="comment" form="Form1" placeholder="Enter text here..." required></textarea>
    <br><br>
    Enter Search Character:<br>
    <input type="text" name="char" placeholder="asdf" required>
    <br>
    <input type="button" value="Submit" onclick="process1()">
  </form> 

  <br>

  Output:<br>
  <textarea id="text_area">
  </textarea>


  <p id="text1"></p>
  <p id="text2"></p>

  <script>
  function process1()
  {
    var input1 = document.getElementById("Form1").elements.namedItem("comment").value;
    var char1 = document.getElementById("Form1").elements.namedItem("char").value;
    
    //change everything to uppercase to make it easy
    input1 = input1.toUpperCase();
    char1 = char1.toUpperCase();
    
    var inputlength = input1.length;
    var occur = 0;
    
    //loop through entire string to find the character
    for ( x = 0; x < inputlength; x++)
    {
      if (input1.charAt(x) == char1)
      {
        occur++;
      }
    }
    
    document.getElementById("text_area").innerHTML =
    "The character '" + char1 + "' occured: " + occur + " times" + "&#13;&#10;";
    
    //If user does not enter the field
    if (input1 == "")
    {
    var newText = "Please Enter Some Text!";
    popup(newText);
    }
    
    if (char1 == "")
    {
    var newText = "Please enter a character!";
    popup(newText);
    }
    
    if (occur == 0 && char1 != "")
    {
    var newText = "Search character not found in text string!&#13;&#10;" +
      "The character: '" + char1 + "' ";
      
      if (input1 == "")
      {
      newText += "(You did not enter any text to be searched!)";
      }

    popup(newText);
    }
  }// End of Process1()
  
  // pop up window
  function popup(newText)
  {
    var myText = "<html>\n";
    myText += "<head>\n";
    myText += "<title>Popup Window</title>\n";
    myText += "</head>\n";
    myText += "<body>\n";
    myText += "<div align='center'>\n";
    myText += "<p><b>" + newText + "</b></p>\n";
    myText += "<input type='button' value='Close Window' onclick='window.close()'>\n";
    myText += "</div>\n";
    myText += "</body>\n";
    myText += "</html>";
    
    var newWindow = window.open("", "new_window", "top=1,left=1,width=300,height=100");
    newWindow.focus();
    newWindow.document.write(myText);
    newWindow.document.close();
  }// End of popup()
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