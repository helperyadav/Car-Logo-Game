<?php
include_once("PuzzleProvider.php");
include_once ("DBrepository.php");

// open syslog, include the process ID and also send
// the log to standard error, and use a user defined
// logging mechanism
openlog("myScriptLog", LOG_PID | LOG_PERROR, LOG_USER);


$response = "";
$data = "";
switch($_SERVER['REQUEST_METHOD'])
{
	case 'GET': 
		$the_request = &$_GET; 
		 syslog(LOG_WARNING, "Unauthorized client");
		 
		echo json_encode(GetPuzzleProvider(1)->GetPuzzle($_GET['LastPuzzleId']));

		break;
	case 'POST': 
		$the_request = &$_POST; 
		//echo "this is a POST  request"; 
		break;
	case 'PUT': 
		$the_request = &$_PUT; 
		echo "this is a PUT  request"; 
		
		break;
	case 'DELETE': $the_request = &$_DELETE; echo "this is a DELETE  request"; break;
	
	default: echo "<br> This method is not supported yet";
}

closelog();
?>