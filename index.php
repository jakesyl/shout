
<?php
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_DriveService.php';

$client = new Google_Client();
// Get your credentials from the console
$client->setClientId('264094703268.apps.googleusercontent.com');
$client->setClientSecret('QgOlmdX5AnmzibNwfC1dRWJI');
$client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
$client->setScopes(array('https://www.googleapis.com/auth/drive'));

$service = new Google_DriveService($client);

$authUrl = $client->createAuthUrl();

//Request authorization
print "Please visit:\n$authUrl\n\n";
print "Please enter the auth code:\n";
$authCode = trim(fgets(STDIN));

// Exchange authorization code for access token
$accessToken = $client->authenticate($authCode);
$client->setAccessToken($accessToken);

//Insert a file
$file = new Google_DriveFile();
$file->setTitle('My document');
$file->setDescription('A test document');
$file->setMimeType('text/plain');

$data = file_get_contents('document.txt');

$createdFile = $service->files->insert($file, array(
      'data' => $data,
      'mimeType' => 'text/plain',
    ));

print_r($createdFile);

/*
function artostr($ui)
{
$ui2 = filter($ui);
$ui3="";
$length = count($ui2);
for($i=0; $i<$length; $i++)
{
$ui3 = $ui3.$ui2[$i];
}
return $ui3;
}



function filter ($ui)//Purpose of this function is to filter out bad sql keywords
{
//Filters out sql keywords!`
//random variables
$disallowed = array ("SELECT", "WHERE", "AND", "OR", "UPDATE", "DELETE");//THIS COULD CAUSE AN ISSUE  
//$ui="Zach's a doggy SELECT";//inputjak
$ui2 = (explode(" ", $ui));//exploded
$count = count($ui2);
for($i=0;$i<$count;$i++){

$inbool=$ui2[$i];

if(in_array($inbool, $disallowed))//JAHS
{
switch ($inbool)
{
	case "SELECT";
		$ui2[$i]="%1";
		break;
	case "WHERE";
		$ui2[$i]="%2";
		break;
	case "AND";
		$ui2[$i]="%3";
		break;
	case "OR";
		$ui2[$i]="%4";
		break;
	case "UPDATE";
		$ui2[$i]="%5";
		break;
	case "DELETE";
		$ui2[$i]="%6";
		break;
}}}
return $ui2;
}
*/
/*
function artostr($ui)//what is this for
{
$ui2 = filter($ui);
$ui3="";
$length = count($ui2);
for($i=0; $i<$length; $i++)
{
$ui3 = $ui3.$ui2[$i];
}
return $ui3;
}
*/
/*

function assembler($ui)//Reassembles the disassembled code
{
$disallowed = array ("%1", "%2", "%3", "%4", "%5", "%6");
//$ui="Zach's a doggy SELECT";//input
$ui2 = (explode(" ", $ui));//exploded
$count = count($ui2);
for($i=0;$i<$count;$i++){
$inbool=$ui2[$i];
if(in_array($inbool, $disallowed))//JAHS
{
switch ($inbool)
{
	case "%1";
		$ui2[$i]="SELECT";
		break;
	case "%2";
		$ui2[$i]="WHERE";
		break;
	case "%3";
		$ui2[$i]="AND";
		break;
	case "%4";
		$ui2[$i]="OR";
		break;
	case "%5"; 
		$ui2[$i]="UPDATE";
		break;
	case "%6";
		$ui2[$i]="DELETE";
		break;
}}}
return $ui2;
}

*/

