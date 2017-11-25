<?php 
include 'includes/functions.php';
echo "HW";
$data = new Refugee();
writeObjToJSON($data,"text.json");
dump(readJSON("text.json"));



 ?>