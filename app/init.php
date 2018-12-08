<?php
session_start();
$_config = require_once '../app/config.php';

require_once '../app/Helpers/Helper.php';


spl_autoload_register(function($class){
  require_once 'Core/'.$class.'.php';
});

$GLOBALS['path'] = '/tutorialSK/mini-framework/public';
