<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);

    define('URL',"http://localhost/Prueba_ISC601/Equipo_Jaz/");

    require_once ("AppData/Config/Autoload.php");
    \AppData\Config\Autoload::run();

    if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"]))
    Views\Template::header();
    AppData\Config\Enrutador::run(new AppData\Config\Request());
?>