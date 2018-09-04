<html>
<head>
  <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    
    //close and hide everything when the page loads
    $("#HideShow1").toggle();
    $("#HideShow2").toggle();
    $("#HideShow3").toggle();
    
    //reveal things  when the person clicks
    $("#toggle1").click(function(){
      $("#HideShow1").toggle(500);
    });
    
    $("#toggle2").click(function(){
      $("#HideShow2").toggle(500);
    });
    
    $("#toggle3").click(function(){
      $("#HideShow3").toggle(500);
    });
  });
  </script>
</head>

<body>
<!--
<table>
  <h3>Current Visitors</h3>
	<tr>
    <td>Visitor</td>
    <td>Patient</td>
    <td>Time</td>
  </tr>
  -->
  <br><br>
  <hr>
  <h3 class="container"> Using Jquery </h3>
<?php 
  //open connections
  $servername = "localhost";
  $username = "root";
  $password = ""; //no password for me
  $dbname = "doctor"; //name of database
  $table_v = "visitors"; //name of student table in database
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  display_visitors_all($conn, $table_v); //display all
  display_visitors_current($conn, $table_v); //display only current people here
  display_visitors_left($conn, $table_v); //display people who left

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
  echo "<button id='toggle1' class='togglebtn'>Hide Show All Visitors</button>";
  echo "<table id='HideShow1'>"; //starting table tag
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
  echo "<button id='toggle2' class='togglebtn'>Hide Show Current Visitors</button>";
  echo "<table id='HideShow2'>"; //starting table tag
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
  echo "<button id='toggle3' class='togglebtn'>Hide Show Visitors Who have left</button>";
  echo "<table id='HideShow3'>"; //starting table tag
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
      //$total_duration = ;
      //$total_duration = new DateTime(date("Y-m-d H:i:s"));
      //$total_duration = new DateTime(date("0000-00-00 00:00:00"));
      /*
        $datetime1 = new DateTime(date("Y-m-d H:i:s"));
        $datetime2 = new DateTime(date("Y-m-d H:i:s"));
        $stayduration = duration1($datetime1)->format('%d Days, %H Hours, %i Minutes');
        */
      $t1 = new DateTime(date("Y-m-d H:i:s"));
      $t2 = new DateTime(date("Y-m-d H:i:s"));
      $s1 = date_diff($t1, $t2);
      //$total_duration = $s1->format('%d Days, %H Hours, %i Minutes');
      //$total_duration = strtotime("0000-00-00 00:00:00");
      //$total_duration = $s1;
      /*
      $total_days =  0;
      $total_hours = 0;
      $total_minutes = 0;
      */
      
      while($row = $result->fetch_assoc()) {
        if ($row["visitorhere"] == "No")
        {
          $duration_count++;
          /*
          $total_duration += $row["stayduration"];
          $total_days += $row["stayduration"]->format('%d');
          $total_hours += $row["stayduration"]->format('%H');
          $total_minutes += $row["stayduration"]->format('%i');
          */
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
      
      //$avg_duration = $total_duration / $duration_count;
      //24 hours in a day / 60 min in hour
      /*
      $total_everything = ($total_days * 24 * 60) +($total_hours * 60) + $total_minutes;
      $avg_duration = $total_everything / $duration_count; //in minutes
      
      $avg_days = $avg_duration/(24*60);
      $avg_hours = gmp_div_r("$avg_duration", "1440") /24;
      $avg_min = gmp_div_r("$avg_hours", "1440") /60;
      
      echo "Average Stay Duration: " . $avg_days . "days" . $avg_hours . "hours" . $avg_min . "minutes<br>";
      */
      //echo "Average Stay Duration: " . $total_duration . "<br>";
      //ran out of time to finish
      echo "Average Stay Duration: " . "0" . "<br>";
      
  } else {
      echo "<tr><td>0 results</td></tr>";
  }
  echo "</table>";
  echo "<br><br><br><br><br>"; //extra spacing on bottom
}//end of display_visitors_left




//calculate the duration when the person already left
//different from duration1
function duration2($datetime1, $datetime2)
{ 
  $stayduration = date_diff($datetime1,$datetime2);
  return $stayduration;
}

?>
<!--
</table>
-->
<hr>

</body>
</html>