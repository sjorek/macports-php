# composer completion                                       -*- shell-script -*-

COMPOSER_COMPLETION_PHP=${COMPOSER_COMPLETION_PHP:-php}
COMPOSER_COMPLETION_REGISTER=""
COMPOSER_COMPLETION_DETECTION=false

source @LIBPATH@/composer-completion.bash && \
    composer-completion-register "composer composer.phar"

# ex: filetype=sh
