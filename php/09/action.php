<?php
  $galleryfolder = 'images/';
  $filetypes = "{*.gif,*.jpg,*.png}";

  // process submitted file upload
  if (is_array($_FILES) && count($_FILES) && isset($_FILES['uploaded'])) {
    foreach ($_FILES["uploaded"]["error"] as $key => $error) {
      
      $target_dir = "images/";
      $target_file = $target_dir . basename($_FILES["uploaded"]["name"][$key]);
      
      //this error checking will never show up since the html hidden input
      //stops the file from being uploaded if it is too big
      if ($_FILES["uploaded"]["tmp_name"][$key] > 50000)
      {
        echo "<b>Error file to large.</b><br>";
        echo filesize($_FILES["uploaded"]["tmp_name"][$key]). 'bytes<br>';
      }
      
      //check if file already exist
      if (file_exists($target_file)) {
      echo "<b>Sorry, file already exists.</b><br>";
      }

      //upload file if there is no errors
      if ($error == UPLOAD_ERR_OK)
      {
      $tmp_name = $_FILES["uploaded"]["tmp_name"][$key];
      // basename() may prevent filesystem traversal attacks;
      // further validation/sanitation of the filename may be appropriate
      $name = basename($_FILES["uploaded"]["name"][$key]);
      move_uploaded_file($tmp_name, "$galleryfolder/$name");
      }
      
    }
  }// end of file upload process

  echo <<<ENDINPUT
<form enctype='multipart/form-data' action='${_SERVER['PHP_SELF']}' method='POST'>
  You can upload pictures to this gallery here:<br>
  Max File Size: 50KB only <br>
  <input type="hidden" name="MAX_FILE_SIZE" value="50000">
  File 1: <input name='uploaded[]' type='file'/><br>
  <br>
  <input type='submit' value='Upload'/>
</form>
ENDINPUT;
  
  //Display the gallery
  //order of the file names will dictate what displays first 
  $filelist = glob("images/*.{gif,jpg,png}", GLOB_BRACE);
  if ($filelist != false) {
    print "<p>Here are some pictures:</p>";
    foreach ($filelist as $file) {
      $url = "images/" 
    . substr($file, strrpos($file, '/') + 1);
      print "<img src='$url' height='auto' width='300' style=' padding:10px;'>";
    }
  } else {
    print "No pictures to display yet!";
  }//end of gallery printing
  

?>




