<?php

include_once("model/Files.php");

class Model {
	public function getFilesList()
	{
		// here goes some hardcoded values to simulate the database
    /*
		return array(
			"Jungle Files" => new Files("Jungle Files", "R. Kipling", "A classic Files."),
			"Moonwalker" => new Files("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Files("PHP for Dummies", "Some Smart Guy", "")
		);
    */
    
    /*
    $db = parse_ini_file("config.ini");
    
    $controller = $db['CONTROLLERS'];
    $files= $db['FILES'];
    $model = $db['MODEL'];
    $view = $db['VIEW'];
    
    $myfile1 = fopen("../controller/README.txt", "r") or die("Unable to open file!");
    $myfile2 = fopen("../files/README.txt", "r") or die("Unable to open file!");
    $myfile3 = fopen("../model/README.txt", "r") or die("Unable to open file!");
    $myfile4 = fopen("../view/README.txt", "r") or die("Unable to open file!");
    
    $des1 = fread($myfile1,filesize("../controller/README.txt"));
    $des2 = fread($myfile2,filesize("../files/README.txt"));
    $des3 = fread($myfile3,filesize("../model/README.txt"));
    $des4 = fread($myfile4,filesize("../view/README.txt"));
    
    fclose($myfile1);
    fclose($myfile2);
    fclose($myfile3);
    fclose($myfile4);
    */
    
    /* Couldnt figure out how to open the 
        $db = parse_ini_file("config.ini");
    
    $controller = $db['CONTROLLERS'];
    $files= $db['FILES'];
    $model = $db['MODEL'];
    $view = $db['VIEW'];
    */
    
    /* could not get the config.ini file to work
    so i am putting the paths here for now*/
    
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