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

    ddev                           @0.15.1_2       devel/ddev
    composer                       @1.6.4_0        php/composer
    composer-php                   @1.6.4_0        php/composer
    composer-php53                 @1.6.4_0        php/composer
    composer-php54                 @1.6.4_0        php/composer
    composer-php55                 @1.6.4_0        php/composer
    composer-php56                 @1.6.4_0        php/composer
    composer-php70                 @1.6.4_0        php/composer
    composer-php71                 @1.6.4_0        php/composer
    composer-php72                 @1.6.4_0        php/composer
    deployer                       @6.1.0_1        php/deployer
    deployer-php70                 @6.1.0_1        php/deployer
    deployer-php71                 @6.1.0_1        php/deployer
    deployer-php72                 @6.1.0_1        php/deployer
    composer_select                @1.0_6          sysutils/composer_select
    deployer_select                @1.0            sysutils/deployer_select
    composer-bash-completion       @0.1.9_9        sysutils/composer-bash-completion
    phpunit-bash-completion        @0.0.12_7       sysutils/phpunit-bash-completion

## What if composer has been updated and this repository does not reflect this?

Look at [the contribution guidelines.](CONTRIBUTING.md)

## Links

### Status

[![Build Status](https://img.shields.io/travis/sjorek/macports-php.svg)](https://travis-ci.org/sjorek/macports-php)


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
complementing these composer ports.

Cheers!
