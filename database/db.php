<?php
function connect_db()
{


    include_once("constants.php");
	$connection=mysqli_connect($hostname,$username,$password,$db_name);
	if(mysqli_connect_errno())
	{
		die(mysqli_connect_error());
        
	}
	return $connection;

}





?>