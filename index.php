<?php 
/*TODO:
- Improve input validation
- Try-Catch control error
- Refactor parsing part to parsing class?
*/

include_once('classes/Casino.php');

$casino = new Casino();

$message = " ";
while($message != "") {
	$message = readline();
	$casino->readMessage($message);
}
$casino->close();



?>