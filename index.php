<?php
//let's get to work 
//cleardb setup
/*
TODO add messages
*/
//how we send : "message|1,1;'this is really dumb'/username";
$ui = $_POST["data"]
function splitly($ui){
$type = explode('|', $ui);
$lat =  explode (',', $type[1]);
$long = explode(';', $lat[1]);
$messag = explode('/', $long[1]);
//echo $long[1];
$un = $messag[1];
$message = array ("username"=>$un,"type"=>$type[0],"lat"=>$lat[0], "long" => $long[0], "mess" => $long[1]);
return $message;
 test($ui,$function,$type,$lat,$long,$messag,$message);
}
$message = splitly($ui);
function messageex($message)
{
$realmess =  $message['mess'];//workaround
$messly = explode("/",$realmess);
$mess2 = $messly[0];
return $mess2;
}
$messly = messageex($message);
//print_r ($message);//just a checker
//TODO insert zachs distance function

//TODO make this a function
$link = mysqli_connect ('localhost', 'root', 'jake1998', "chatly");
if ($link->connect_errno) {
echo "There was an error, we'll fix it soon please email me at mailto:jake@lexake.com";
}

//long1/lat1 are you, long2/lat2 are you your checking against
//use later
//why not- a workaround
$lat = $message['lat'];
$long = $message['long'];

function checkDistance($lat, $long, $latcheck, $longcheck){
                if (sqrt(($long1-$long2)^2 + ($lat1-$lat2)^2)/69 <= 10){
                        return true;
                }
                else{
                        return false;
                }
        }


function ping ($message,$link,$latly, $longly) {
$result = mysqli_query("SELECT ID, LAT, LONG FROM CHATS");
$varly = mysqli_affected_rows($link);
$messages = array();
if ($varly = 0)
{
return "";
}
for ($i=1;$i!=$varly;
{
$latly = mysqli_query($link,"SELECT lat FROM CHATS WHERE ID =". $varly); 
$longly = mysqli_query($link,"SELECT long FROM CHATS WHERE ID =". $varly); 
$booly = checkDistance($lat,$long,$latly,$longly);
if $booly == TRUE {
$message = mysqli_query($link "SELECT ")
$topush= "message|".$latly.",".$longly
}
}  
}

if ($message['type']=="ping"){
// INSERT PING FUNCTION HERE
//ping //ADD the other params
ping($message,$link,$lat, $long);
}

function idgen ($link){
$date = mysqli_query($link, "SELECT MAX(date) FROM chats");
$id1 = mysqli_query($link, "SELECT id FROM chats WHERE date ="/*.$date*/);
if (mysqli_affected_rows($link)==0)
{
$id = 1;
}
$id = $id1 + 1;
return $id;
}
$id = idgen($link);
//print_r($message);
//now that its done.......
$querly = "INSERT INTO chats (username, lat, longly, message, ID) VALUES (".$message['username'].", ". $message['lat'] . ", " . $message['long'].",". $messly.")";
//echo $querly;
mysqli_query($link, $querly);

/*$tablename = rand(100000000,99999999);
$tableid = $tablename+1;
//add a table id later
$thequery = "INSERT INTO tbldir (id, name) VALUES (".$id.", ".$tablename.")"; 
mysqli_query($link,$thequery);
*/
/*
uselesss shit: 
function test($ui,$function,$type,$lat,$long,$messag,$message)
{
echo "1";
print_r($ui);
echo "1";
print_r($type);
echo "1";
print_r($lat);
echo "1";
print_r($long);
echo "1";
print_r($messag);
echo "1";
print_r($message);
}

*/

//REMEMBER U NEED TO ADD 1 MESSAGE TO THE THING FOR IT TO WORK

?>