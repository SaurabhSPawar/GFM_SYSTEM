<?php
if(isset($_GET['logout_id']))
{
	session_start();
	session_unset();
	session_destroy();

} 

?>