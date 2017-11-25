<?php 

function dump(...$vars){ // prints the $variable contents to the page 
    foreach($vars As $var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    }
}

/**
* Refugee Struct that holds the information.
*/
class Refugee { 
	
	function __construct($fname="", $lname="", $email="", $phoneNo="", $address="", $dob="", $security="", $sex="")
	{
		$this->fname=$fname;
		$this->lname=$lname;
		$this->email=$email;
		$this->phoneNo=$phoneNo;
		$this->address=$address;
		$this->dob=$dob;
		$this->security=$security;
		$this->sex = $sex;
	}
}

function readJSON($fn) // returns a JSON object
{
	$fileStr = file_get_contents($fn);
	$data = json_decode($fileStr,true);
	return $data;
}

function writeObjToJSON($obj, $fn){ // void: write a file to file 
	$json = json_encode($obj);
	$handle = fopen($fn, 'w') or die('Cannot open file:  ' . $fn);
	fwrite($handle, $json);
}



 ?>
