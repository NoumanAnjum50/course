<?php
$dataI = array(1, "asif", "Lahore", 100);
$dataA = array("sr_no"=>1, "name"=>"asif", 
"city"=> "Lahore", "weight"=> 100);

foreach($dataI as $key=>$value){
	echo("$key-$value <br>");
}

echo("<br><hr>");
foreach($dataA as $key=>$value){
	echo("$key-$value <br>");
}











?>