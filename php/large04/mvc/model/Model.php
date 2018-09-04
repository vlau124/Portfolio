<?php

include_once("model/Files.php");

class Model {
	public function getFilesList()
	{
    
    $url1 = "controller/README.txt";
    $url2 = "model/README.txt";
    $url3 = "view/README.txt";
    $url4 = "Files/README.txt";
    
    $myfile1 = fopen($url1, "r") or die("Unable to open file!");
    $myfile2 = fopen($url2, "r") or die("Unable to open file!");
    $myfile3 = fopen($url3, "r") or die("Unable to open file!");
    $myfile4 = fopen($url4, "r") or die("Unable to open file!");
    
    //$des1 = fread($myfile1,filesize("README.txt"));
    $des1 = file_get_contents($url1);
    $des2 = file_get_contents($url2);
    $des3 = file_get_contents($url3);
    $des4 = file_get_contents($url4);
    
    /* ---------------------------------*/
    return array(
      "Files1" => new Files("README.txt", $url1, $des1),
      "Files2" => new Files("README.txt", $url2, $des2),
      "Files3" => new Files("README.txt", $url3, $des3),
      "Files4" => new Files("README.txt", $url4, $des4),
    );
    
    
	}
	
	public function getFiles($title)
	{
		// we use the previous function to get all the Filess and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allFiless = $this->getFilesList();
		return $allFiless[$title];
	}
	
	
}

?>