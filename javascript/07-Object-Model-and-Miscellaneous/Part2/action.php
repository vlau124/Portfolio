<?php

$password = $_REQUEST['password'];
$username = $_REQUEST['username'];

if ($password == "1234" && $username == "user")
{
  echo "asdfasdf";
  header("Location: part2.php", true, 301);
  exit();
  // both ways of redirect works
  //$link = "part2.html";
  //echo '<script>window.location ="'.$link.'"</script>';
} else {
  echo "Login Fail<br>";
  echo '<a href="index.php">Click here to go back</a>';
}


?>