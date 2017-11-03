#!/bin/sh

# we use an individual home-dir, but a common cache-dir
COMPOSER_HOME=${COMPOSER_HOME:-${HOME}/.composer@VARIANT@} \
COMPOSER_CACHE_DIR=${COMPOSER_CACHE_DIR:-${HOME}/.composer/cache} \
    @PHP@ @LIBPATH@/composer.phar $@
