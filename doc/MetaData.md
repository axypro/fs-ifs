# Class `axy\fs\ifs\MetaData`

The method `$file->getMetaData()` returns the information about an opened file stream. This information similar to [stream_get_meta_data](http://php.net/stream_get_meta_data).
Built-in function returns an associative array.
The library method returns an instance of the `MetaData` class.
It contains follows public properties.

* `filename` - the alias of `uri`
* `timed_out`
* `blocked`
* `eof`
* `unread_bytes`
* `stream_type`
* `mode`
* `seekable`
* `uri`

