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

    composer                       @1.10.19        php/composer
    composer-php                   @1.10.19        php/composer
    composer-php53                 @1.10.19        php/composer
    composer-php54                 @1.10.19        php/composer
    composer-php55                 @1.10.19        php/composer
    composer-php56                 @1.10.19        php/composer
    composer-php70                 @1.10.19        php/composer
    composer-php71                 @1.10.19        php/composer
    composer-php72                 @1.10.19        php/composer
    composer-php73                 @1.10.19        php/composer
    composer-php74                 @1.10.19        php/composer
    composer2                      @2.0.8          php/composer2
    composer2-php                  @2.0.8          php/composer2
    composer2-php53                @2.0.8          php/composer2
    composer2-php54                @2.0.8          php/composer2
    composer2-php55                @2.0.8          php/composer2
    composer2-php56                @2.0.8          php/composer2
    composer2-php70                @2.0.8          php/composer2
    composer2-php71                @2.0.8          php/composer2
    composer2-php72                @2.0.8          php/composer2
    composer2-php73                @2.0.8          php/composer2
    composer2-php74                @2.0.8          php/composer2
    composer_select                @1.0_6          sysutils/composer_select
    composer-bash-completion       @0.1.9_9        sysutils/composer-bash-completion
    deployer                       @6.7.3_0        php/deployer
    deployer-php72                 @6.7.3_0        php/deployer
    deployer-php73                 @6.7.3_0        php/deployer
    deployer-php74                 @6.7.3_0        php/deployer
    deployer_select                @1.0            sysutils/deployer_select
    phpunit-bash-completion        @0.0.12_7       sysutils/phpunit-bash-completion
    php                            @7.4            lang/php
    php74                          @7.4.12         lang/php
    php74-apache2handler           @7.4.12         lang/php
    php74-cgi                      @7.4.12         lang/php
    php74-fpm                      @7.4.12         lang/php
    php74-calendar                 @7.4.12         lang/php
    php74-curl                     @7.4.12         lang/php
    php74-dba                      @7.4.12         lang/php
    php74-enchant                  @7.4.12         lang/php
    php74-exif                     @7.4.12         lang/php
    php74-ftp                      @7.4.12         lang/php
    php74-gd                       @7.4.12         lang/php
    php74-gettext                  @7.4.12         lang/php
    php74-gmp                      @7.4.12         lang/php
    php74-iconv                    @7.4.12         lang/php
    php74-imap                     @7.4.12         lang/php
    php74-intl                     @7.4.12         lang/php
    php74-ipc                      @7.4.12         lang/php
    php74-ldap                     @7.4.12         lang/php
    php74-mbstring                 @7.4.12         lang/php
    php74-mysql                    @7.4.12         lang/php
    php74-odbc                     @7.4.12         lang/php
    php74-opcache                  @7.4.12         lang/php
    php74-openssl                  @7.4.12         lang/php
    php74-oracle                   @7.4.12         lang/php
    php74-pcntl                    @7.4.12         lang/php
    php74-posix                    @7.4.12         lang/php
    php74-postgresql               @7.4.12         lang/php
    php74-pspell                   @7.4.12         lang/php
    php74-snmp                     @7.4.12         lang/php
    php74-soap                     @7.4.12         lang/php
    php74-sockets                  @7.4.12         lang/php
    php74-sodium                   @7.4.12         lang/php
    php74-sqlite                   @7.4.12         lang/php
    php74-tidy                     @7.4.12         lang/php
    php74-xmlrpc                   @7.4.12         lang/php
    php74-xsl                      @7.4.12         lang/php
    php73                          @7.3.24         lang/php
    php73-apache2handler           @7.3.24         lang/php
    php73-cgi                      @7.3.24         lang/php
    php73-fpm                      @7.3.24         lang/php
    php73-calendar                 @7.3.24         lang/php
    php73-curl                     @7.3.24         lang/php
    php73-dba                      @7.3.24         lang/php
    php73-enchant                  @7.3.24         lang/php
    php73-exif                     @7.3.24         lang/php
    php73-ftp                      @7.3.24         lang/php
    php73-gd                       @7.3.24         lang/php
    php73-gettext                  @7.3.24         lang/php
    php73-gmp                      @7.3.24         lang/php
    php73-iconv                    @7.3.24         lang/php
    php73-imap                     @7.3.24         lang/php
    php73-intl                     @7.3.24         lang/php
    php73-ipc                      @7.3.24         lang/php
    php73-ldap                     @7.3.24         lang/php
    php73-mbstring                 @7.3.24         lang/php
    php73-mysql                    @7.3.24         lang/php
    php73-odbc                     @7.3.24         lang/php
    php73-opcache                  @7.3.24         lang/php
    php73-openssl                  @7.3.24         lang/php
    php73-oracle                   @7.3.24         lang/php
    php73-pcntl                    @7.3.24         lang/php
    php73-posix                    @7.3.24         lang/php
    php73-postgresql               @7.3.24         lang/php
    php73-pspell                   @7.3.24         lang/php
    php73-snmp                     @7.3.24         lang/php
    php73-soap                     @7.3.24         lang/php
    php73-sockets                  @7.3.24         lang/php
    php73-sodium                   @7.3.24         lang/php
    php73-sqlite                   @7.3.24         lang/php
    php73-tidy                     @7.3.24         lang/php
    php73-wddx                     @7.3.24         lang/php
    php73-xmlrpc                   @7.3.24         lang/php
    php73-xsl                      @7.3.24         lang/php
    php72                          @7.2.34         lang/php
    php72-apache2handler           @7.2.34         lang/php
    php72-cgi                      @7.2.34         lang/php
    php72-fpm                      @7.2.34         lang/php
    php72-calendar                 @7.2.34         lang/php
    php72-curl                     @7.2.34         lang/php
    php72-dba                      @7.2.34         lang/php
    php72-enchant                  @7.2.34         lang/php
    php72-exif                     @7.2.34         lang/php
    php72-ftp                      @7.2.34         lang/php
    php72-gd                       @7.2.34         lang/php
    php72-gettext                  @7.2.34         lang/php
    php72-gmp                      @7.2.34         lang/php
    php72-iconv                    @7.2.34         lang/php
    php72-imap                     @7.2.34         lang/php
    php72-intl                     @7.2.34         lang/php
    php72-ipc                      @7.2.34         lang/php
    php72-ldap                     @7.2.34         lang/php
    php72-mbstring                 @7.2.34         lang/php
    php72-mysql                    @7.2.34         lang/php
    php72-odbc                     @7.2.34         lang/php
    php72-opcache                  @7.2.34         lang/php
    php72-openssl                  @7.2.34         lang/php
    php72-oracle                   @7.2.34         lang/php
    php72-pcntl                    @7.2.34         lang/php
    php72-posix                    @7.2.34         lang/php
    php72-postgresql               @7.2.34         lang/php
    php72-pspell                   @7.2.34         lang/php
    php72-snmp                     @7.2.34         lang/php
    php72-soap                     @7.2.34         lang/php
    php72-sockets                  @7.2.34         lang/php
    php72-sodium                   @7.2.34         lang/php
    php72-sqlite                   @7.2.34         lang/php
    php72-tidy                     @7.2.34         lang/php
    php72-wddx                     @7.2.34         lang/php
    php72-xmlrpc                   @7.2.34         lang/php
    php72-xsl                      @7.2.34         lang/php
    php71                          @7.1.33         lang/php
    php71-apache2handler           @7.1.33         lang/php
    php71-cgi                      @7.1.33         lang/php
    php71-fpm                      @7.1.33         lang/php
    php71-calendar                 @7.1.33         lang/php
    php71-curl                     @7.1.33         lang/php
    php71-dba                      @7.1.33         lang/php
    php71-enchant                  @7.1.33         lang/php
    php71-exif                     @7.1.33         lang/php
    php71-ftp                      @7.1.33         lang/php
    php71-gd                       @7.1.33         lang/php
    php71-gettext                  @7.1.33         lang/php
    php71-gmp                      @7.1.33         lang/php
    php71-iconv                    @7.1.33         lang/php
    php71-imap                     @7.1.33         lang/php
    php71-intl                     @7.1.33         lang/php
    php71-ipc                      @7.1.33         lang/php
    php71-ldap                     @7.1.33         lang/php
    php71-mbstring                 @7.1.33         lang/php
    php71-mcrypt                   @7.1.33         lang/php
    php71-mysql                    @7.1.33         lang/php
    php71-odbc                     @7.1.33         lang/php
    php71-opcache                  @7.1.33         lang/php
    php71-openssl                  @7.1.33         lang/php
    php71-oracle                   @7.1.33         lang/php
    php71-pcntl                    @7.1.33         lang/php
    php71-posix                    @7.1.33         lang/php
    php71-postgresql               @7.1.33         lang/php
    php71-pspell                   @7.1.33         lang/php
    php71-snmp                     @7.1.33         lang/php
    php71-soap                     @7.1.33         lang/php
    php71-sockets                  @7.1.33         lang/php
    php71-sqlite                   @7.1.33         lang/php
    php71-tidy                     @7.1.33         lang/php
    php71-wddx                     @7.1.33         lang/php
    php71-xmlrpc                   @7.1.33         lang/php
    php71-xsl                      @7.1.33         lang/php
    php70                          @7.0.33         lang/php
    php70-apache2handler           @7.0.33         lang/php
    php70-cgi                      @7.0.33         lang/php
    php70-fpm                      @7.0.33         lang/php
    php70-calendar                 @7.0.33         lang/php
    php70-curl                     @7.0.33         lang/php
    php70-dba                      @7.0.33         lang/php
    php70-enchant                  @7.0.33         lang/php
    php70-exif                     @7.0.33         lang/php
    php70-ftp                      @7.0.33         lang/php
    php70-gd                       @7.0.33         lang/php
    php70-gettext                  @7.0.33         lang/php
    php70-gmp                      @7.0.33         lang/php
    php70-iconv                    @7.0.33         lang/php
    php70-imap                     @7.0.33         lang/php
    php70-intl                     @7.0.33         lang/php
    php70-ipc                      @7.0.33         lang/php
    php70-ldap                     @7.0.33         lang/php
    php70-mbstring                 @7.0.33         lang/php
    php70-mcrypt                   @7.0.33         lang/php
    php70-mysql                    @7.0.33         lang/php
    php70-odbc                     @7.0.33         lang/php
    php70-opcache                  @7.0.33         lang/php
    php70-openssl                  @7.0.33         lang/php
    php70-oracle                   @7.0.33         lang/php
    php70-pcntl                    @7.0.33         lang/php
    php70-posix                    @7.0.33         lang/php
    php70-postgresql               @7.0.33         lang/php
    php70-pspell                   @7.0.33         lang/php
    php70-snmp                     @7.0.33         lang/php
    php70-soap                     @7.0.33         lang/php
    php70-sockets                  @7.0.33         lang/php
    php70-sqlite                   @7.0.33         lang/php
    php70-tidy                     @7.0.33         lang/php
    php70-wddx                     @7.0.33         lang/php
    php70-xmlrpc                   @7.0.33         lang/php
    php70-xsl                      @7.0.33         lang/php
    php56                          @5.6.40         lang/php
    php56-apache2handler           @5.6.40         lang/php
    php56-cgi                      @5.6.40         lang/php
    php56-fpm                      @5.6.40         lang/php
    php56-calendar                 @5.6.40         lang/php
    php56-curl                     @5.6.40         lang/php
    php56-dba                      @5.6.40         lang/php
    php56-enchant                  @5.6.40         lang/php
    php56-exif                     @5.6.40         lang/php
    php56-ftp                      @5.6.40         lang/php
    php56-gd                       @5.6.40         lang/php
    php56-gettext                  @5.6.40         lang/php
    php56-gmp                      @5.6.40         lang/php
    php56-iconv                    @5.6.40         lang/php
    php56-imap                     @5.6.40         lang/php
    php56-intl                     @5.6.40         lang/php
    php56-ipc                      @5.6.40         lang/php
    php56-ldap                     @5.6.40         lang/php
    php56-mbstring                 @5.6.40         lang/php
    php56-mcrypt                   @5.6.40         lang/php
    php56-mssql                    @5.6.40         lang/php
    php56-mysql                    @5.6.40         lang/php
    php56-odbc                     @5.6.40         lang/php
    php56-opcache                  @5.6.40         lang/php
    php56-openssl                  @5.6.40         lang/php
    php56-oracle                   @5.6.40         lang/php
    php56-pcntl                    @5.6.40         lang/php
    php56-posix                    @5.6.40         lang/php
    php56-postgresql               @5.6.40         lang/php
    php56-pspell                   @5.6.40         lang/php
    php56-snmp                     @5.6.40         lang/php
    php56-soap                     @5.6.40         lang/php
    php56-sockets                  @5.6.40         lang/php
    php56-sqlite                   @5.6.40         lang/php
    php56-tidy                     @5.6.40         lang/php
    php56-wddx                     @5.6.40         lang/php
    php56-xmlrpc                   @5.6.40         lang/php
    php56-xsl                      @5.6.40         lang/php
    php55                          @5.5.38         lang/php
    php55-apache2handler           @5.5.38         lang/php
    php55-cgi                      @5.5.38         lang/php
    php55-fpm                      @5.5.38         lang/php
    php55-calendar                 @5.5.38         lang/php
    php55-curl                     @5.5.38         lang/php
    php55-dba                      @5.5.38         lang/php
    php55-enchant                  @5.5.38         lang/php
    php55-exif                     @5.5.38         lang/php
    php55-ftp                      @5.5.38         lang/php
    php55-gd                       @5.5.38         lang/php
    php55-gettext                  @5.5.38         lang/php
    php55-gmp                      @5.5.38         lang/php
    php55-iconv                    @5.5.38         lang/php
    php55-imap                     @5.5.38         lang/php
    php55-intl                     @5.5.38         lang/php
    php55-ipc                      @5.5.38         lang/php
    php55-ldap                     @5.5.38         lang/php
    php55-mbstring                 @5.5.38         lang/php
    php55-mcrypt                   @5.5.38         lang/php
    php55-mssql                    @5.5.38         lang/php
    php55-mysql                    @5.5.38         lang/php
    php55-odbc                     @5.5.38         lang/php
    php55-opcache                  @5.5.38         lang/php
    php55-openssl                  @5.5.38         lang/php
    php55-oracle                   @5.5.38         lang/php
    php55-pcntl                    @5.5.38         lang/php
    php55-posix                    @5.5.38         lang/php
    php55-postgresql               @5.5.38         lang/php
    php55-pspell                   @5.5.38         lang/php
    php55-snmp                     @5.5.38         lang/php
    php55-soap                     @5.5.38         lang/php
    php55-sockets                  @5.5.38         lang/php
    php55-sqlite                   @5.5.38         lang/php
    php55-tidy                     @5.5.38         lang/php
    php55-wddx                     @5.5.38         lang/php
    php55-xmlrpc                   @5.5.38         lang/php
    php55-xsl                      @5.5.38         lang/php
    php54                          @5.4.45         lang/php
    php54-apache2handler           @5.4.45         lang/php
    php54-cgi                      @5.4.45         lang/php
    php54-fpm                      @5.4.45         lang/php
    php54-calendar                 @5.4.45         lang/php
    php54-curl                     @5.4.45         lang/php
    php54-dba                      @5.4.45         lang/php
    php54-enchant                  @5.4.45         lang/php
    php54-exif                     @5.4.45         lang/php
    php54-ftp                      @5.4.45         lang/php
    php54-gd                       @5.4.45         lang/php
    php54-gettext                  @5.4.45         lang/php
    php54-gmp                      @5.4.45         lang/php
    php54-iconv                    @5.4.45         lang/php
    php54-imap                     @5.4.45         lang/php
    php54-intl                     @5.4.45         lang/php
    php54-ipc                      @5.4.45         lang/php
    php54-ldap                     @5.4.45         lang/php
    php54-mbstring                 @5.4.45         lang/php
    php54-mcrypt                   @5.4.45         lang/php
    php54-mssql                    @5.4.45         lang/php
    php54-mysql                    @5.4.45         lang/php
    php54-odbc                     @5.4.45         lang/php
    php54-openssl                  @5.4.45         lang/php
    php54-oracle                   @5.4.45         lang/php
    php54-pcntl                    @5.4.45         lang/php
    php54-posix                    @5.4.45         lang/php
    php54-postgresql               @5.4.45         lang/php
    php54-pspell                   @5.4.45         lang/php
    php54-snmp                     @5.4.45         lang/php
    php54-soap                     @5.4.45         lang/php
    php54-sockets                  @5.4.45         lang/php
    php54-sqlite                   @5.4.45         lang/php
    php54-tidy                     @5.4.45         lang/php
    php54-wddx                     @5.4.45         lang/php
    php54-xmlrpc                   @5.4.45         lang/php
    php54-xsl                      @5.4.45         lang/php
    php53                          @5.3.29         lang/php
    php53-apache2handler           @5.3.29         lang/php
    php53-cgi                      @5.3.29         lang/php
    php53-fpm                      @5.3.29         lang/php
    php53-calendar                 @5.3.29         lang/php
    php53-curl                     @5.3.29         lang/php
    php53-dba                      @5.3.29         lang/php
    php53-enchant                  @5.3.29         lang/php
    php53-exif                     @5.3.29         lang/php
    php53-ftp                      @5.3.29         lang/php
    php53-gd                       @5.3.29         lang/php
    php53-gettext                  @5.3.29         lang/php
    php53-gmp                      @5.3.29         lang/php
    php53-iconv                    @5.3.29         lang/php
    php53-imap                     @5.3.29         lang/php
    php53-intl                     @5.3.29         lang/php
    php53-ipc                      @5.3.29         lang/php
    php53-ldap                     @5.3.29         lang/php
    php53-mbstring                 @5.3.29         lang/php
    php53-mcrypt                   @5.3.29         lang/php
    php53-mssql                    @5.3.29         lang/php
    php53-mysql                    @5.3.29         lang/php
    php53-odbc                     @5.3.29         lang/php
    php53-openssl                  @5.3.29         lang/php
    php53-oracle                   @5.3.29         lang/php
    php53-pcntl                    @5.3.29         lang/php
    php53-posix                    @5.3.29         lang/php
    php53-postgresql               @5.3.29         lang/php
    php53-pspell                   @5.3.29         lang/php
    php53-snmp                     @5.3.29         lang/php
    php53-soap                     @5.3.29         lang/php
    php53-sockets                  @5.3.29         lang/php
    php53-sqlite                   @5.3.29         lang/php
    php53-tidy                     @5.3.29         lang/php
    php53-wddx                     @5.3.29         lang/php
    php53-xmlrpc                   @5.3.29         lang/php
    php53-xsl                      @5.3.29         lang/php
    php52                          @5.2.17         lang/php
    php52-apache2handler           @5.2.17         lang/php
    php52-cgi                      @5.2.17         lang/php
    php52-calendar                 @5.2.17         lang/php
    php52-curl                     @5.2.17         lang/php
    php52-dba                      @5.2.17         lang/php
    php52-exif                     @5.2.17         lang/php
    php52-ftp                      @5.2.17         lang/php
    php52-gd                       @5.2.17         lang/php
    php52-gettext                  @5.2.17         lang/php
    php52-gmp                      @5.2.17         lang/php
    php52-iconv                    @5.2.17         lang/php
    php52-imap                     @5.2.17         lang/php
    php52-ipc                      @5.2.17         lang/php
    php52-ldap                     @5.2.17         lang/php
    php52-mbstring                 @5.2.17         lang/php
    php52-mcrypt                   @5.2.17         lang/php
    php52-mssql                    @5.2.17         lang/php
    php52-mysql                    @5.2.17         lang/php
    php52-odbc                     @5.2.17         lang/php
    php52-openssl                  @5.2.17         lang/php
    php52-oracle                   @5.2.17         lang/php
    php52-pcntl                    @5.2.17         lang/php
    php52-posix                    @5.2.17         lang/php
    php52-postgresql               @5.2.17         lang/php
    php52-pspell                   @5.2.17         lang/php
    php52-snmp                     @5.2.17         lang/php
    php52-soap                     @5.2.17         lang/php
    php52-sockets                  @5.2.17         lang/php
    php52-tidy                     @5.2.17         lang/php
    php52-wddx                     @5.2.17         lang/php
    php52-xmlrpc                   @5.2.17         lang/php
    php52-xsl                      @5.2.17         lang/php

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
