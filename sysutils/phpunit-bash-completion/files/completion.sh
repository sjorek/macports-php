# phpunit completion                                       -*- shell-script -*-

PHPUNIT_COMPLETION_PHP=${PHPUNIT_COMPLETION_PHP:-php}
PHPUNIT_COMPLETION_REGISTER=""
PHPUNIT_COMPLETION_DETECTION=false

source @LIBPATH@/phpunit-completion.bash && \
    phpunit-completion-register "phpunit phpunit.phar"

# ex: filetype=sh
