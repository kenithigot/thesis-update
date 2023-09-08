<?php 
define('DB_HOST'    , 'localhost'); 
define('DB_USERNAME', 'u959174543_thesis2'); 
define('DB_PASSWORD', 'MsKQm0x0#J5$'); 
define('DB_NAME'    , 'u959174543_thesis2');

define('POST_DATA_URL', 'http://trashlevelmonitoring.shop/sensordata.php');

//PROJECT_API_KEY is the exact duplicate of, PROJECT_API_KEY in NodeMCU sketch file
//Both values must be same
define('PROJECT_API_KEY', 'aGVsbG8');


// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}