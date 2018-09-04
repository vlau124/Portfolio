<html>
<head>
  <link rel="stylesheet" href="style.css">
  <script>
  function showUser(str) {
      if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
      } else { 
          if (window.XMLHttpRequest) {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp = new XMLHttpRequest();
          } else {
              // code for IE6, IE5
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET","ajaxstuff/view1.php?q="+str,true);
          xmlhttp.send();
      }
  }
  </script>
</head>

<body>

  <br><br><br>
  <hr>
  
  <form>
    <div class='container'>
    <h3> Using Ajax required for assignment </h3>
      <select name="users" onchange="showUser(this.value)">
        <option value="">Select a Display:</option>
        <option value="1">All Visitors</option>
        <option value="2">Current Visitors</option>
        <option value="3">Visitors who have exit the building</option>
      </select>
    </div>
  </form>
  <br>
  <div id="txtHint"<b>Visitor info will be listed here...</b></div>

<hr>

</body>
</html>