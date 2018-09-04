<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../view/style.css">
</head>
<body>

<?php
$q = intval($_GET['q']);

//echo "------------------------------";
//echo $q;

  //open connections
  $servername = "localhost";
  $username = "root";
  $password = ""; //no password for me
  $dbname = "doctor"; //name of database
  $table_v = "visitors"; //name of student table in database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($q == 1)
  {
  display_visitors_all($conn, $table_v); //display all
  }
  
  if ($q == 2)
  {
  display_visitors_current($conn, $table_v); //display only current people here
  }
  
  if ($q == 3)
  {
  display_visitors_left($conn, $table_v); //display people who left
  }

// -------------------------------------------------------------------------------
//Displays both the people who are still here and those that already left
function display_visitors_all($conn, $table_v)
{
  // ----------Accessing the database --------
  //student is the table name
  $sql = "SELECT id, name1, name2, datetime1, datetime2, visitorhere, stayduration
   FROM $table_v";
  $result = $conn->query($sql);
  
  // ---------displaying data in a table -----------
  echo "<table>"; //starting table tag
  //echo "<h2 style='text-align:center'>All Visitors</h2>";
  echo "<tr>
          <td>ID</td>
          <td>Visitor</td>
          <td>Patient</td>
          <td>Enter Time</td>
          <td>Still Here</td>
          <td>Stay Duration</td>
          <td>Leave Date</td>
        </tr>";
  //dont display if database is null
  if ($result !=  null && $result->num_rows > 0 ) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        
        $newformat1 = new DateTime($row["datetime1"]);
        $newtime = duration1($newformat1);
        
        if ($row["visitorhere"] == "No")
        {
          $newformat2 = new DateTime($row["datetime2"]);
          $newtime = duration2($newformat1,$newformat2);
        }

        echo "<tr>".
        "<td>". $row["id"] . "</td>".
        "<td>". $row["name1"] . "</td>".
        "<td>". $row["name2"] . "</td>".
        "<td>". $row["datetime1"] . "</td>".
        "<td>". $row["visitorhere"] . "</td>".
        "<td>". $newtime->format('%d Days, %H Hours, %i Minutes') . "</td>".
        "<td>". $row["datetime2"] . "</td>".
        "</tr>";
      }
  } else {
      echo "<tr><td>0 results</td></tr>";
  }
  echo "</table>";
}//end of display_visitors_current


// -------------------------------------------------------------------------------
//Displays visitors who are still here
function display_visitors_current($conn, $table_v)
{
  // ----------Accessing the database --------
  //student is the table name
  $sql = "SELECT id, name1, name2, datetime1, datetime2, visitorhere, stayduration
   FROM $table_v";
  $result = $conn->query($sql);
  
  // ---------displaying data in a table -----------
  echo "<table>"; //starting table tag
  //echo "<table>"; //starting table tag
  //echo "<h2 style='text-align:center'>Current Visitors</h2>";
  echo "<tr>
          <td>ID</td>
          <td>Visitor</td>
          <td>Patient</td>
          <td>Enter Time</td>
          <td>Still Here</td>
          <td>Stay Duration</td>
          <td>Leave Date</td>
        </tr>";
  //dont display if database is null
  if ($result !=  null && $result->num_rows > 0 ) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $newformat1 = new DateTime($row["datetime1"]);
        $newtime = duration1($newformat1);
        
        if ($row["visitorhere"] == "Yes")
        {
        echo "<tr>".
        "<td>". $row["id"] . "</td>".
        "<td>". $row["name1"] . "</td>".
        "<td>". $row["name2"] . "</td>".
        "<td>". $row["datetime1"] . "</td>".
        "<td>". $row["visitorhere"] . "</td>".
        "<td>". $newtime->format('%d Days, %H Hours, %i Minutes') . "</td>".
        "<td>". $row["datetime2"] . "</td>".
        "</tr>";
        }
      }
  } else {
      echo "<tr><td>0 results</td></tr>";
  }
  echo "</table>";
}//end of display_visitors_left



// -------------------------------------------------------------------------------
//Displays current people
function display_visitors_left($conn, $table_v)
{
  // ----------Accessing the database --------
  //student is the table name
  $sql = "SELECT id, name1, name2, datetime1, datetime2, visitorhere, stayduration
   FROM $table_v";
  $result = $conn->query($sql);
  

  //$total_duration = new DateTime(date("Y-m-d H:i:s"));
  
  // ---------displaying data in a table -----------
  echo "<table>"; //starting table tag
  //echo "<table>"; //starting table tag
  //echo "<h2 style='text-align:center'>Visitors who have left</h2>";
  echo "<tr>
          <td>ID</td>
          <td>Visitor</td>
          <td>Patient</td>
          <td>Enter Time</td>
          <td>Still Here</td>
          <td>Stay Duration</td>
          <td>Leave Date</td>
        </tr>";
  //dont display if database is null
  if ($result !=  null && $result->num_rows > 0 ) {
      // output data of each row
      $duration_count = 0;
      //see view/viewVisitors.php for incomplete average duration
      //out of time

      while($row = $result->fetch_assoc()) {
        if ($row["visitorhere"] == "No")
        {
          $duration_count++;
        echo "<tr>".
        "<td>". $row["id"] . "</td>".
        "<td>". $row["name1"] . "</td>".
        "<td>". $row["name2"] . "</td>".
        "<td>". $row["datetime1"] . "</td>".
        "<td>". $row["visitorhere"] . "</td>".
        "<td>". $row["stayduration"] . "</td>".
        "<td>". $row["datetime2"] . "</td>".
        "</tr>";
        }
      }
      //see view/viewVisitors.php for incomplete average duration
      //out of time
      echo "Average Stay Duration: " . "0" . "<br>";
  } else {
      echo "<tr><td>0 results</td></tr>";
  }
  echo "</table>";
  echo "<br><br><br><br><br>"; //extra spacing on bottom
}//end of display_visitors_left


function duration1($datetime1)
{ 
  $datetime2 = new DateTime(date("Y-m-d H:i:s"));
  $stayduration = date_diff($datetime1,$datetime2);
  return $stayduration;
}

//calculate the duration when the person already left
//different from duration1
function duration2($datetime1, $datetime2)
{ 
  $stayduration = date_diff($datetime1,$datetime2);
  return $stayduration;
}


?>
</body>
</html>