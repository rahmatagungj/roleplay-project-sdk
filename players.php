<?php
require_once( "global.php" );
include( "mta_sdk.php" );
$mtaServer = new mta( "localhost", "22005", MTA_HTTP_USERNAME, MTA_HTTP_PASSWORD);

$allPlayer = $mtaServer->callFunction("sdk", "getAllPlayers", []);
echo $mtaServer->doReturn($allPlayer);
?>