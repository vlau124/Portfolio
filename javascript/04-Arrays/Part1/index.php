<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Arrays [Part 1A]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="/css/override.css">
  
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
  
  <!-- validator -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

  <script>
  $(document).ready(function(){
    $("#registerForm").validate();
  });
  </script>

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

  <h1>Arrays [Part 1A]</h1>

  <p>
  Part 1A: Checks for user inputs and executes form validation. Uses post and submit to display form processing.
  </p>

  <p>
  Part 1B:  Uses form pull down menus and onChange event handler to navigate webform links.
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <!-- Part 1a -->
  <h2>Part1A: Webform selection</h2>

  <form id="Form1" action="#">
    Input Text Box:<br>
    <input type="text" placeholder="Input Text Box" name="input1" class="required"><br>
    <input type="radio" name="Radio1" value="Radio Button1" class="required"> Radio Button1<br>
    <input type="radio" name="Radio2" value="Radio Button2" class="required"> Radio Button2<br>
    <input type="radio" name="Radio3" value="Radio Button3" class="required"> Radio Button3<br>
    <input type="checkbox" name="Box1" value="Check Box1" class="required"> Check Box1<br>
    <input type="checkbox" name="Box2" value="Check Box2" class="required"> Check Box2<br>
    <input type="checkbox" name="Box3" value="Check Box3" class="required"> Check Box3<br>
    <select name="select1" id="select1">
      <option value="Option1">Option1</option>
      <option value="Option2">Option2</option>
      <option value="Option3">Option3</option>
      <option value="Option4">Option4</option>
    </select>
    <br><br>
    <input type="reset" value="Reset" size="10" style="width: 100px; height:50px; font-size:20px;">
    <!--
    <input class="submit"  type="button" value="Submit" onclick="process1(this.form)" style="width: 100px; height:30px; font-size:20px;">
    -->
    <input class="submit"  type="submit" value="Submit" onclick="process1(this.form)" style="width:100px; height:50px; font-size:20px;">
  </form> 

  <p id="text1"></p>
  <p id="text2"></p>
  

  
  <!-- for testing purposes
<form id="commentForm" >
    Sample form test for validator<br>
    <input name="name" type="text" id="name" class="required"><br>
    <input name="user_id" type="text" id="user_id" minlength="4" class="required"><br>
    <input name="user_email" type="text" id="user_email" class="required email"><br>
      <input class="submit" type="submit" value="Submit">
</form>
  -->

  
  <!-- validator -->
  <script>
  $("#Form1").validate();
  </script>
  
  <!-- for testing purposes
    <script>
  $("#commentForm").validate();
  </script>
  -->
  

  <script>
  function process1(myform)
  {
    var selection = [], selectValue = [];
    // I have discovered that the values are different for innerhtml and value
    // they are not the same
    selection[0] = document.getElementById("Form1").elements.namedItem("input1").innerHTML;
    selection[1] = document.getElementById("Form1").elements.namedItem("Radio1").checked;
    selection[2] = document.getElementById("Form1").elements.namedItem("Radio2").checked;
    selection[3] = document.getElementById("Form1").elements.namedItem("Radio3").checked;
    selection[4] = document.getElementById("Form1").elements.namedItem("Box1").checked;
    selection[5] = document.getElementById("Form1").elements.namedItem("Box2").checked;
    selection[6] = document.getElementById("Form1").elements.namedItem("Box3").checked;
    selection[7] = document.getElementById("Form1").elements.namedItem("select1").innerHTML;
    
    selectValue[0] = document.getElementById("Form1").elements.namedItem("input1").value;
    selectValue[1] = document.getElementById("Form1").elements.namedItem("Radio1").value;
    selectValue[2] = document.getElementById("Form1").elements.namedItem("Radio2").value;
    selectValue[3] = document.getElementById("Form1").elements.namedItem("Radio3").value;
    selectValue[4] = document.getElementById("Form1").elements.namedItem("Box1").value;
    selectValue[5] = document.getElementById("Form1").elements.namedItem("Box2").value;
    selectValue[6] = document.getElementById("Form1").elements.namedItem("Box3").value;
    //selectValue[7] = document.getElementById("Form1").elements.namedItem("select1").options.value;
    var a = document.getElementById("Form1").elements.namedItem("select1");
    selectValue[7] = a.options[a.selectedIndex].value;
    
    //clearing the text
    document.getElementById("text1").innerHTML = "";
    //document.getElementById("text1").innerHTML += selectValue[6]+ "asdfasdf<br>";
    
    if (selectValue[0] != "")
    {
      document.getElementById("text1").innerHTML += "You have typed " + selectValue[0] + "<br>";
    }
    
    // if user checked a box or input something display a message
    for (x = 0; x <= 7; x++)
    {
      //document.getElementById("text2").innerHTML += "value" + selection[x] + "<br>";
      if (selection[x] == true)
      {
        document.getElementById("text1").innerHTML += "You have selected " + selectValue[x] + "<br>";
      }
    }
    
    document.getElementById("text1").innerHTML += "You Selected " + selectValue[7] + "<br>";

  }
  </script>

  <h2>Part1B: Webform Links</h2>

  <form>
  <h3>Choose your destination (using onChange event handler)</h3>

  <select name="destinationList" onchange="goToNewPage(this.form);">
  <option>Choose Destination:</option>
  <option value="http://www.google.com/">Google</option>
  <option value="http://www.vluxcreations.com/">VluxCreations</option>
  <option value="https://www.youtube.com/user/llViperStrikerll">Youtube</option>
  </select>

  </form>

  <br><br>

  <form>
  <h3>Choose your destination (using onClick event handler)</h3>
  <select name="destinationList">
  <option value="http://www.google.com/">Google</option>
  <option value="http://www.vluxcreations.com/">VluxCreations</option>
  <option value="https://www.youtube.com/user/llViperStrikerll">Youtube</option>
  </select>

  <input type="button" value="Go" onclick="goToNewPage(this.form);">

  </form>


  <script>
  function goToNewPage(myForm) {
      var myDestination = myForm.destinationList.options[myForm.destinationList.selectedIndex].value;
      window.location = myDestination;
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



  </div><!-- end of info here -->

  <!-- everyone likes extra spacing for scrolling-->
  <footer id="footer">
    <div class="footer-text">
      <span>
      © 2016 Copyright VluxCreations
      </span>
    </div>
	
    <p>
      <script type="text/javascript">
      var dateModified = document.lastModified;
      mydate = dateModified.slice(0,16);
      document.write("Last updated: " + mydate);
      </script>


      <a href="https://validator.w3.org/check?uri=referer">
      <img style="border:0;width:29px;height:35px" src="../../images/html5a.jpg" alt="HTML5"></a>
      <a href="https://jigsaw.w3.org/css-validator/check/referer">
      <img style="border:0;width:88px;height:31px" src="../../images/vcss-blue.gif" alt="Valid CSS!"></a>
     </p>
   
  </footer>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>