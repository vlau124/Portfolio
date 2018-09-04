<html>
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/header.php'; ?>
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/php/navigation_wback.php'; ?>
<div class="info-container">


<h1>Uses a basic MVC Framework to display all the readme text files in each folder of this framework</h1>
<h3><b>
Not sure how I would display code for this yet, but here is a download link. <a href="mvc.zip">Download Here mvc.zip</a>
</b></h3>



<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		if (!isset($_GET['Files']))
		{
			// no special Files is requested, we'll show a list of all available Filess
			$Filess = $this->model->getFilesList();
			include 'view/Fileslist.php';
		}
		else
		{
			// show the requested Files
			$Files = $this->model->getFiles($_GET['Files']);
			include 'view/viewFiles.php';
		}
	}
}

?>

</div><!-- end of info container -->

</body>
</html>