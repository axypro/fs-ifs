# Interface `axy\fs\ifs\IFile`

The built-in function `fopen($filename, $mode`) returns a file descriptor that used in functions such as `fread()`.

The library method `open()` returns an object that works with the opened file stream.

```php
use axy\fs\ifs\errors\FSError;

try {
    $file = $fs->open('a.txt', 'rt');
} catch (FSError $e) {
    echo 'Error';
    return false;
}

while (!$file->isEOF()) {
    echo $file->getLine().PHP_EOL;
}

$file->close();
```

These methods throw [exception](errors) instead WARNINGs.

|  Method |  Analogue |  Exc | Comment |
|---------|-----------|------|-------------|
| `close()` | [fclose](http://php.net/fclose) | * | |
| `isEOF()` | [feof](http://php.net/feof) | * | |
| `flush()` | [fflush](http://php.net/fflush) | * | |
| `write($data, $length)` | [fwrite](http://php.net/fwrite) | * | |
| `read($length)` | [fread](http://php.net/fread) | * | |
| `getChar()` | [fgetc](http://php.net/fgetc) | * | |
| `getLine($length)` | [fgets](http://php.net/fgets) | * | |
| `lock($operation, &$wb)` | [flock](http://php.net/flock) | * | |
| `getStat()` | [fstat](http://php.net/fstat) | * | [Stat](Stat) |
| `setPosition($offset, $whence)` | [fseek](http://php.net/fseek) | * | |
| `getPosition()` | [ftell](http://php.net/ftell) | * | |
| `rewindPosition()` | [rewind](http://php.net/rewind) | * | |
| `truncate($size)` | [truncate](http://php.net/truncate) | * | |
| `getMetaData()` | [stream_get_meta_data](http://php.net/stream_get_meta_data) | * | [MetaData](MetaData) |

