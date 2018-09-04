<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Arrays [Part 2]</title>
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
  
  <!-- form validation stuff -->
  <!--
  <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  -->
  
  <!-- form validation stuff -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  
  <!--
  <script>
  $(document).ready(function(){
      $("#Form1").validate();
    });
  </script>
  
  -->
  <script>
    $(document).ready(function(){
      $.validator.addMethod("username", function(value, element) {
          return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
      }, "Name must contain only letters, numbers, or underscore.");
      $("#Form1").validate();
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

  <h1>Arrays [Part 2]</h1>

  <p>
  Based on the 2010 census. Gets the State Abbreviation, Name, Capital and Population using a 2 dimensional array.
  </p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>

  <!-- Part 1a -->
  <h2>2010 US Census</h2>

  <p>
  Please Enter one of the following States Alabama, Alaska, Arizona, Arkansas, California, Colorado
  </p>

  <form id="Form1">
  <input type="text" placeholder="California" name="input1" class="required username"><br>
  <input type="button" value="State Info" onclick="process1()" style="width: 100px; height:30px; font-size:20px;">
  </form> 

  <script>
  function process1()
  {
    var state_input = document.getElementById("Form1").elements.namedItem("input1").value;
    var statenum = 0;

    var state_info = new Array(6)
    
    for (i=0; i <6; i++)
    {
    state_info[i]=new Array(4)
    }
    
    state_info[0][0] = "AL";
    state_info[0][1] = "Alabama";
    state_info[0][2] = "Montgomery";
    state_info[0][3] = "4,779,736";
    
    state_info[1][0] = "AK";
    state_info[1][1] = "Alaska";
    state_info[1][2] = "Juneau";
    state_info[1][3] = "710,231";
    
    state_info[2][0] = "AZ";
    state_info[2][1] = "Arizona";
    state_info[2][2] = "Phoenix";
    state_info[2][3] = "6,392,017";
    
    state_info[3][0] = "AR";
    state_info[3][1] = "Arkansas";
    state_info[3][2] = "Little Rock";
    state_info[3][3] = "2,915,918";
    
    state_info[4][0] = "CA";
    state_info[4][1] = "California";
    state_info[4][2] = "Sacramento";
    state_info[4][3] = "37,253,956";
    
    state_info[5][0] = "CO";
    state_info[5][1] = "Colorado";
    state_info[5][2] = "Denver";
    state_info[5][3] = "5,029,196";
    

    // deleting spaces and condensing code so its not that long
    // javascript is case sensative
    switch(state_input)
    {
      case "Alabama": statenum = 0; break;
      case "alabama": statenum = 0; break;
      case "ALABAMA": statenum = 0; break;
      case "AL": statenum = 0; break;
      case "al": statenum = 0; break;
      
      case "Alaska": statenum = 1; break;
      case "alaska": statenum = 1; break;
      case "ALASKA": statenum = 1; break;
      case "AK": statenum = 1; break;
      case "ak": statenum = 1; break;
      
      case "Arizona": statenum = 2; break;
      case "arizona": statenum = 2; break;
      case "ARIZONA": statenum = 2; break;
      case "AZ": statenum = 2; break;
      case "az": statenum = 2; break;
      
      case "Arkansas": statenum = 3; break;
      case "arkansas": statenum = 3; break;
      case "ARKANSAS": statenum = 3; break;
      case "AR": statenum = 3; break;
      case "ar": statenum = 3; break;

      case "California": statenum = 4; break;
      case "california": statenum = 4; break;
      case "CALIFORNIA": statenum = 4; break;
      case "CA": statenum = 4; break;
      case "ca": statenum = 4; break;
      
      case "Colorado": statenum = 5; break;
      case "colorado": statenum = 5; break;
      case "COLORADO": statenum = 5; break;
      case "CO": statenum = 5; break;
      case "co": statenum = 5; break;
      
      default:
        statenum = 6;
    }

    if (statenum == 6)
    {
      document.getElementById("text1").innerHTML = "I am sorry you did not enter the right state. Please try again!";
    }
    
    //document.getElementById("text1").innerHTML = statenum;

    for (x = 0; x <= 3; x++)
    {
      document.getElementById("info" + (x+1)).innerHTML = state_info[statenum][x];
    }
    
    //document.getElementById("text1").innerHTML = state_input;
    //document.getElementById("info1").innerHTML = state_input;
  }
  </script>

  <br>

  <p id="text1"></p>
  <p id="text2"></p>

  <table border="1" id="table1" style="opacity:1">
    <tbody>
      <tr>
        <td>State Abbr</td>
        <td>State Name</td>
        <td>Capital</td>
        <td>Population</td>
      </tr>
        
      <tr>
        <td id="info1">N/A</td>
        <td id="info2">N/A</td>
        <td id="info3">N/A</td>
        <td id="info4">0</td>
      </tr>
    
    </tbody>
  </table>


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