<!DOCTYPE html>
<html><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>Larger Project 3 - Files & Regular Expressions</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>Larger Project 3 - Files & Regular Expressions</h1>

<p>
This is a file management program that allow user to browse through a directory tree with the ability to view/download a file/image or upload a new file/image into the directory.
<br><br>
- User isnt allowed to navigate below the 'base directory'.<br>
- The user is allowed to create a new sub directory.
- One functin handles getting files from directory.
- One function moves uploaded files into desired directory (reusable for any directory).
- One function converts a list of file paths into URL'scandir
- File URL's are links to where we can display and download the file.
- Differentiate between an image and non image.
</p>


<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<br>

<?php include 'action.php'; ?>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>