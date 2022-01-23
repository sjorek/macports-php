# Contributing

For my convenience it would be really nice when you issue a pull request
to this repository. Do so by forking this repository, fixing the issue and
requesting a pull, for example via …

```console
$ git request-pull master https://github.com/YOU/macports-php
```

But don't forget to try it at https://github.com/macports/ first!

## Development Setup

The development setup differs from regular setup a little bit.
First of all, fork the macports-php repository on github.

Install your fork:

```console
# define your custom path to install the repository into
MACPORTS_PHP=${HOME}/Public/macports-php
# define your github username
GITHUB_USER=…

# clone the repository
git clone git@github.com:${GITHUB_USER}/macports-php ${MACPORTS_PHP}
# add the working copy's path to /opt/local/etc/macports/sources.conf
sudo bash -c "sed -i'.bak-$( date +%s )~' -E 's#^(rsync|file)#${MACPORTS_PHP} [nosync]\\n\\1#' /opt/local/etc/macports/sources.conf"
# change directory to working copy's path
cd $MACPORTS_PHP
# create the macport-repository index
portindex
# update macports
sudo port -v selfupdate
# install composer version 1 and 2 with bash-completion for php versions 7.2 to 8.1
echo composer{1,2}-php{72,73,74,80,81} | xargs -n1 -J% echo % +bash_completion | xargs sudo port -v install

# … change something in macports-php sources and don't forget to raise either
# the portfile's version or its revision. Test your changes locally …

portindex
sudo port -v selfupdate
sudo port -v upgrade outdated
```

If all local tests are successful, commit and push the changes and create
a pull-request on github.

## How to update the composer, if it's an outdated version

Check if the provided `composer` version differs from the released version by
issuing a `livecheck`.

Either it says …

```console
$ port -v livecheck composer
composer seems to be up to date
```

… or it says something like …

```console
$ port -v livecheck composer
composer seems to have been updated (port version: 1.5.1, new version: 1.5.2)
```

In the latter case it's usually enough to raise the version in the provided
`Portfile` in `/path/to/your/repository/clone/php/composer[1|2]`. The version
line now looks like:

    version                 1.5.2

Replace the outdated version with the new version, then save, close, test and
commit the file. To test your upgrade, you can upgrade the port, for example …

```console
portindex
sudo port upgrade composer-php
```
