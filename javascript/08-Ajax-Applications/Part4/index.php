<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Ajax Applications [Part 4]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- to be used without button -->
  <script>
  function showUser(str) {
    if (str == "") {
      //clear the field if input is nothing
      document.getElementById("output1").innerHTML = "";
      document.getElementById("output2").innerHTML = "";
      document.getElementById("output3").innerHTML = "";
      return;
    } else {

      //grab the state code from form input  
      txtname=$("#txtinput").val();
      
      //send the form input to php to be processed
      $.ajax({url:"getState1.php",data:{name:txtname},success: function(ajaxresult){

        //split the string we get coming in
        var splitted = ajaxresult.split(",");
        
        $("#ajaxrequest1").html(splitted[0]);
        $("#ajaxrequest2").html(splitted[1]);
        $("#ajaxrequest3").html(splitted[2]);
        
        document.getElementById("output0").value = splitted[0];
        document.getElementById("output1").value = splitted[1];
        document.getElementById("output2").value = splitted[2];
      }});

    }
  }
  </script>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Ajax Applications [Part 4]</h1>

  <p>
  Retrevies data sent from server and auto fills form based on state code in their respective boxes.
  </p>
  
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>

  <p><b>Available states to look up AL, AK, AZ, AR, CA, CO</b></p>

  <form>
  State Code:<br>
  <input type="text" id="txtinput" placeholder="CA" onchange="showUser(this.value)"><br>
  State Name:<br>
  <input type="text" id="output0" readonly="readonly" style="width:250px;"><br>
  State Capital:<br>
  <input type="text" id="output1" readonly="readonly" style="width:250px;"><br>
  State Population:<br>
  <input type="text" id="output2" readonly="readonly" style="width:250px;"><br>
  </form>

  <br><br><br><br>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body></html>