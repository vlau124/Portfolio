<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Ajax Applications [Part 3]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <!-- ////////////////////////////////added on//////////////////////////////// -->
  <script>
  function getVote(int) {
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("poll").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","poll_vote.php?vote="+int,true);
    xmlhttp.send();
  }
  </script>
  
  <!-- date picker stuff -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

  <h1>Ajax Applications [Part 3]</h1>

  <p>
  A internet poll to determine which movie is better and uses Jquery to pick date and time user entered poll.
  </p>
  
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  <br>

  <p>Date: <input type="text" id="datepicker"></p>

  <div id="poll">
  <h3>Which movie is better?</h3>
  <form>
  Star Wars<br>
  <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
  Avengers<br>
  <input type="radio" name="vote" value="1" onclick="getVote(this.value)"><br>
  Justice League<br>
  <input type="radio" name="vote" value="2" onclick="getVote(this.value)"><br>
  </form>
  </div>

  <br><br><br>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>