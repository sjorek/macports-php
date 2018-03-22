# phpunit completion                                        -*- shell-script -*-

declare -p -F phpunit-completion-register 2>/dev/null || \
PHPUNIT_COMPLETION_REGISTER="" \
PHPUNIT_COMPLETION_DETECTION=false \
    source @LIBPATH@/phpunit-completion.bash && \
phpunit-completion-register "phpunit phpunit.phar"

# ex: filetype=sh
