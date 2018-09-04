<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Ajax Applications [Part 1]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script>
  function showHint(str) {
      if (str.length == 0) { 
          document.getElementById("txtHint").innerHTML = "";
          return;
      } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
      }
  }
  </script>
</head>


<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Ajax Applications [Part 1]</h1>

  <p>
  Using Ajax to create a 'gethint' and PHP containing the hints.
  <br><br>
  </p>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>
  
  <p><b>Start typing a name in the input field below:</b></p>
  <form> 
  First name: <input type="text" onkeyup="showHint(this.value)">
  </form>
  <p>Suggestions: <span id="txtHint"></span></p>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>