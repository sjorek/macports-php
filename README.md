# [MacPorts-PHP](https://sjorek.github.io/MacPorts-PHP/)

The repository is for missing PHP-related MacPorts, like `composer` and
provides bash-completion for the latter.

## Usage

1. Install [MacPorts](https://www.macports.org) - obviously this works
   for Mac OS or Darwin only - maybe also on some other BSD - would be
   nice to get some feedback?!
2. Clone this repository to your desired location and add it to macports'
   `sources.conf`.

## Example - install it in your user's home-directory under Documents:

```console
$ cd ${HOME}/Documents
$ git clone https://github.com/sjorek/MacPorts-PHP
$ sudo bash -c "cat <<EOF >>/opt/local/etc/macports/sources.conf

file:///Users/${USER}/Documents/MacPorts-PHP [nosync]

EOF"
```

## List of (currently) provided MacPorts

    composer                       @1.5.2          php/composer
    composer-php                   @1.5.2          php/composer
    composer-php53                 @1.5.2          php/composer
    composer-php54                 @1.5.2          php/composer
    composer-php55                 @1.5.2          php/composer
    composer-php56                 @1.5.2          php/composer
    composer-php70                 @1.5.2          php/composer
    composer-php71                 @1.5.2          php/composer
    composer-php72                 @1.5.2          php/composer
    composer_select                @1.0            sysutils/composer_select
    composer-bash-completion       @0.0.12         sysutils/composer-bash-completion
    phpunit-bash-completion        @0.0.2          sysutils/phpunit-bash-completion

## What if composer has been updated and this repository does not reflect this?

Look at [the contribution guidelines.](CONTRIBUTING.md)

## Want more?

There is a [composer-plugin](https://sjorek.github.io/composer-virtual-environment-plugin/)
complementing these composer ports.

Cheers!

