<?php

//if user submits a animal do this
if(isset($_POST['submit']))
{
  //check if user selected anything
  if ($_POST['animalNoise'] === NULL)
  {
      echo "<h2>Error: Please make a Animal selection above before submitting!</h2>";
  }

  // As output of $_POST['animalNoise'] is an array we have to use foreach Loop to display individual value
  foreach ($_POST['animalNoise'] as $select)
  {
    //exploding the string and separating it into parts
    //store the animal name and noise
    $str = explode(":", $select);
    $animalName = $str[0];
    $animalNoise = $str[1];
    
    //call function to display song
    printOneVerse($select, $animalName, $animalNoise);
  }

} else { //end of Submit
  //echo "Animal Selection is Required!";
  exit;
}


function printOneVerse($select, $animalName, $animalNoise)
{
  // printing out the song
  echo "<br>----------------------------------------------------<br>";
  //echo "You have selected: " .$select;
  echo "You have selected: " .$animalName; // Displaying Selected Value
  echo "<br><br>";
  echo "Old MacDonald had a farm, E-I-E-I-O!<br>";
  echo "And on that farm he had a ", $animalName, " , E-I-E-I-O!<br>";
  echo "With a ", $animalNoise, "-", $animalNoise, " here and a ", $animalNoise, $animalNoise, " there<br>";
  echo "<br>";
  echo "Here a ", $animalNoise, ", there a ", $animalNoise, ", everywhere a ", $animalNoise, "-", $animalNoise, "<br>";
  echo "Old MacDonald had a farm, E-I-E-I-O!<br>";
}


?>