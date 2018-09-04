<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Object Model and Miscellaneous jQuery [Part2a]</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  
  <!-- using google's jquery version 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  -->
  
  <style type="text/css">
  #login {
    width: 300px;
    position: absolute;
    left: 560px;
    top: 6px;
    z-index: 100;
  }

  #open {
    margin: 0;
    cursor: pointer;
    background: rgb(255,255,255)  url(open.png) no-repeat 8px 7px;
    color: rgb(58,80,123);
    padding: 5px 0 2px 30px;
    background-color: rgba(200,200,200,0.96);
    border-radius: 5px;
  }

  #login .close {
    background-image: url(close.png);
    //background-color: rgb(110,138,195);
    background-color: rgba(0,0,0,0.5);  
    color: rgba(230,230,230,1);  
  }

  #open:hover {
    color: rgb(0,0,0);
    //background-color: rgb(110,138,195);
    color: rgba(255,255,255,1);
    background-color: rgba(0,0,0,0.5);
  }

  #login form {
    padding: 10px 10px 10px 10px;
    display: none;	
    //background-color: rgb(255,255,255);
    background-color: rgba(200,200,200,0.96);
    border-radius: 5px;
  }
  #login label {
    display: inline-block;
    width: 100px;
    text-align:right;
    margin: 0 15px 0 0;
    color: rgb(58,80,123);
  }
  #login input {
    font-size: 14px;	
  }
  #login #button {
    margin-left: 50px;	
  }
  </style>
  
  <script src="/js/jquery-1.7.1.js"></script>
  <script src="/js/jquery-1.7.1.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-1.7.1.js"></script>

  
  <script>
  $(document).ready(function() {
    $('#open').toggle(
        function() {
         $('#login form').slideDown(300);
         $(this).addClass('close');
      },
      function() {
       $('#login form').fadeOut(600);
         $(this).removeClass('close');
        }
    ); // end toggle
  }); // end ready
  </script>
  
  
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Object Model and Miscellaneous jQuery [Part2a]</h1>

<p>
Part1. Username and login with password protection. Php backend is used to secure login.
<br><br>
Part2. When the user mouses over the "Caution" hotspot, the background color should turn yellow. When the user mouses over the "Go" hotspot, the background color should turn green. When the user mouses off of any of these hotspots, return the background color to the original color of the browser window.
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>



<div class="wrapper">
  
  <div id="login"><br><br><br><br><br>
  <p id="open" class="">Login</p>
    <form style="display: none;" method="GET" action="action.php" >
      <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
      </p>
      <p>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
      </p>
      <p>
        <input type="submit" name="button" id="button" value="Submit">
      </p>
    </form>
  </div>
  
  <div class="content">
    <div class="main">
      <h2>Slide in Login Screen</h2>
      <p>Click the login button at the top of the page</p>
      <p style="font-size:36px;"><b>The username is "user"</b></p>
      <p style="font-size:36px;"><b>The password is "1234"</b></p>
      <p><b>Extra Styling on this page has been removed due to Collission</b></p>
    </div>
  </div>
  
</div>

<p id="text1"></p>
<p id="text2"></p>


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