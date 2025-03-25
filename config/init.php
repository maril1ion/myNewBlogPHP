<?php

define('ROOT', dirname(__DIR__));
// Ошибки
define('DEV', '1');

define('CONFIG', ROOT.'/config');
define('APP', ROOT.'/app');
define('VIEW', APP.'/Views');
define('PAGES', VIEW.'/pages');
define('COMPONENTS', VIEW.'/components');
define('LAYOUT', VIEW.'/layouts');
define('CORE', ROOT.'/core');
define('HELPERS', CONFIG.'/helpers.php');

// Доавбление и обработка постов
define('ADD_POST', PAGES.'/blogs/addPost.php');
