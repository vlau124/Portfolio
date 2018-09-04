<!DOCTYPE html>
<html><head> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>12 - Changing Database Information</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="style.css">
  <!-- styling for table only works here for some reason -->
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


<h1>12 - Changing Database Information</h1>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>

<h2>Store Student information</h2>
<p>Stores student information into the schools database with form validation and MySQL</p>

<form action='#' method='post'>
  <div class='container'>
    <table>
    <h3>Student information</h3>
    
    <tr>
    <td><label><b>Last Name</b></label></td>
    <td><input type='text' placeholder='Last Name' name='s_last' required></td>
    </tr>
    
    <tr>
    <td><label><b>First Name</b></label></td>
    <td><input type='text' placeholder='First Name' name='s_first' required></td>
    </tr>
    
    <tr>
    <td><label><b>Middle Name</b></label></td>
    <td><input type='text' placeholder='Leave blank if none' name='s_mi' maxlength="1"></td>
    </tr>
    
    <tr>
    <td><label><b>Address</b></label></td>
    <td><input type='text' placeholder='1234 Street' name='s_address' required></td>
    </tr>
    
    <tr>
    <td><label><b>City</b></label></td>
    <td><input type='text' placeholder='San Francisco' name='s_city' required></td>
    </tr>
    
    <tr>
    <td><label><b>State</b></label></td>
    <td><input type='text' placeholder='California' name='s_state' required></td>
    </tr>
    
    <tr>
    <td><label><b>Zip Code</b></label></td>
    <td><input type='number' placeholder='12345' name='s_zip' min="1" max="99999" required></td>
    </tr>
    
    <tr>
    <td><label><b>Phone Number</b></label></td>
    <td>
      <input type='number' placeholder='123' name='s_phone1' min="1" max="999" required>
      <input type='number' placeholder='123' name='s_phone2' min="1" max="999" required>
      <input type='number' placeholder='1234' name='s_phone3' min="1" max="9999" required>
    </td>
    </tr>
    
    <tr>
    <td><label><b>Date of Birth</b></label></td>
    <td>
    <input type='number' placeholder='YYYY' name='s_dob1' min="1" max="9999" required>
    <input type='number' placeholder='MM' name='s_dob2' min="1" max="99" required>
    <input type='number' placeholder='DD' name='s_dob3' min="1" max="99" required>
    </td>
    </tr>
    
    </table><!-- end of table -->
    
    <div class='clearfix'>
      <!--
      <button type='button'  class='cancelbtn'>Cancel</button>-->
      <button type='reset'  class='cancelbtn' value='Reset'>Cancel</button>
      <button type='submit' class='signupbtn' name='submit1'>Submit</button>
    </div>
    
  </div> <!-- end of container -->
</form>





<?php include 'action.php'; ?>



</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>