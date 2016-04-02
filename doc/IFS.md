# Interface `axy\fs\ifs\IFS`

The interface of an object that contains the list of file system functions.
This object is the namespace. His methods do not related with the common context.

Each method, usually, corresponds to one of [standard functions](http://php.net/manual/en/ref.filesystem.php).

Differences:

* [Exception](errors.md) instead WARNINGs. The methods that throw the exception marked in the column **exc**. If standard function returns only TRUE/FALSE depending of success then a method returns none (void).
* Several standard functions can work with any stream. The library methods work with files only.
* Several functions ([file_get_contents](http://php.net/manual/en/function.file-get-contents.php), for example) take the argument `$context`. Methods of the library do not take this argument.
* `use_include_path` does not supported.

|  Method |  Analogue | Exc | Comment |
|---------|-----------|------|-------------|
| `open($filename, $mode)`  | [fopen](http://php.net/fopen) | * | 1 |
| `isExists($filename)`     | [file_exists](http://php.net/file_exists) | | |
| `isFile($filename)`       | [is_file](http://php.net/is_file) | | |
| `isDir($filename)`        | [is_dir](http://php.net/is_dir) | | |
| `isLink($filename)`       | [is_link](http://php.net/is_link) | | |
| `isExecutable($filename)` | [is_executable](http://php.net/is_executable) | | |
| `isWritable($filename)`   | [is_writable](http://php.net/is_writable) | | |
| `isReadable($filename)`   | [is_readable](http://php.net/is_readable) | | |
| `write($filename, $data, $flags)`  | [file_put_contents](http://php.net/file_put_contents) | * | |
| `read($filename, $offset, $length)`  | [file_get_contents](http://php.net/file_get_contents) | * | |
| `getFileLines($filename, $flags)`  | [file](http://php.net/file) | * | |
| `copy($source, $destination)`  | [copy](http://php.net/copy) | * | |
| `rename($source, $destination)`| [rename](http://php.net/rename) | * | |
| `unlink($filename)`  | [unlink](http://php.net/unlink) | * | |
| `makeDir($dirname, $mode, $rec)` | [mkdir](http://php.net/mkdir) | * | |
| `removeDir($dirname)`  | [rmdir](http://php.net/rmdir) | * | |
| `changeMode($filename, $mode)`  | [chmod](http://php.net/chmod) | * | |
| `changeOwner($filename, $owner)`  | [chown](http://php.net/chown) | * | |
| `changeGroup($filename, $group)`  | [chgrp](http://php.net/chgrp) | * | |
| `getMode($filename, $mask)`  | [fileperms](http://php.net/fileperms) | * | 2 |
| `getOwner($filename)`  | [fileowner](http://php.net/fileowner) | * | |
| `getGroup($filename)`  | [filegroup](http://php.net/filegroup) | * | |
| `getType($filename)`   | [filetype](http://php.net/filetype) | * | |
| `getSize($filename)`   | [filesize](http://php.net/filesize) | * | |
| `getModificationTime($filename)` | [filemtime](http://php.net/filemtime) | * | |
| `getAccessTime($filename)`  | [fileatime](http://php.net/fileatime) | * | |
| `getInodeChangeTime($filename)`  | [filectime](http://php.net/filectime) | * | |
| `touch($filename, $time, $atime)`  | [touch](http://php.net/touch) | * | |
| `changeUMask($mask)`  | [umask($mask)](http://php.net/umask) | | |
| `getUMask()`  | [umask(null)](http://php.net/umask) | | |
| `getStat($filename)`  | [stat](http://php.net/stat) | * | 3 |
| `clearStatCache($crp, $fn)`  | [clearstatcache](http://php.net/clearstatcache) | | |
| `getRealPath($filename)` | [realpath](http://php.net/realpath) | | |
| `createHardLink($targetName, $linkName)` | [link](http://php.net/link) | * | |
| `createSymbolicLink($targetName, $linkName)`  | [symlink](http://php.net/symlink) | * | |
| `getLinkTarget($linkName)`  | [readlink](http://php.net/readlink) | * | |
| `changeLinkOwner($linkName, $owner)` | [lchown](http://php.net/lchown) | * | |
| `changeLinkGroup($linkName, $group)` | [lchgrp](http://php.net/lchgrp) | * | |
| `getLinkStat($linkName)` | [lstat](http://php.net/lstat) | * | 3 |
| `getFreeSpace()`  | [disk_free_space](http://php.net/disk_free_space) | * | |
| `getTotalSpace()` | [disk_total_space](http://php.net/disk_total_space) | * | |
| `createTempFile()`  | [tmpfile](http://php.net/tmpfile) | * | |
| `glob($pattern, $flags)`  | [glob](http://php.net/glob) | * | |
| `changeCurrentDirectory($directory)` | [chdir](http://php.net/chdir) | * | |
| `getCurrentDirectory()`  | [getcwd](http://php.net/getcwd) | * | |

* **1**: `open` returns an instance of [IFile](IFile)
* **2**: if the argument `$mask` defined for the method `getMode` then it used with the result: `getMode($fn, 0070)` - returns the group permissions.
* **3**: `getStat` and `getLinkStat` returns an instance of [Stat](Stat).

