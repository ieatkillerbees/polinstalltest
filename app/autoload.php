<?php
if (!defined("SYMROOT")) {
    define("SYMROOT", "/opt/symfony");
}

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require SYMROOT . '/vendor/autoload.php';

// intl
if (!function_exists('intl_get_error_code')) {
    require_once SYMROOT . '/vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';
}

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
