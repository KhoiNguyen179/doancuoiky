<?php
$configDB = array();
$configDB["host"] 		= "localhost";
$configDB["database"]	= "bookstore";
$configDB["username"] 	= "root";
$configDB["password"] 	= "root";
define("HOST", "localhost");
define("DB_NAME", "bookstore");
define("DB_USER", "root");
define("DB_PASS", "root");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']."/ltweb/");//dia chi website
define("SACH_1_TRANG",6);
