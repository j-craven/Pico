<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/');
define('CONTENT_EXT', '.html');
define('LIB_DIR', ROOT_DIR .'lib/');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', LIB_DIR .'cache/');

require_once(LIB_DIR .'pico.php');
$pico = new Pico();
