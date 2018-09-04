<html>
<head>
  <!-- doesn't work on the controller page-->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
  //create a new button for person to logout

echo <<<END
  <form method='post'>
    <div class='container'>
      <h3>To Signout Enter Your name and the Patients name to signout</h3>
      <h4>[I dont know who is on this computer that is why i am making it overly complicated to signout]</h4>
      <h4>[There can be multiple people using the same machine]</h4>
      
      <label><b>ID Number</b></label>
      <input type='number' placeholder='12345' name='id1' required>
      
      <label><b>First Name & Last Name</b></label>
      <input type='text' placeholder='First Name' name='outname1' required>
      
      <label><b>Person you are visiting</b></label>
      <input type='text' placeholder='Last Name' name='outname2' required>
      
      <button type='submit' name='submit2' class='signout'>Click Here to Sign Out</button>
    </div>
  </form>
END;


?>

</body>
</html>

<!--
-->