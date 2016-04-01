<?php
/**
 * Abstraction of file system functions
 *
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 * @license https://raw.github.com/axypro/fs-ifs/master/LICENSE MIT
 * @link https://github.com/axypro/fs-ifs repository
 * @link https://packagist.org/packages/axy/fs-ifs composer package
 * @uses PHP5.4+
 */

namespace axy\fs\ifs;

if (!is_file(__DIR__.'/vendor/autoload.php')) {
    throw new \LogicException('Please: composer install');
}

require_once(__DIR__.'/vendor/autoload.php');
