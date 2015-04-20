<?php
	var_dump($_GET);
	echo "<br>";
	
switch($_SERVER['REQUEST_METHOD'])
{
	case 'GET': $the_request = &$_GET; echo "this is a GET request"; break;
	case 'POST': $the_request = &$_POST; echo "this is a POST  request"; break;
	case 'PUT': $the_request = &$_POST; echo "this is a PUT  request"; break;
	case 'DELETE': $the_request = &$_DELETE; echo "this is a DELETE  request"; break;
	
	default: echo "<br> This method is not supported yet";
}
echo "<br> i am writing this <br>";

echo("<p><table><th>KEY</th><th>VALUE</th>");
foreach($_GET as $key=>$value)
{
	echo("<tr><td>$key</td><td>$value</td></tr>");
}
echo("</table></p>\r\n");

?>