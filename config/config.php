<?php
session_start();

define('APP_ROOT', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

require_once(APP_ROOT.DS."clases".DS."Loader.php");

Loader::register();
Loader::addExtension('class', 'php');
Loader::addExtension('resources', 'php');
Loader::addExtension('resources', 'html');
Loader::addLookupDirectory(APP_ROOT);
Loader::addLookupDirectory(APP_ROOT.DS.'clases');
