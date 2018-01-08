# `Factory`

Builds and returns an implementation of IFS.

## `getStandard(): IFS`

Returns the "standard" implementation ([axy/fs/real/FS](https://github.com/axypro/fs-real)).

If package `axy/fs-real` not installed thrown an exception.

## `build([$params]): IFS`

Builds implementation by parameters:

* `null` - returns the standard implementation
* a string - the class name of an implementation (must implement `IFS`)
* an object implements `IFS` - returns it  
