<?php

class Files {
	public $title;
	public $author;
	public $description;
	
	public function __construct($title, $author, $description)  
    {  
        $this->title = $title;
	    $this->author = $author;
	    $this->description = $description;
    } 
}

?>