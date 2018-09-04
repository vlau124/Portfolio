<!DOCTYPE html>
<html><head> 
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>08 - Objects</title>
  <link rel="stylesheet" href="style.css">
  <!-- styling for table only works here for some reason -->
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head> 

<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">

<h1>08 - Objects</h1>
<h2>Input Page</h2>

<p>
Using 2 Php clases instantiate 2 objects of each class. One class manages entries in Northwoods University database. (We are duplicating classes so we can use the same class for both registration forms.)
</p>


<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>

<form action='#' method='post'>
  <div class='container'>
    <table>
    <h3>Student information</h3>
    
    </tr>
    <td><label><b>ID Number</b></label></td>
    <td><input type='number' placeholder='1234' name='s_id' required></td>
    </tr>
    
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
    <td><input type='text' placeholder='Put NA for none' name='s_mi' required></td>
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
    <td><input type='text' placeholder='12345' name='s_zip' required></td>
    </tr>
    
    <tr>
    <td><label><b>Phone Number</b></label></td>
    <td><input type='text' placeholder='1234567' name='s_phone' required></td>
    </tr>
    
    <tr>
    <td><label><b>Class</b></label></td>
    <td><input type='text' placeholder='PHP-101' name='s_class' required></td>
    </tr>
    
    <tr>
    <td><label><b>Date of Birth</b></label></td>
    <td><input type='date' placeholder='2017-01-01' name='s_dob' required></td>
    </tr>
    
    <tr>
    <td><label><b>Pin Number</b></label></td>
    <td><input type='text' placeholder='12345' name='s_pin' required></td>
    </tr>
    
    <tr>
    <td><label><b>Faculty ID</b></label></td>
    <td><input type='number' placeholder='123456789' name='f_id' required></td>
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



<form action='#' method='post'>
  <div class='container'>
    <table>
      <h3>Faculty information</h3>
      
      <tr>
      <td><label><b>Faculty ID</b></label></td>
      <td><input type='number' placeholder='1234' name='f_id' required></td>
      </tr>
      
      <tr>
      <td><label><b>Last Name</b></label></td>
      <td><input type='text' placeholder='Last Name' name='f_last' required></td>
      </tr>
      
      <tr>
      <td><label><b>First Name</b></label></td>
      <td><input type='text' placeholder='First Name' name='f_first' required></td>
      </tr>
      
      <tr>
      <td><label><b>Middle Name</b></label></td>
      <td><input type='text' placeholder='Put NA for none' name='f_mi' required></td>
      </tr>
      
      <tr>
      <td><label><b>Location ID</b></label></td>
      <td><input type='number' placeholder='1234' name='loc_id' required></td>
      </tr>
      
      <tr>
      <td><label><b>Phone Number</b></label></td>
      <td><input type='text' placeholder='1234567' name='f_phone' required></td>
      </tr>
      
      <tr>
      <td><label><b>Rank</b></label></td>
      <td><input type='text' placeholder='A' name='f_rank' required></td>
      </tr>
      
      <tr>
      <td><label><b>Pin</b></label></td>
      <td><input type='number' placeholder='12345' name='f_pin' required></td>
      </tr>
      
      <tr>
      <td><label><b>Faculty Image</b></label></td>
      <td><input type='text' placeholder='asdf' name='f_image' required></td>
      </tr>
    
    </table><!-- end of table -->
    
    <div class='clearfix'>
      <!--
      <button type='button'  class='cancelbtn'>Cancel</button>-->
      <button type='reset'  class='cancelbtn' value='Reset'>Cancel</button>
      <button type='submit' class='signupbtn' name='submit2'>Submit</button>
    </div>
    
  </div> <!-- end of container -->
</form>



<?php include 'action.php'; ?>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>

</body>
</html>