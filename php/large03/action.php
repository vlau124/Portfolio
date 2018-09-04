<?php
/*
Basic things that needs to be done try to get basic things working first
then fix usability and clean out code more if extra time left.

-view download files          [done]  see line 154
-upload new file              [done]  see line 56
-create folders or directors  [done]  see line 219
-move files                   [done]  see line 229
-delete files                 [done]  see line 237
-convert filepaths to url     [done]  see line 167
-check if file is a image     [done]  see line 202
-image url needs to display small images [done] see line 174

Setting root directory                see line 52

User button map assignment:           see line 94- 144
button1 - create directory
button2 - move files
button3 - delete files
upload - upload files
*/

//This allow multiple button and user inputs without collission
if(isset($_POST['button1'])){
  $dirname = $_REQUEST['dirname'];
  $dirpath = $_REQUEST['dirpath'];
  if ($dirname=="" ||$dirpath=="")
  {
    echo "Directory Path or Name was not entered ";
  }
  createdir($dirname, $dirpath);  // see line 219
}elseif(isset($_POST['button2'])){ 
  $path1 = $_REQUEST['path1'];
  $path2 = $_REQUEST['path2'];
  if ($path1=="" ||$path2=="")
  {
    echo "Current Path or New Path was not entered ";
  }
  movefile($path1, $path2); // see line 229
}elseif(isset($_POST['button3'])){ 
  $delpath = $_REQUEST['delpath'];
  if ($delpath == "" )
  {
    echo "Directory Path was not entered ";
  }
  delfile($delpath); // see line 237
 }


