<?php

//check it is ajax request
if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
	die("Error! allow ajax requests only");
}

use app\controllers\Service;

require_once 'app/config.php';


$actionName = $_GET['action'];
$service    = new Service();

if (!method_exists($service, $actionName)) {
	die("Error! Method $actionName is not defined for a controller Service");
}

header('Content-type: application/json');
//call service
$service->{$actionName}($_GET['product_box_id']);
