<?php

// Connection Details .. uncomment when we have a Database 

/* UNCOMMENT OUT WHEN DATABASE SET UP 
define( "DB_DATA_SOURCE", "mysql:host=localhost;dbname=ENTER DB NAME HERE" );
define( "DB_USERNAME", "" );
define( "DB_PASSWORD", "" );
*/

// Class Configure 
function __autoload($class) {

	$folder = '/teamProj_LGP';	// Rename to where your storing your folders / files 
	require_once($_SERVER['DOCUMENT_ROOT'].$folder."/app/models/$class.php");

}

// Launch Connection UNCOMMENT OUT WHEN DATABASE SETUP
//$conn = ConnectionFactory::connect();

// Include Common Functions File 
include_once "functions.php";

?>