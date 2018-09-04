<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Part 3 - Navigation Hover Toggle</title>

	<!-- loading everything locally -->
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
  
	<!-- CSS-->
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/info.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="jumpto.css" type="text/css" media="screen" />
  
  <!-- scripts -->
  <script type="text/javascript" src="jquery.fade_in_out.js"></script>
  <script type="text/javascript" src="jquery.fade_in_out_start.js"></script>
  <script type="text/javascript" src="query.mousewheel.min.js"></script>
  <script type="text/javascript" src="jquery.simplr.smoothscroll.min.js"></script>

  <!-- ////////////////////////////////added on//////////////////////////////// -->

  <!-- hills server cannot load boot strap and other scripts from sources. I dont know why -->
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
	<!-- jquery -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
	<!-- Javascript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
	
	
	<!-- loading everything locally -->
	<link rel="stylesheet" href="framework/bootstrap.min.css">
	<!-- jquery -->
	<script src="framework/jquery.min.js"></script>
	<!-- Javascript -->
	<script src="framework/bootstrap.min.js"></script>
  
	<!-- CSS-->
	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/info.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/jumpto.css" type="text/css" media="screen" />
  
  <!-- scripts -->
  <script type="text/javascript" src="js/jquery.fade_in_out.js"></script>
  <script type="text/javascript" src="js/jquery.fade_in_out_start.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="js/jquery.simplr.smoothscroll.min.js"></script>
  <!-- <script type="text/javascript" charset="utf-8"> -->
  <script type="text/javascript">
    $(function () {
      $.srSmoothscroll()
    })
  </script>
  <script type="text/javascript" src="http://vluxcreations.com/js/jquery.jumpto.js"></script>
  
    <script>
    $(function(){
      $("ul.dropdown li").hover(function(){
          $(this).addClass("hover");
          $('ul:first',this).css('visibility', 'visible');
      }, function(){
        
            $(this).removeClass("hover");
            $('ul:first',this).css('visibility', 'hidden'); 
        });
        $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");
    });
    </script>
    
    
  
</head>

<body>


<!-- Navigation Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand intro logo-font transition" href="#" style="text-decoration: none">
      Sample Page
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right hover dropdown">
        <li><a href="#" class="nav-font transition">Nav1</a></li>

        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav2 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav3 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Part5</a></li>
            <li><a href="#">Part6</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav4 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Part5</a></li>
            <li><a href="#">Part6</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav5 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav6 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="nav-font transition dropdown-toggle">Nav7 <b class="caret"></b></a>
          <ul class="sub_menu">
            <li><a href="#">Part1</a></li>
            <li><a href="#">Part2</a></li>
            <li><a href="#">Part3</a></li>
            <li><a href="#">Part4</a></li>
            <li><a href="#">Extra</a></li>
          </ul>
        </li>
        
        <li><a href="#" class="nav-font transition">Nav8</a></li>

      </ul>
    </div>
    
  </div>
</nav>







<!-- /////////////////////////////End of Navigation Section//////////////////////////// -->

	<script type="text/javascript">
  /*Get ride of this to prevent collision
	  $(document).ready( function() {
	    $(".page_container").jumpto({
	      firstLevel: "> h2",
	      secondLevel: "> h3",
	      animate: 500
	    });
	  });
    */
 	</script>

<div id="info-container" class="page_container fade-me">

  <video autoplay loop poster="BGV41920.png" id="bgvid">
    <source src="BGV41920.mp4" type="video/mp4">
    <source src="BGV41920.webm" type="video/webm">
    <source src="BGV41920.ogv" type="video/ogv">
    I am sorry your browser does not support this video format.
  </video>
  
  <div class="info-here top-margin jumpto-block">
  
    <h1 class="info-title">Part 3 - Navigation Hover Toggle</h1>
	
    <p class="info-p">
    Dropdown Menu with links
    </p>
    
    <p class="info-p">
    <b>
    The drop down does work, but I believe that is part of my css and other things are colliding with it.<br>
    The exact same thing happened with the collapsable navbar for mobile view throughout all the pages.<br>
    Everything gets pushed down another line with the css spacing.
    
    </b>
    </p>
    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
    <!--  Collission here
    <div class="videoBlock">
      <div class="videoWrapper">
        <iframe width="100%" height="563"
        src="" frameborder="0" allowfullscreen>
        </iframe>
      </div>
    </div>
        -->




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

<!-- /////////////////////////////////////Everything Ends Here////////////////////////////// -->
<!-- /////////////////////////////////////Everything Ends Here////////////////////////////// -->
 
  
</div><!-- end of info container -->


</body>