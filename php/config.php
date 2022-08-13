<?php

// $db_name = 'test';
// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = '';

$db_name = 'b3c0fe695717eb';
$db_host = '7641be3f';
$db_user = 'us-cdbr-east-06.cleardb.net';
$db_pass = 'heroku_e2512654187de92';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

//mysql://b3c0fe695717eb:7641be3f@us-cdbr-east-06.cleardb.net/heroku_e2512654187de92?reconnect=tru