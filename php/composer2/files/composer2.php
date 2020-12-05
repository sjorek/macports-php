#!@PHP@
<?php
// @NAME@

if (false === getenv('COMPOSER_HOME')) {
    putenv('COMPOSER_HOME=' . $_SERVER['HOME'] . '/.composer@VARIANT@');
}
if (false === getenv('COMPOSER_CACHE_DIR')) {
    putenv('COMPOSER_CACHE_DIR=' . $_SERVER['HOME'] . '/.composer/cache');
}

require_once 'phar://@LIBPATH@/@NAME@.phar/bin/composer';
