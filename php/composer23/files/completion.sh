# @NAME@ completion                                         -*- shell-script -*-

COMPOSER_COMPLETION_PHP=@PHP@
COMPOSER_COMPLETION_REGISTER=""
COMPOSER_COMPLETION_DETECTION=false

source @LIBPATH@/composer-completion.bash && \
    composer-completion-register @NAME@

# ex: filetype=sh
