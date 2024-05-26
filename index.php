<?php
require_once dirname(__FILE__).'/init.php';

//przekierowanie (redirect) przeglądarki klienta -> header("Location: ".$conf->root_path."/app/calc.php"); -> przekazanie ("forward") żądania do następnego pliku 
include $conf->root_path.'/ctrl.php';
