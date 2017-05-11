# axy\fs\ifs

Abstraction of file system functions (PHP).

[![Latest Stable Version](https://img.shields.io/packagist/v/axy/fs-ifs.svg?style=flat-square)](https://packagist.org/packages/axy/fs-ifs)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.4-8892BF.svg?style=flat-square)](https://php.net/)
[![Build Status](https://img.shields.io/travis/axypro/fs-ifs/master.svg?style=flat-square)](https://travis-ci.org/axypro/fs-ifs)
[![Coverage Status](https://coveralls.io/repos/axypro/fs-ifs/badge.svg?branch=master&service=github)](https://coveralls.io/github/axypro/fs-ifs?branch=master)
[![License](https://poser.pugx.org/axy/fs-ifs/license)](LICENSE)

* The library does not require any dependencies.
* Tested on PHP 5.4+, PHP 7, HHVM (on Linux), PHP 5.5 (on Windows).
* Install: `composer require axy/fs-ifs`.
* License: [MIT](LICENSE).

## Documentation

[Documentation in Russian](https://github.com/axypro/fs-ifs/wiki).

The library reproduces [built-in file system functions](http://php.net/manual/en/ref.filesystem.php).

Differences:

* The application code to access files not via global functions, and via an object with a particular interface. This object is easily replaced by another implementation. Can use a mock for tests (it does not work with real file system, but with memory).
* [Exceptions](doc/errors.md) instead of WARNINGs.
* Separate class for [work with opened file](doc/IFile.md).
* Several results are structured as objects ([Stat](Stat.md), [MetaData](MetaData.md)) instead associative arrays. It improves the autocomplete.
* Method names are better structured.
* Specific implementations can implement additional features. Log, an isolated directory and etc.

## Implementations

This package defines only interfaces.
Specific implementations are located in other packages.
For example, work with real FS is [axy/fs-real](https://github.com/axypro/fs-real).

## Classes and interfaces

* [IFS](doc/IFS.md) - functions for work with FS.
* [IFile](doc/IFile.md) - opened file.
* [Stat](doc/Stat.md) - result of `stat()`.
* [MetaData](doc/MetaData.md) - meta data of an opened file.
* [Exceptions](doc/errors.md).
* [Factory](doc/Factory.md).
