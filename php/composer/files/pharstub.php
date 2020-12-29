#!/usr/bin/env php
<?php

$argv = array_slice($_SERVER['argv'], 1);

if (empty($argv)) {
    die('Missing arguments');
}

$option = array_shift($argv);

switch($option) {
    case '--shebang':
        echo call_user_func_array(Stub::class . '::asProxy', $argv)->getShebang();
        break;
    default:
        array_unshift($argv, $option);
    case '--content':
        echo call_user_func_array(Stub::class . '::asProxy', $argv)->getContent();
        break;
}

exit();

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under the terms
 * of the MIT License (MIT). For the full copyright and license information,
 * please read the LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Experimental implementation of Phar archive internals
 *
 * @author Oliver Hader <oliver.hader@typo3.org>
 * @author Stephan Jorek <stephan.jorek@gmail.com>
 */
class Stub
{
    const MAPPED_ALIAS_PATTERN = '@Phar::mapPhar\(([^)]+)\);?@';
    const SCRIPT_OPEN_PATTERN = '/^[^<]*<\?php(?:\r\n|\r|\n)?/';
    const HALT_COMPILER_PATTERN = '/__HALT_COMPILER\(\); */';
    const SCRIPT_CLOSE_PATTERN = '/\?>(?:\r\n|\r|\n)?$/';

    /**
     * @return self
     */
    public static function asProxy($file, $dist = null, $shebang = '', $open = '', $close = '?>')
    {
        $proxy = self::fromFile($file);

        $code = $proxy->getCode();

        if ('' !== $open) {
            // single occurrence
            $code = preg_replace(self::SCRIPT_OPEN_PATTERN, "$0" . $open, $code, 1);
        }

        // multiple occurrences
        $code = preg_replace(
            [
                '/' . preg_quote('phar://' . $proxy->getMappedAlias(), '/') . '/',
                self::MAPPED_ALIAS_PATTERN,
                self::HALT_COMPILER_PATTERN,
            ],
            [
                'phar://' . $dist ?: $file,
                '', // '/* $0 */',
                '', // '/* $0 */',
            ],
            $code
        );

        // single occurrence
        $proxy->code = preg_replace(self::SCRIPT_CLOSE_PATTERN, $close, $code, 1);

        if ('' !== $shebang) {
            $proxy->shebang = ltrim($shebang, '#!');
        }

        return $proxy;
    }

    /**
     * @param string $content
     * @return self
     */
    public static function fromFile($file)
    {
        return self::fromPhar(new \Phar($file));
    }

    /**
     * @param string $content
     * @return self
     */
    public static function fromPhar(\Phar $phar)
    {
        return self::fromContent($phar->getStub());
    }

    /**
     * @param string $content
     * @return self
     */
    public static function fromContent($content)
    {
        $stub = new Stub();

        $matches = [];
        if (
            false !== stripos($content, 'Phar::mapPhar(')
            && preg_match(self::MAPPED_ALIAS_PATTERN, $content, $matches)
        ) {
            // remove spaces, single & double quotes
            // @todo `'my' . 'alias' . '.phar'` is not evaluated here
            $stub->mappedAlias = trim($matches[1], ' \'"');
        }

        if (0 === strpos($content, '#!')) {
            list($shebang, $code) = explode("\n", $content, 2);
            $stub->shebang = ltrim($shebang, '#!');
            $stub->code = $code;
        } else {
            $stub->code = $content;
        }

        return $stub;
    }

    /**
     * @var string
     */
    private $shebang = '';

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $mappedAlias = '';

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->shebang ? ('#!' . $this->shebang . "\n" . $this->code) : $this->code;
    }

    /**
     * @return string
     */
    public function getMappedAlias()
    {
        return $this->mappedAlias;
    }

    /**
     * @return string
     */
    public function getShebang()
    {
        return $this->shebang;
    }
}