<?php 
//let's get to work 
print("arg");
$ui = "message|1,1;'this is really dumb'";
echo $ui;
function split ($ui){
$type = explode("|", $ui);
$lat =  explode (",", $type[2]);
$long = explode(";", $lat[2]);
$messag = $long[2];
$message = ["type"=>$type1,"lat"=>$lat[1], "long" => $lat[1], "message" => $mesag];
return $message;
}
 
/*
 * All database connection variables
 */
/* 
define('DB_USER', "root"); // db user
define('DB_PASSWORD', ""); // db password (mention your db password here)
define('DB_DATABASE', "androidhive"); // database name
define('DB_SERVER', "localhost"); // db server
*/
?> 