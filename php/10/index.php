<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/meta.php'; ?>
  <title>10 - Regular Expressions</title>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


<h1>10 - Regular Expressions</h1>


<h4> Generating Email Addresses</h4>

<p>
Displays and genereates email addresses using a database based on name 
<br><br>
Example 1: userid@ccsf.edu
<br><br>
Userid is based on the first letter of the instructor's first name and up to six charcters of the instructor's last name.
<br><br>
Example 2: If the instructor’s name is “Thomas Boegel”, the userid would be tboegel. If the instructor’s name is “Hans Yip”, the userid would be hyip. The entire email address must be all in lower-case. 
<br><br>
Each email link will be assign the following value to the href attribute of the opening &lt;a&gt; tag:<br>
href="mailto:<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="22575147504b4662414151440c474657">[email&#160;protected]</a>"

</p>
<br>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/displaycode-php.php'; ?>
<h3> Input Page </h3>

<form action='#' method='post'>
<!-- ////////////////////////////////////////Start of PHP ///////////////////////////////// -->
  <?php
  $inputfile="cis.txt";

  $courseList = array();

  $handle = fopen($inputfile, "r") or die("Can't open file");
  $line = fgets($handle);
  // read file data into array.
  while(!feof($handle)) {
//  if (ereg("^[[:digit:]]{5} +CIS +([[:digit:]]{3}[[:alpha:]]?)", $line, $result)) {
    preg_match("/^([[:digit:]]{5})(.*)CIS  ([[:digit:]]{3}[[:alpha:]]?) ([[:alnum:]]*)([[:blank:]]*)([[:alnum:]\.]*) ([[:alpha:][:space:]]{7}) ([[:alnum:]]*)  ([[:alnum:]]*)  ([[:alnum:]]*) ([[:alnum:]]*) (.*)/i", $line, $result);
//    print_r($result);
    if (count($result)==13) {
      $newline=array();
      $newline['CRN']=(int)$result[1];
      $newline['SUBJ']='CIS';
      $course=$newline['CRSE']=$result[3];
      $newline['SEC']=$result[4];
      $newline['UNIT']=$result[6];
      $newline['DAYS']=$result[7];
      $newline['START']=$result[8];
      $newline['END']=$result[9];
      $newline['BLDG']=$result[10];
      $newline['ROOM']=(int)$result[11];
      $newline['INSTRUCTOR']=trim($result[12]);
  //    print_r($newline);
  //    ([[:alpha:][:space:]]{7}) ([[:alnum:]]+) ([[:alnum:]]+) ([[:alnum:]]+) ([[:alnum:]]+) 
      if ($newline['CRN']>0) {
        $emailparts=explode(',',$newline['INSTRUCTOR']);
        //if (count($emailparts)>1) $newline['INSTRUCTOR']=substr(trim($emailparts[1]),0,1).substr($emailparts[0],0,6).'@ccsf.edu';
        //Modified
        if (count($emailparts)>1)
        {
          //trimming name, all lower case, etc...
          $firstn = strtolower(substr(trim($emailparts[1]),0,1));
          $lastn = strtolower(substr($emailparts[0],0,6));
          $newline['INSTRUCTOR']= $firstn.$lastn.'@ccsf.edu';
        }
  //      print_r($emailparts);
        if (!in_array($course, $courseList)) {
           array_push($courseList, $course);
           $courses[$course]=array();
        }
        array_push($courses[$course],$newline);
      }
    }
    $line = fgets($handle);
  }
  fclose($handle);

  print "Pick a class: CIS ";
  print "<select name='course' size=1>\n";
  if (!(isset($_POST['course']) && strlen($choice=trim($_POST['course'])))) {
    $choice=FALSE;
  }
  foreach ($courseList as $course) {
    print "<option value='$course'";
    if ($course==$choice) print " selected='selected'";
    print ">$course</option>";
  }
  print "</select>\n";


  function DisplayHeader($target) {
    print "<tr>\n";
    foreach (array_keys($target) as $key) {
      print "<th>$key</th>\n";
    }
    print "</tr>\n";
  }
  /*
  function DisplayRow($target) {
    print "<tr>\n";
    foreach (array_keys($target) as $key) {
      print "<td>$target[$key]</td>\n";
    }
    print "</tr>\n";
  }
  */
  //Modified
    function DisplayRow($target) {
    print "<tr>\n";
    foreach (array_keys($target) as $key) {
      if ($key == "INSTRUCTOR")
      {
        //print it out as a link and allowing mail to
      print "<td><a href='mailto:$target[$key]'>$target[$key]</a></td>\n";
      } else {
      print "<td>$target[$key]</td>\n";
      }
    }
    print "</tr>\n";
  }
?>
<!-- ////////////////////////////////////////End of PHP ///////////////////////////////// -->
  <p>
    <input type='submit' value='Show Courses'>
  </p>
</form>
<?php
if ($choice) {
  $now = date("Y-m-d H:m:s");
  $handle = fopen("lookuplog.txt", "a");
  fwrite($handle, "$now\t$course\n");
  fclose($handle);

  if (isset($courses[$choice])) {
    print "<table border=1 width='95%'>\n";
    DisplayHeader($courses[$choice][0]);
    foreach ($courses[$choice] as $line) {
      DisplayRow($line);
    }
  
    print "</table>\n";}
  } else if (strlen($choice)) {
    print "<p>No data for $choice</p>";
  } else print "<p>No Selection</p>";
?>


</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/footer.php'; ?>
</body>
</html>