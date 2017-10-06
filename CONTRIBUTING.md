# Contributing

For my convenience it would be really nice when you issue a pull request
to this repository. Do so by forking this repository, fixing the issue and
requesting a pull, for example via …

```console
git request-pull master https://github.com/YOU/MacPorts-PHP
```

But don't forget to try it at https://github.com/macports/ first!

## composer

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
`Portfile` in `/path/to/your/repository/clone/php/composer`. The version line
currently looks like:

    version                 1.5.2

Replace the outdated version with the new version, then save, close and commit
the file. Now you can upgrade the port, for example …
 
```console
    $ sudo port upgrade composer-php
```


