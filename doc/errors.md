# Error Handle

The built-in functions for error, usually, returns `FALSE` and prints WARNING.
The library in these cases throws an exception.

Specific exception classes dependent of an implementation.
These must inherit of `axy\fs\ifs\errors\FSError`.

The only method of an exception object is `getTargetFileName()`.
It returns the name of a file due to which the error occurred (if it possible).

Exception messages dependent of an implementation.
For implementation which work via built-in functions, likely, the exception message will be a warning message.

