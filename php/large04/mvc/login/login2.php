<html>
<head>
  <!-- doesn't work on the controller page-->
  <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Login Page</h2>

<?php 
displayform();
displayform2();

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


if(isset($_POST['submit2']))
{
$id = $_REQUEST['id1'];
$name1 = $_REQUEST['name1'];
$name2 = $_REQUEST['name2'];

leave($name1, $name2);
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






/*--------------------------------------------------------------------------------*/



/* Everything here was recopied because files weren't being accessed when user 
submitted the second form*/

/*Now none of this stuff will be displayed since the submission is stuck on the second form */


/*Copied from login/logout.php */
function displayform2()
{
  //<form action='#' method='post'>
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
}//end of displayform


/*Copied from login/leavebuilding.php */

function leave($name1, $name2)
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
  echo "<br>Connected successfully2.";

  $datetime1 = new DateTime(date("Y-m-d H:i:s"));
  
  $currtime1 = new DateTime(date("Y-m-d H:i:s"));
  $datetime2 = $currtime1->format('Y-m-d H:i:s');
  $vistorhere = "No";
  
  $found_visitor = False;
  
  //search for first time to calculate stay duration
  $sql = "SELECT id1, name1, name2, datetime1, datetime2, visitorhere, stayduration
   FROM $table_v";
   
  $result = $conn->query($sql);
  
  if ($result !=  null && $result->num_rows > 0 ) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $newformat1 = new DateTime($row["datetime1"]);
      $newtime = duration1($newformat1);
      
      if ($row["visitorhere"] == "Yes"
        && $row["id1"] == $id1
        && $row["name1"] == $name1
        && $row["name2"] == $name2)
      {
        $datetime1 = $row["datetime1"];
        $found_visitor = True; //indicate we have found the visitor
      }
    }
  }
  
  /* 
  If we found the visitor
    -calculate the stay duration
    -Store the information into the database
  */
  if ($found_visitor = True)
  {
    $stayduration = date_diff($datetime1,$datetime2);
    /*
    $sql = "INSERT INTO $table_v (name1, name2, datetime1, visitorhere, stayduration)
    VALUES ('$name1', '$name2', '$logtime1', '$visitorhere', '$stayduration')";
    */
    
    //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    //$sql = "UPDATE $table_v SET datetime2=$datetime2 stayduration=$stayduration visitorhere='$visitorhere' WHERE id=$id1";
    $sql = "UPDATE $table_v SET datetime2=$datetime2 stayduration=$stayduration visitorhere='$visitorhere' 
      WHERE id='$id1' name1='$name1' name2='$name2' ";
    
    // check if i entered the data right
    if ($conn->query($sql) === TRUE) {
      echo "<br>Visitor Has Left the Building";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  }

  
  //close connection after everything is stored
  $conn->close();
}


















  

?>

</body>
</html>