//--------------------------file uploading -----------------
  $galleryfolder = 'images/';    // ----------[this will be the root directory]-----------
  $filetypes = "";//allow all filetype
  
  //Process submitted file upload
  if (is_array($_FILES) && count($_FILES) && isset($_FILES['uploaded'])) {
    foreach ($_FILES["uploaded"]["error"] as $key => $error) {
      
      $target_dir = "images/";
      $target_file = $target_dir . basename($_FILES["uploaded"]["name"][$key]);
      
      //this error checking will never show up since the html hidden input
      //stops the file from being uploaded if it is too big
      $max_file_size = 3000000; //3mb max for easier testing
      if ($_FILES["uploaded"]["tmp_name"][$key] > $max_file_size)
      {
        echo "<b>Error file to large.</b><br>";
        echo filesize($_FILES["uploaded"]["tmp_name"][$key]). 'bytes<br>';
      }
      
      //check if user selected a file or uploaded the same file
      if ($target_file == $target_dir)
      {
        echo "<b>You have Uploaded Nothing. Please select a file!</b><br>";
      } elseif (file_exists($target_file)) {
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

//--------------------------Creating User Form Inputs--------------------------
  //create directory
  echo <<<ENDINPUT
<form enctype='multipart/form-data' action='${_SERVER['PHP_SELF']}' method='POST'>
  Create a Directory:
  <br>Folder Name:<br>
  <input name='dirname'type='text' placeholder='Folder Name' /><br>
  Folder Path:<br>
  <input name='dirpath' type='text' placeholder='ex. images/test'/><br>
  <br>
  <button type="submit" name="button1" value="button1">Create Directory</button>
</form>
<hr>
ENDINPUT;
  
  //moving files
  echo <<<ENDINPUT
<form enctype='multipart/form-data' action='${_SERVER['PHP_SELF']}' method='POST'>
  Create a Directory:
  <br>Enter current file location:<br>
  <input name='path1'type='text' placeholder='ex. images/test/asdf.txt' /><br>
  Enter new file location to be moved to:<br>
  <input name='path2' type='text' placeholder='ex. images/test/asdf.txt'/><br>
  <br>
  <button type="submit" name="button2" value="button2">Move File</button>
</form>
<hr>
ENDINPUT;
  
  //deleting files
  echo <<<ENDINPUT
<form enctype='multipart/form-data' action='${_SERVER['PHP_SELF']}' method='POST'>
  Delete a file:
  <br>Enter current file location to be deleted:<br>
  <input name='delpath'type='text' placeholder='ex. images/test/asdf.txt' /><br>
  <br>
  <button type="submit" name="button3" value="button3">Delete File</button>
</form>
<hr>
ENDINPUT;


  //uploading files
  echo <<<ENDINPUT
<form enctype='multipart/form-data' action='${_SERVER['PHP_SELF']}' method='POST'>
  You can upload pictures to this gallery here:<br>
  Max File Size: 3MB only <br>
  <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
  File 1: <input name='uploaded[]' type='file'/><br>
  <br>
  <input type='submit' value='Upload'/>
</form>
ENDINPUT;
  
  //declaring root directory (was seperated for testing purposes)
  $folder = $galleryfolder;
  //the spacing are my attept to create dashes to show sub directories
  //it works, but visually it doessnt look any better =[
  $spaces = 0;
  printall($folder, $spaces);
  
//-------------------------directory printing ----------------------------
function printall($folder, $spaces)
{ 
  $spaceformat = str_repeat("....../", $spaces); //spacing attempt
  //Display the gallery
  $filelist = glob("$folder*", GLOB_BRACE);
  if ($filelist != false) {
    print "<h4>Here the files in '". $folder. "'</h4>";
    foreach ($filelist as $file) {
      $url = $folder . substr($file, strrpos($file, '/') + 1);

      //use recursion to search through all directories
      //check for directories first before image
      //mime types will detect directories as a image
      if (filetype($file) == 'dir') 
      {
        print "<a href='$url'>$file is a directory</a><br>";
        $newfolder = $file . "/";
        $new_space = $spaces + 1;
        printall($newfolder, $new_space);
      } elseif (checkimage($file)) { //check for image  see line 202
        print "<a href='$url'>$spaceformat
          <img src='$url' height='auto' width='100' style=' padding:10px;'>
          $file
          </a><br>";
      } else { //print other files
        print "<a href='$url'>$spaceformat$file</a><br>";
      }
    }//end of for loop
  } else {
    print "Empty Folder. No files to display yet!<br>";
  }//end of gallery printing if statement
  
  //let the user know this is the end of the folder list and go back
  $prevfolder = substr($folder,0,strrpos($folder,'/'));
  $prevfolder = substr($prevfolder,0,strrpos($prevfolder,'/')); //had to do this twice because of extra /
  print $spaceformat . "Going back to folder: " . $prevfolder . "/<br>";
  
  if ($prevfolder == "")
  {
    print "End of Tree";
  }
  
  return; //return is needed for recursion
}//end of printall
  
  
//----------------------check if file is a image -------------------
//mime types will detect directories as a image
function checkimage($img)
{
  $imageMimeTypes = array(
    'image/png',
    'image/gif',
    'image/jpeg');

  $img = mime_content_type($img);
  $imgcheck = false;
  if (in_array ($img, $imageMimeTypes))
  {
    $imgcheck = true;
  }
  return $imgcheck;
}

//------------------------- Directory Creation ----------------------------
function createdir($dirname, $dirpath)
{
  // the extra / is inserted incase user does not add it in
  $New_Dir = $dirpath . "/" . $dirname; 
  mkdir($New_Dir, 0700);
  echo "Directory Has Been Created<br>";
  echo $New_Dir . "<br>";
}

//------------------------- Moving files ----------------------------
function movefile($path1, $path2)
{
  //moves path1 to path2
  rename($path1, $path2);
  echo "The file: (" . $path1 . ") has been moved to<br>(" . $path2 . ")";
}

//------------------------- Delete File ----------------------------
function delfile($delpath)
{
  //deletes the current path
  unlink($delpath);
  echo "The file: (" . $delpath . ") was deleted";
}

?>