/*$ui= "ME AND YOU";

//Theoretical function here {
$con = ($mysqli = new mysqli ("localhost", "root", "jake1998", "chat"));
//Check Connection
if ($con->connect_errno){
for ($i=0;$i<4;$i++)
{
while ($con->connet_errno)
{
$con = ($mysqli = new mysqli ("localhost", "jakesyl", "jake1998", "chat"));// a desperate attempt at fixing a broken mysql database
}}}
//}

//
//
///*function idgen($con)
{
$id2 = rand(0,99999999);
$querycheck = "SELECT ID FROM Messages WHERE ID=".$id2;
$id2 = mysqli_query($con, $querycheck);
if (mysqli_affected_rows($id2) == 0){
while(mysqli_affected_rows($id2) == 0){
$id2 = mysqli_query($con, $querycheck);
$shitstopper = 1;
$shitstopper++;
if $shitstopper!=100{
$id2 = mysqli_query($con, $querycheck);
$shitstopper = 1;
$shitstopper++;
}
} //• Around 5 billion lines of new COBOL code are added to live systems every year. (See: System Inetwork article)
return $id2;
}
//*/
/*
function filter ($ui)
{
//Filters out sql keywords!`
//random variables
$disallowed = array ("SELECT", "WHERE", "AND", "OR", "UPDATE", "DELETE");//THIS COULD CAUSE AN ISSUE  
//$ui="Zach's a doggy SELECT";//inputjak
$ui2 = (explode(" ", $ui));//exploded
$count = count($ui2);
for($i=0;$i<$count;$i++){

$inbool=$ui2[$i];

if(in_array($inbool, $disallowed))//JAHS
{
switch ($inbool)
{
	case "SELECT";
		$ui2[$i]="%1";
		break;
	case "WHERE";
		$ui2[$i]="%2";
		break;
	case "AND";
		$ui2[$i]="%3";
		break;
	case "OR";
		$ui2[$i]="%4";
		break;
	case "UPDATE";
		$ui2[$i]="%5";
		break;
	case "DELETE";
		$ui2[$i]="%6";
		break;
}}}
return $ui2;
}

{
//random variables
function assembler($ui)
{
$disallowed = array ("%1", "%2", "%3", "%4", "%5", "%6");
//$ui="Zach's a doggy SELECT";//input
$ui2 = (explode(" ", $ui));//exploded
$count = count($ui2);
for($i=0;$i<$count;$i++){
$inbool=$ui2[$i];
if(in_array($inbool, $disallowed))//JAHS
{
switch ($inbool)
{
	case "%1";
		$ui2[$i]="SELECT";
		break;
	case "%2";
		$ui2[$i]="WHERE";
		break;
	case "%3";
		$ui2[$i]="AND";
		break;
	case "%4";
		$ui2[$i]="OR";
		break;
	case "%5"; 
		$ui2[$i]="UPDATE";
		break;
	case "%6";
		$ui2[$i]="DELETE";
		break;
}}}
return $ui2;
}}
function artostr($ui)
{
$ui2 = filter($ui);
$ui3="";
$length = count($ui2);
for($i=0; $i<$length; $i++)
{
$ui3 = $ui3.$ui2[$i];
}
return $ui3;
}

function chat_script($ui, $con)
{
$ui=artostr($ui);
$id = idgen($con);//Generates the id to be used in chat
$username = "jakesyl";//WRITE A FUNCTION TO GET USERNAME!!!!!!
$query2 = "INSERT INTO Messages (ID, Username, Message) VALUES ".$id." ".$username." ".$ui;//Not SUre how time will work out here..
mysqli_query($con,$query2);
//ADD THE USERNAME HERE
//$time = new  mysqli_query ("NOW");
}



//LETS MAKE SURE THIS SHIT ACTUALLY WORKS!
*/
///*
/*
$test2 = idgen($con);
$test3 = filter($ui);
$test4 = assembler($ui);
$test5 = chat_script($ui, $con);
*/
///*
/*
The homeless function :(

function connection(){
$con = ($mysqli = new mysqli ("localhost", "root", "jake1998", "chat"));
//Check Connection
if ($con->connect_errno){
for ($i=0;$i<4;$i++)
{
while ($con->connet_errno)
{
$con = ($mysqli = new mysqli ("localhost", "jakesyl", "jake1998", "chat"));// a desperate attempt at fixing a broken mysql database
return $con;
}}}}
$con = connection();

*/
?> 