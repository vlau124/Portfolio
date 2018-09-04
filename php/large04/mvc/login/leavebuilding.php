<html>
<head>
  <!-- doesn't work on the controller page-->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 

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
    $sql = "UPDATE $table_v SET datetime2=$datetime2 stayduration=$stayduration visitorhere='$visitorhere' WHERE id=$id1";
    /*
    $sql = "UPDATE $table_v SET datetime2=$datetime2 stayduration=$stayduration visitorhere='$visitorhere' 
      WHERE id='$id1' name1='$name1' name2='$name2' ";
      */
    
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

<!--
-->