<?php

/* It says to use a function to Display the form 
and Another funciton to display output  */

// Display Form function
displayform();

//if user submits form
if(isset($_POST['submit']))
{  
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  
  $question = $_REQUEST['question'];
  $answer = $_REQUEST['answer'];
  $psw = $_REQUEST['psw'];
  $pswrepeat = $_REQUEST['psw-repeat'];
  
  //call function to display song
  //printform($fname, $lname, $email, $question, $answer, $psw, $pswrepeat);
  passcheck($fname, $lname, $email, $question, $answer, $psw, $pswrepeat);
  
} else { //end of Submit
  //echo "Submission Error!";
  exit;
}//end of user submission


//check to see if the passwords match
function passcheck($fname, $lname, $email, $question, $answer, $psw, $pswrepeat)
{
  if ($psw == $pswrepeat)
  {
  printform($fname, $lname, $email, $question, $answer, $psw, $pswrepeat);
  } else {
    echo "<div id='output' class='output'>";
    echo "<b>I am sorry the password you entered does not match!</b>";
    echo "</div>";
  }
}//end of passcheck



//---------------------------Printing out form data--------------------------
function printform($fname, $lname, $email, $question, $answer, $psw, $pswrepeat)
{
  // printing out the form data
  echo "<div id='output' class='output'>";
  echo "<h2>------------------- Output -----------------</h2>";
  echo "You have entered the following information: <br><br>"; // Displaying Selected Value
  echo "First Name: ", $fname, "<br><br>";
  echo "Last Name: ", $lname, "<br><br>";
  echo "Email: ", $email, "<br><br>";
  echo "Security Question: ", $question, "<br><br>";
  echo "Answer: ", $answer, "<br><br>";
  echo "Password: ", $psw, "<br><br>";
  echo "</div>";
}// end of printform


//-----------------------Injecting and Display Form function-----------------------
function displayform()
{
  echo "<form action='#' method='post'>
  <div class='container'>
  
    <label><b>First Name</b></label>
    <input type='text' placeholder='First Name' name='fname' required>
    
    <label><b>Last Name</b></label>
    <input type='text' placeholder='Last Name' name='lname' required>

    <label><b>Email</b></label>
    <input type='text' placeholder='Enter Email' name='email' required>
    
    <br>
    <b>Select a security question</b>
    <br>
    <select class='question' name='question'>
      <option value='q1'>What is your favorite color?</option>
      <option value='q2'>What elementary school did you go to?</option>
      <option value='q3'>What is the last name of the teacher who gave you a failing grade?</option>
      <option value='q4'>Why is the sky blue?</option>
    </select>
    <br>
    
    <label><b>Answer:</b></label>
    <input type='password' placeholder='Enter Answer' name='answer' required>
    
    <label><b>Password</b></label>
    <input type='password' placeholder='Enter Password' name='psw' required>

    <label><b>Repeat Password</b></label>
    <input type='password' placeholder='Repeat Password' name='psw-repeat' required>

    <p>By creating an account you agree to our <a href='#'>Terms & Privacy</a>.</p>

    <div class='clearfix'>
      <!--
      <button type='button'  class='cancelbtn'>Cancel</button>-->
      <button type='reset'  class='cancelbtn' value='Reset'>Cancel</button>
      <button type='submit' class='signupbtn' name='submit'>Sign Up</button>
    </div>
    
  </div> <!-- end of container -->
</form>";
  
}//end of displayform

?>