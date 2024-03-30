<!DOCTYPE html>
<head>
	<title>title</title>
	<meta charset="UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/app/public/main.css">
</head>
<body>

<?php
use app\controllers\Index;
require_once 'app/config.php';

$index = new Index();
$index->run();

?>


<script src="/app/public/main.js"></script>
</body>
</html>