<?php
//for local host
define('basePath', '/scheduler/');
define('libs', $_SERVER['DOCUMENT_ROOT'].'/scheduler/libs/');
define('basePathForRequire', $_SERVER['DOCUMENT_ROOT'].'/scheduler/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'scheduler');
define('DB_USER', 'dfang');
define('DB_PASS', '123');

define('HASH_GENERAL_KEY', '1');
define('HASH_PASSWORD_KEY', '1');

?>
