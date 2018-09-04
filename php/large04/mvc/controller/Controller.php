<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
  <link rel="stylesheet" href="login/style.css">
  
  <link rel="stylesheet" href="view/style.css">
  

 
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


<?php
//opens the files and reads them
//include_once("model/Model.php");
include_once("view/displayPrompt.php");
include_once("login/login.php");
//include_once("login/login2.php");

class Controller {
	public $model;
	//grabs all the variables in model for us
	public function __construct()  
    {  
        //$this->model = new Model();
    } 
   
	//gets the other page to view the data
  //display only when user submits
	public function invoke()
	{
    
    //$login = false;
		//if (!isset($_GET['Files']))
    if (isset($_POST['submit']))
		{
			// no special Files is requested, we'll show a list of all available Filess
			//$Filess = $this->model->getFilesList();
			//include 'view/Fileslist.php';
      
     
      include 'login/logout.php';         //display logout
      
      /*
      there appears to be issues with what is being executed or 
      displayed based on the order they are put and the form submission.
      */
      //include 'login/test.php';        
      include 'ajaxstuff/ajaxView.php'; //display visitors using ajax      
      include 'view/viewVisitors.php';    //displays visitors using jquery
      
		}
		else{
    }
    
    //why does this not get executed?
    if (isset($_POST['submit2']))
		{
      echo"submit222222222222";
      include 'ajaxstuff/ajaxView.php'; //display visitors using ajax
      include 'view/viewVisitors.php';   //display the visitors
      include 'login/leavebuilding.php'; //sets the visitor to exit building
      
		}
		else
		{
		}
    
    
    /*-------------Lets try to see if this works------------------*/
    /*
    $login=false;
    include_once("login/login.php");
    if (isset($_POST['submit']))
		{
      if ($login == false)
      {
      include 'login/logout2.php';         //display logout [uses the same submit as login]
      include 'view/viewVisitors.php';    //displays the visitors
      $login = true;
      }
      
      if ($login == true)
      {
      echo"submit222222222222";
      include 'login/leavebuilding.php'; //sets the visitor to exit building
      include 'view/viewVisitors.php';   //display the visitors
      $login = false;
      }
    }
    */
    
    
    
    
    
    
    
    
    
    
    
    
	}
}

?>

</div><!-- end of info container -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/test/php/footer.php'; ?>
</body>
</html>