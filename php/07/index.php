<!DOCTYPE html>
<html><head> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>07 - Functions</title> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>07 - Functions</h1>
<h2>Input Page</h2>

<p>
Process HTML form with a multiple selection list and genereates a verse of Old MacDonald for each animal the user selects.
</p>

<p>
For Example: <br>
Old MacDonald had a farm, E-I-E-I-O!<br>
And on that farm he had a cow, E-I-E-I-O!<br>
With a moo-moo here and a moo-moo there<br>
<br>
Here a moo, there a moo, everywhere a moo-moo<br>
Old MacDonald had a farm, E-I-E-I-O!<br>
</p>

<p>
Your solution should include a function called printOneVerse, which will print one verse of the song. printOneVerse should take two arguments – the name of an animal name and the sound that animal makes.
</p>

<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<br>

<form action='#' method='post'>
  <p>Select as many animals as you would like:
  <br><br>
  <select name='animalNoise[]' size=5 multiple>
    <option value='pig:oink'>Pig
    <option value='duck:quack'>Duck
    <option value='cow:moo'>Cow
    <option value='sheep:baa'>Sheep
    <option value='horse:neigh'>Horse
    <option value='dog:woof'>Dog
    <option value='cat:meow'>Cat
    <option value='rooster:cock-a-doodle-doo'>Rooster
  </select>
  </p>
  <input type='submit' name="submit" value='Sing!'>
</form>

<?php include 'oldmac2.php'; ?>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>