<!DOCTYPE html>
<html lang="en"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>React Calculator</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
  
<div class="info-container">
  <h1>React Calculator</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-java.php'; ?>
  
  <div id="root">
    <!-- This element's contents will be replaced with react component. -->
  </div>

  <!-- Load React. -->
  <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>

  <!-- babel is used to transform jsx into plain javascript so browser can understand it-->
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  
  <!-- Load React component. -->
  <script type="text/babel" src="action.js"></script>
  
</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>

</body>
</html>