<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

// Pastas
if ( !defined('BASEURL') )
    define('BASEURL', '/bipe/');
define('ASSETS', dirname(__FILE__,3) . '/assets/');
define('ABSPATH', dirname(__FILE__,3) . '/');
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// Arquivos

require_once(realpath(dirname(__FILE__) . '/DataBase.php'));
require_once(realpath(dirname(__FILE__) . '/Loader.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/Home.php'));
