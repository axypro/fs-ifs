<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs;

interface IFS
{
    const FILE_APPEND = FILE_APPEND;
    const LOCK_EX = LOCK_EX;
    const FILE_IGNORE_NEW_LINES = FILE_IGNORE_NEW_LINES;
    const FILE_SKIP_EMPTY_LINES = FILE_SKIP_EMPTY_LINES;
    const GLOB_MARK = GLOB_MARK;
    const GLOB_NOSORT = GLOB_NOSORT;
    const GLOB_NOCHECK = GLOB_NOCHECK;
    const GLOB_NOESCAPE = GLOB_NOESCAPE;
    const GLOB_BRACE = GLOB_BRACE;
    const GLOB_ONLYDIR = GLOB_ONLYDIR;
    const GLOB_ERR = GLOB_ERR;

    /**
     * Opens a file
     *
     * @param string $filename
     * @param string $mode
     * @return \axy\fs\ifs\IFile
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function open($filename, $mode);

    /**
     * Checks if a file or directory exists
     *
     * @param string $filename
     * @return bool
     */
    public function isExists($filename);

    /**
     * Checks if the filename is a regular file
     *
     * @param string $filename
     * @return bool
     */
    public function isFile($filename);

    /**
     * Checks if the filename is a directory
     *
     * @param string $filename
     * @return bool
     */
    public function isDir($filename);

    /**
     * Checks if the filename is a symbolic link
     *
     * @param string $filename
     * @return bool
     */
    public function isLink($filename);

    /**
     * Checks if the file is executable
     *
     * @param string $filename
     * @return bool
     */
    public function isExecutable($filename);

    /**
     * Checks if the file is executable
     *
     * @param string $filename
     * @return bool
     */
    public function isWritable($filename);

    /**
     * Checks if the file is executable
     *
     * @param string $filename
     * @return bool
     */
    public function isReadable($filename);

    /**
     * Writes to a file
     *
     * @param string $filename
     * @param string $data
     * @param int $flags
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function write($filename, $data, $flags = 0);

    /**
     * Reads entire file
     *
     * @param string $filename
     * @param int $offset [optional]
     * @param int $length [optional]
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function read($filename, $offset = null, $length = null);

    /**
     * Returns the file content as an array of lines
     *
     * @param string $filename
     * @param int $flags [optional]
     * @return string[]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getFileLines($filename, $flags = 0);

    /**
     * Copies a file
     *
     * @param string $source
     * @param string $destination
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function copy($source, $destination);

    /**
     * Moves a file
     *
     * @param $source
     * @param $destination
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function rename($source, $destination);

    /**
     * Removes a file
     *
     * @param string $filename
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function unlink($filename);

    /**
     * Creates a directory
     *
     * @param string $dirname
     * @param int $mode [optional]
     * @param bool $recursive [optional]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function makeDir($dirname, $mode = 0777, $recursive = false);

    /**
     * @param string $dirname
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function removeDir($dirname);

    /**
     * Changes the mode of a file
     *
     * @param string $filename
     * @param int $mode
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function changeMode($filename, $mode);

    /**
     * Changes the owner of a file
     *
     * @param string $filename
     * @param mixed $owner
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function changeOwner($filename, $owner);

    /**
     * Changes the group of a file
     *
     * @param string $filename
     * @param mixed $group
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function changeGroup($filename, $group);

    /**
     * Returns the permissions of a file
     *
     * @param string $filename
     * @param int $mask [optional]
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getMode($filename, $mask = null);

    /**
     * Returns the owner of a file
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getOwner($filename);

    /**
     * Returns the group of a file
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getGroup($filename);

    /**
     * Returns the file type
     *
     * @param string $filename
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getType($filename);

    /**
     * Returns the file size
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getSize($filename);

    /**
     * Returns the last modification time of a file
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getModificationTime($filename);

    /**
     * Returns the last access time of a file
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getAccessTime($filename);

    /**
     * Return the inode change time of the file
     *
     * @param string $filename
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getInodeChangeTime($filename);

    /**
     * Sets access and modification time of file
     *
     * @param string $filename
     * @param int $time [optional]
     * @param int $accessTime [optional]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function touch($filename, $time = null, $accessTime = null);

    /**
     * Changes the current umask
     *
     * @param int $mask
     */
    public function changeUMask($mask);

    /**
     * Returns the current umask
     *
     * @return int
     */
    public function getUMask();


    /**
     * Returns information about the file
     *
     * @param string $filename
     * @return \axy\fs\ifs\Stat
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getStat($filename);

    /**
     * Clears file status cache
     *
     * @param bool $clearRealPath [optional]
     * @param null $filename [optional]
     */
    public function clearStatCache($clearRealPath = false, $filename = null);

    /**
     * Returns the real path of a file
     *
     * @param string $filename
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getRealPath($filename);

    /**
     * Creates a hard link
     *
     * @param string $targetName
     * @param string $linkName
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function createHardLink($targetName, $linkName);

    /**
     * Creates a symbolic link
     *
     * @param string $targetName
     * @param string $linkName
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function createSymbolicLink($targetName, $linkName);

    /**
     * Returns the target of a symbolic link
     *
     * @param string $linkName
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getLinkTarget($linkName);

    /**
     * Change the owner of a link-file
     *
     * @param string $linkName
     * @param mixed $owner
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function changeLinkOwner($linkName, $owner);

    /**
     * Change the group of a link-file
     *
     * @param string $linkName
     * @param mixed $group
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function changeLinkGroup($linkName, $group);

    /**
     * Returns information about a file or symbolic link
     *
     * @param string $linkName
     * @return \axy\fs\ifs\Stat
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getLinkStat($linkName);

    /**
     * Returns the available space on filesystem or disk partition
     *
     * @param string $dirname
     * @return float
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getFreeSpace($dirname);

    /**
     * Returns the total space on filesystem or disk partition
     *
     * @param string $dirname
     * @return float
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getTotalSpace($dirname);

    /**
     * Creates a temporary file
     *
     * @return \axy\fs\ifs\IFile
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function createTempFile();

    /**
     * Find path names matching a pattern
     *
     * @param string $pattern
     * @param int $flags [optional]
     * @return string[]
     */
    public function glob($pattern, $flags = 0);

    /**
     * Changes the current directory
     *
     * @param string $directory
     */
    public function changeCurrentDirectory($directory);

    /**
     * Returns the current directory
     *
     * @return string
     */
    public function getCurrentDirectory();
}
