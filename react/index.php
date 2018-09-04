<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>React Examples</title>

  <!-- project menu css is squishing the icons and making them smaller -->
  <link rel="stylesheet" type="text/css" href="http://www.vluxcreations.com/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="http://www.vluxcreations.com/css/footer.css">
  
  <link rel="stylesheet" type="text/css" href="grid.css">
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">
  <h1 class="info-title">React Samples</h1>
  <p class="info-p">Here are some React samples</p>
  
  
  <div class="grid">
    <figure class="gallery-animation">
      <a href="01-Calculator/">
        <img src="images/calculator.png" alt="calculator"/>
        <figcaption>
        <!--
          <h2>React <span>Calculator</span></h2> -->
          <!--
          <p>Calculator Code Sample</p> -->
          <h2>Calculator App</h2>
        </figcaption>		
      </a>            
    </figure>
    
    
    <figure class="gallery-animation">
      <a href="#">
        <img src="images/future-project.png" alt="future project"/>
        <figcaption>
          <h2>Future <span>Project</span></h2>
          <p>Future Project</p>
        </figcaption>		
      </a>            
    </figure>
    
    
  </div>
        
  <!--
  <button class="accordion">Functions</button>
  <div class="panel">
    <a href="02-Functions/Part1/" class="info-p">Part 1 - Student Grade Calculation</a><br>
    <a href="02-Functions/Part2/" class="info-p">Part 2 - Weekly Sales and Earnings</a><br>
    <a href="02-Functions/Part3/" class="info-p">Part 3 - Customer Credit Limit Calculation</a><br>
    <a href="02-Functions/Part4/" class="info-p">Part 4 - Palindrome</a><br>
    <a href="02-Functions/Part5/" class="info-p">Part 5 - Temperature Conversion</a><br>
    <a href="02-Functions/Part6/" class="info-p">Part 6 - Educational Program</a><br>
  </div>

  <button class="accordion">Looping Statements</button>
  <div class="panel">
    <a href="03-Looping-Statments/Part1/" class="info-p">Part 1 - Product Sum</a><br>
    <a href="03-Looping-Statments/Part2/" class="info-p">Part 2 - Gross Pay</a><br>
    <a href="03-Looping-Statments/Part3/" class="info-p">Part 3 - Compound Interest</a><br>
    <a href="03-Looping-Statments/Part4/" class="info-p">Part 4 - Total Sales</a><br>
    <a href="03-Looping-Statments/Part5/" class="info-p">Part 5 - List Formats</a><br>
    <a href="03-Looping-Statments/Part6/" class="info-p">Part 6 - 12 Days of Christmas</a><br>
  </div>

  -->

<!-- must be loaded after -->
<script src="http://www.vluxcreations.com/js/accordion.js"></script>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>

</body>
</html>