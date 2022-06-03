# [macports-php](https://sjorek.github.io/macports-php/)

The repository is for missing PHP-related macports, like `composer` and
provides bash-completion for the latter.

## Installation

1. Install [macports](https://www.macports.org) - obviously this works
   for Mac OS or Darwin only - maybe also on some other BSD - would be
   nice to get some feedback?!
2. Clone this repository to your desired location and add it to macports'
   `sources.conf`.

### Quick-Installation Example

```console
# define your custom path to install the repository into
MACPORTS_PHP=${HOME}/Public/macports-php

# clone the repository
git clone https://github.com/sjorek/macports-php ${MACPORTS_PHP}
# add the working copy's path to /opt/local/etc/macports/sources.conf
sudo bash -c "sed -i'.bak-$( date +%s )~' -E 's#^(rsync|file)#${MACPORTS_PHP}\\n\\1#' /opt/local/etc/macports/sources.conf"
# update macports
sudo port -v selfupdate
# install composer version 1 and 2 with bash-completion for php versions 7.2 to 8.1
echo composer{1,2}-php{72,73,74,80,81} | xargs -n1 -J% echo % +bash_completion | xargs sudo port -v install
```

Look at [the contribution guidelines](CONTRIBUTING.md) if you want to
contribute. The development-setup differs slightly.

## List of (currently) provided macports

    composer1                      @1.10.26        php/composer1
    composer1-php                  @1.10.26        php/composer1
    composer1-php53                @1.10.26        php/composer1
    composer1-php54                @1.10.26        php/composer1
    composer1-php55                @1.10.26        php/composer1
    composer1-php56                @1.10.26        php/composer1
    composer1-php70                @1.10.26        php/composer1
    composer1-php71                @1.10.26        php/composer1
    composer1-php72                @1.10.26        php/composer1
    composer1-php73                @1.10.26        php/composer1
    composer1-php74                @1.10.26        php/composer1
    composer1-php80                @1.10.26        php/composer1
    composer1-php81                @1.10.26        php/composer1

    composer2                      @2.3.6          php/composer2
    composer2-php                  @2.3.6          php/composer2
    composer2-php72                @2.3.6          php/composer2
    composer2-php73                @2.3.6          php/composer2
    composer2-php80                @2.3.6          php/composer2
    composer2-php81                @2.3.6          php/composer2

    deployer                       @6.8.0          php/deployer
    deployer-php72                 @6.8.0          php/deployer
    deployer-php73                 @6.8.0          php/deployer
    deployer-php74                 @6.8.0          php/deployer
    deployer-php80                 @6.8.0          php/deployer

    composer-bash-completion       @1.0.1          sysutils/composer-bash-completion
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
