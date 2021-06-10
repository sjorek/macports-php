# [macports-php](https://sjorek.github.io/macports-php/)

The repository is for missing PHP-related macports, like `composer` and
provides bash-completion for the latter.

## Usage

1. Install [macports](https://www.macports.org) - obviously this works
   for Mac OS or Darwin only - maybe also on some other BSD - would be
   nice to get some feedback?!
2. Clone this repository to your desired location and add it to macports'
   `sources.conf`.

## Example - install it in your user's home-directory under Public:

```console
$ git clone https://github.com/sjorek/macports-php ${HOME}/Public/macports-php
$ cd ${HOME}/Public/macports-php
$ portindex
$ sudo bash -c "cat <<EOF >>/opt/local/etc/macports/sources.conf

file://${PWD} [nosync]

EOF"
```

## List of (currently) provided macports

    composer1                      @1.10.22        php/composer1
    composer1-php                  @1.10.22        php/composer1
    composer1-php53                @1.10.22        php/composer1
    composer1-php54                @1.10.22        php/composer1
    composer1-php55                @1.10.22        php/composer1
    composer1-php56                @1.10.22        php/composer1
    composer1-php70                @1.10.22        php/composer1
    composer1-php71                @1.10.22        php/composer1
    composer1-php72                @1.10.22        php/composer1
    composer1-php73                @1.10.22        php/composer1
    composer1-php74                @1.10.22        php/composer1
    composer1-php80                @1.10.22        php/composer1

    composer2                      @2.1.3          php/composer2
    composer2-php                  @2.1.3          php/composer2
    composer2-php53                @2.1.3          php/composer2
    composer2-php54                @2.1.3          php/composer2
    composer2-php55                @2.1.3          php/composer2
    composer2-php56                @2.1.3          php/composer2
    composer2-php70                @2.1.3          php/composer2
    composer2-php71                @2.1.3          php/composer2
    composer2-php72                @2.1.3          php/composer2
    composer2-php73                @2.1.3          php/composer2
    composer2-php80                @2.1.3          php/composer2

    deployer                       @6.8.0          php/deployer
    deployer-php72                 @6.8.0          php/deployer
    deployer-php73                 @6.8.0          php/deployer
    deployer-php74                 @6.8.0          php/deployer
    deployer-php80                 @6.8.0          php/deployer

    composer-bash-completion       @0.3.1          sysutils/composer-bash-completion
    composer_select                @1.0            sysutils/composer_select
    deployer_select                @1.0            sysutils/deployer_select
    phpunit-bash-completion        @0.0.12         sysutils/phpunit-bash-completion


## What if composer has been updated and this repository does not reflect this?

Look at [the contribution guidelines.](CONTRIBUTING.md)

## Links

### Status

[![Build Status](https://img.shields.io/travis/com/sjorek/macports-php.svg)](https://travis-ci.com/sjorek/macports-php)


### GitHub

[![GitHub Issues](https://img.shields.io/github/issues/sjorek/macports-php.svg)](https://github.com/sjorek/macports-php/issues)
[![GitHub Latest Tag](https://img.shields.io/github/tag/sjorek/macports-php.svg)](https://github.com/sjorek/macports-php/tags)
[![GitHub Total Downloads](https://img.shields.io/github/downloads/sjorek/macports-php/total.svg)](https://github.com/sjorek/macports-php/releases)


### Social

[![GitHub Forks](https://img.shields.io/github/forks/sjorek/macports-php.svg?style=social)](https://github.com/sjorek/macports-php/network)
[![GitHub Stars](https://img.shields.io/github/stars/sjorek/macports-php.svg?style=social)](https://github.com/sjorek/macports-php/stargazers)
[![GitHub Watchers](https://img.shields.io/github/watchers/sjorek/macports-php.svg?style=social)](https://github.com/sjorek/macports-php/watchers)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/sjorek/macports-php.svg?style=social)](https://twitter.com/intent/tweet?url=https%3A%2F%2Fsjorek.github.io%2Fmacports-php%2F)

## Want more?

There is a [virtual-environment composer-plugin](https://sjorek.github.io/composer-virtual-environment-plugin/)
complementing these composer ports. Are you preferring [homebrew](https://brew.sh)? The look at the alternative
[homebrew-php](https://sjorek.github.io/homebrew-php/) project.

Cheers!
