<?php 
//let's get to work 
//cleardb setup
$url=parse_url(getenv("mysql://b914ceb3852d81:51103134@us-cdbr-east-05.cleardb.netheroku_d9af4d7caf0d3d4?reconnect=true"));

$server = $url["host"];
$username = $url["b914ceb3852d81"];
$password = $url["51103134"];
$db = substr($url["path"],1);

    mysql_connect($server, $username, $password);


    mysql_select_db($db);

$ui = "message|1,1;'this is really dumb'";
function split ($ui){
$type = explode("|", $ui);
$lat =  explode (",", $type[2]);
$long = explode(";", $lat[2]);
$messag = $long[2];
$message = ["type"=>$type1,"lat"=>$lat[1], "long" => $lat[1], "message" => $mesag];
return $message;
}
 echo  


?> 