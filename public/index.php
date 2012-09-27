<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));
defined('ZF2_PATH')
|| define('ZF2_PATH', (getenv('ZF2_PATH') ? getenv('ZF2_PATH') : 'C:\\webserver\\appstatus\\vendor\\'));

apache_setenv("ZF2_PATH", ZF2_PATH);


// Setup autoloading
include 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run();
