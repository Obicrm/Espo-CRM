<?php
/************************************************************************
 * This file is a part of EspoCRM.
 ************************************************************************/

require_once('../../bootstrap.php');

// respond to pre flights
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // return only the headers and not the content
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Espo-Authorization,Content-Type,Espo-Authorization-By-Token');
    header('Access-Control-Allow-Methods: POST, GET, PUT, PATCH, DELETE, OPTIONS');
    die;
}

$app = new \Espo\Core\Application();
$app->run();
