<?php

//set error displaying
ini_set('display_erros', 'On');
error_reporting(E_ALL | E_STRICT);

//define where the document root is
define('DOCROOT', __DIR__);


//start the bootstrapping process
require_once(DOCROOT.'/system/project/config/bootsrap.php');


//start the application

//we get the name of the controller ($_GET['page'], home or 'error404')
$controller_name = router::getControllerName('page');

//we run 
router::runController($controller_name);

?>