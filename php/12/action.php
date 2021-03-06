<?php
// each step will be labeled in order step1 step2 etc..

//-------------------- Step1: Open connections to prepare to access database -----------------------------------------
//we do this so we can access it globally when needed
//--------------------------------CHANGE VARIABLES WHEN USING A DIFFERENT DATABASE
$servername = "twinpeaks";
$username = "vlau5";
$password = "jul2090.vl"; //no password for me
$dbname = "northwoods"; //name of database

$table_s = "student"; //name of student table in database

$conn = new mysqli($servername, $username, $password, $dbname);
//------------------------------------------------------------------------------

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully.";

// ---- Step2: Determine which form the user submitted and take actions accordingly -------------------------------------
// //we cannot use the same class because the number of variables being passed in is different
if (isset($_POST['submit1']))
{
  $obj = new FormSubmit;
  $obj2 = new DisplayData;
  
  // --------------------------------Step3: Get the Data from Submission --------------------------------------------------
  //it wouldnt let me grab the variables inside the class
  $s_id = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );// random 5 digit id number
  $s_last = $_REQUEST['s_last'];
  $s_first = $_REQUEST['s_first'];
  $s_mi = $_REQUEST['s_mi'];
  $s_address = $_REQUEST['s_address'];
  $s_city = $_REQUEST['s_city'];
  $s_state = $_REQUEST['s_state'];
  $s_zip = $_REQUEST['s_zip'];
  $s_phone = $_REQUEST['s_phone1'] . $_REQUEST['s_phone2'] . $_REQUEST['s_phone3'];
  $s_dob = $_REQUEST['s_dob1'] . "-" . $_REQUEST['s_dob2'] . "-" . $_REQUEST['s_dob3'];
  
  $obj->s_store($conn, $table_s, $s_id, $s_last, $s_first, $s_mi, $s_address, $s_city, $s_state, $s_zip, $s_phone, $s_dob);
  
  //$obj2->display_student($conn, $table_s);
  
  unset($obj);
  unset($obj2);
  
  echo "Submission Successful!";
  
} //else { //end of Submit

// this was for faculty submission in previous assignment
else if (isset($_POST['submit2']))
{
  $obj = new FormSubmit;
  $obj2 = new DisplayData;

  // -------------------------------------Step3: Get the Data from Submission -----------------------------------------------
  //it wouldnt let me grab the variables inside the class
  $f_id = $_REQUEST['f_id'];
  $f_last = $_REQUEST['f_last'];
  $f_first = $_REQUEST['f_first'];
  $f_mi = $_REQUEST['f_mi'];
  $loc_id = $_REQUEST['loc_id'];
  $f_phone = $_REQUEST['f_phone'];
  $f_rank = $_REQUEST['f_rank'];
  $f_pin = $_REQUEST['f_pin'];
  $f_image = $_REQUEST['f_image'];
  
  $obj->f_store($conn, $table_f, $f_id, $f_last, $f_first, $f_mi, $loc_id, $f_phone, $f_rank, $f_pin, $f_image);
  
  //$obj2->display_student($conn, $table_s);
  
  unset($obj);
  unset($obj2);
  
} else { //end of Submit
  //echo "Submission Error!";
  exit;
}//end of user submission

 

//----------------------------------------Step4: Storing the values into the database--------------------------------------------
Class FormSubmit
{
  function s_store($conn, $table_s, $s_id, $s_last, $s_first, $s_mi, $s_address, $s_city, $s_state, $s_zip, $s_phone, $s_dob)
  {
    $sql = "INSERT INTO $table_s (s_id, s_last, s_first, s_mi, s_address, s_city, s_state, s_zip, s_phone, s_dob)
    VALUES ('$s_id', '$s_last', '$s_first', '$s_mi', '$s_address', '$s_city', '$s_state', '$s_zip', '$s_phone', '$s_dob')";

    // check if i entered the data right
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }//end of s_store
  
  /*
  function f_store($conn, $table_f, $f_id, $f_last, $f_first, $f_mi, $loc_id, $f_phone, $f_rank, $f_pin, $f_image)
  {
    $sql = "INSERT INTO $table_f (f_id, f_last, f_first, f_mi, loc_id, f_phone, f_rank, f_pin, f_image)
    VALUES ('$f_id', '$f_last', '$f_first', '$f_mi', '$loc_id', '$f_phone', '$f_rank', '$f_pin', '$f_image')";

    // check if i entered the data right
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }//end of f_store
  */
}// End of Student Submit Class



  
//------------------------------------------ Step5: Displays the Data table -------------------------------------------------
Class DisplayData
{
  //----------------------------------Display Students
  function display_student($conn, $table_s)
  {
    // ----------Accessing the database --------
    //student is the table name
    $sql = "SELECT s_id, s_last, s_first, s_last, s_mi, s_address,
     s_city, s_state, s_zip, s_phone, s_class, s_dob, s_pin, f_id
     FROM $table_s";
    $result = $conn->query($sql);

    // ---------displaying data in a table -----------
    echo "<table>"; //starting table tag
    echo "<h2 style='text-align:center'>Student Database</h2>";
    echo "<tr>
            <td>ID Number</td>
            <td>Last</td>
            <td>First</td>
            <td>Middle</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip</td>
            <td>Phone</td>
            <td>Class</td>
            <td>DOB</td>
            <td>Pin</td>
            <td>Faculty ID</td>
          </tr>";
    //dont display if database is null
    if ($result !=  null && $result->num_rows > 0 ) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>".
          "<td>". $row["s_id"] . "</td>".
          "<td>". $row["s_last"] . "</td>".
          "<td>". $row["s_first"] . "</td>".
          "<td>". $row["s_mi"] . "</td>".
          "<td>". $row["s_address"] . "</td>".
          "<td>". $row["s_city"] . "</td>".
          "<td>". $row["s_state"] . "</td>".
          "<td>". $row["s_zip"] . "</td>".
          "<td>". $row["s_phone"] . "</td>".
          "<td>". $row["s_class"] . "</td>".
          "<td>". $row["s_dob"] . "</td>".
          "<td>". $row["s_pin"] . "</td>".
          "<td>". $row["f_id"] . "</td>".
          "</tr>";
        }
    } else {
        echo "<tr><td>0 results</td></tr>";
    }
    echo "</table>";
  }//end of Display Student
  

  
}// End of DisplayData




// close the sql database connection
$conn->close();
 
?>