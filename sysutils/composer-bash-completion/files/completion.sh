# composer completion                                       -*- shell-script -*-

declare -p -F composer-completion-register 2>/dev/null || \
COMPOSER_COMPLETION_REGISTER="" \
COMPOSER_COMPLETION_DETECTION=false \
    source @LIBPATH@/composer-completion.bash && \
composer-completion-register "composer composer.phar"

# ex: filetype=sh
