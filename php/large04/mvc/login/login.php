<html>
<head>
  <!-- doesn't work on the controller page-->
  <link rel="stylesheet" href="style.css">
</head>

<body>
<hr>
<h1>Login Page</h2>

<?php 
displayform();

//if user submits form
if(isset($_POST['submit']))
{
  $name1 = $_REQUEST['name1'];
  $name2 = $_REQUEST['name2'];
  //$id = rand(5, 15);
  //generated a random 5 digit id number
  $digits = 5;
  $id = rand(pow(10, $digits-1), pow(10, $digits)-1);
  
  //date and datetime is different
  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
  $datetime2 = new DateTime(date("Y-m-d H:i:s"));
  $visitorhere = "Yes";
  
  $printdate = $datetime1->format('Y-m-d H:i:s');
  $printduration = duration1($datetime1)->format('%d Days, %H Hours, %i Minutes');
  
echo <<<END
  <div class='container'>
  Thank you for Logging in on:
  $printdate
  <br>
  Current stay duration:
  $printduration
  </div>
END;
  
  
  //store the information
  storeinfo($id, $name1, $name2, $datetime1, $visitorhere);
  
} else { //end of Submit
  //echo "Submission Error!";
  exit;
}//end of user submission


function displayform()
{
  //<form action='#' method='post'>
  echo "<form method='post'>
  <div class='container'>
  
    <label><b>First Name & Last Name</b></label>
    <input type='text' placeholder='First Name' name='name1' required>
    
    <label><b>Person you are visiting</b></label>
    <input type='text' placeholder='Last Name' name='name2' required>
 
    <div class='clearfix'>
      <!--
      <button type='button'  class='cancelbtn'>Cancel</button>-->
      <button type='reset'  class='cancelbtn' value='Reset'>Cancel</button>
      <button type='submit' class='signupbtn' name='submit'>Login</button>
    </div>
    
  </div> <!-- end of container -->
</form>";
}//end of displayform


//calculate how long the person has stayed here
//when they are still here
function duration1($datetime1)
{ 
  $datetime2 = new DateTime(date("Y-m-d H:i:s"));
  $stayduration = date_diff($datetime1,$datetime2);
  return $stayduration;
}
  
//Open up the database and store the information
function storeinfo($id, $name1, $name2, $datetime1, $visitorhere)
{
  //open connections
  $servername = "localhost";
  $username = "root";
  $password = ""; //no password for me
  $dbname = "doctor"; //name of database
  $table_v = "visitors"; //name of student table in database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  //check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  echo "<br>Connected successfully.";
  
  $stayduration = duration1($datetime1)->format('%d Days, %H Hours, %i Minutes');
  //$stayduration = duration1($datetime1);

  /*
  Store Values
  even though we are going to calculate the stay duration again when they leave
  we are storing the information just for reference or incase of null if we
  happen to access it
  
  List of information that needs to be stored
  -visitors name
  -person who they are visiting
  -date and time they entered
  -whether or not the person is still here
  -how long they stayed
  
  */
  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
  $logtime1 = $datetime1->format('Y-m-d H:i:s');
  
  $sql = "INSERT INTO $table_v (id, name1, name2, datetime1, visitorhere, stayduration)
  VALUES ('$id', '$name1', '$name2', '$logtime1', '$visitorhere', '$stayduration')";

  // check if i entered the data right
  if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  //close connection after everything is stored
  $conn->close();
}


?>

<hr>

</body>
</html>