<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Ajax Applications [Part 2]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script>
  /* we need to open multiple connections because we are
    required to access multiple php files */
  function showUser(str) {
    if (str == "") {
      //clear the fields if input is nothing
      document.getElementById("output1").innerHTML = "";
      document.getElementById("output2").innerHTML = "";
      document.getElementById("output3").innerHTML = "";
      return;
    } else {
      if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
        xmlhttp2 = new XMLHttpRequest();
        xmlhttp3 = new XMLHttpRequest();
      } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
      }
      
      //------change output box 1
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("output1").value = this.responseText;
        }
      };
      xmlhttp.open("GET","serverTime.php?q="+str,true);
      xmlhttp.send();
        
      //-----change output box 2
      xmlhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("output2").value = this.responseText;
        }
      };
      xmlhttp2.open("GET","serverTime2.php?q="+str,true);
      xmlhttp2.send();
        
      //-----change output box 3
      xmlhttp3.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("output3").value = this.responseText;
        }
      };
      xmlhttp3.open("GET","serverTime3.php?q="+str,true);
      xmlhttp3.send();
      
    }//end of else statement
  }//end of function
  </script>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


  <h1>Ajax Applications [Part 2]</h1>

  <p>
  Ajax script that recieve data sent from the server (Time, Date)
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>
  
  <p><b>Start typing a name in the input field below:</b></p>
  <form method="GET"> 
  Name:<br>
  <input type="text" name="name" placeholder="Name" onchange="showUser(this.value)"><br>
  Time<br>
  <input type="text" id="output1" disabled="disabled" style="width:250px;"><br>
  Date<br>
  <input type="text" id="output2" disabled="disabled" style="width:250px;"><br>
  Date<br>
  <input type="text" id="output3" disabled="disabled" style="width:250px;"><br>
  </form>
  <br>

  <br><br><br>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>