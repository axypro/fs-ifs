<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs;

/**
 * Working with opened file
 */
interface IFile
{
    const LOCK_SH = LOCK_SH;
    const LOCK_EX = LOCK_EX;
    const LOCK_UN = LOCK_UN;
    const SEEK_SET = SEEK_SET;
    const SEEK_CUR = SEEK_CUR;
    const SEEK_END = SEEK_END;

    /**
     * Closes the file pointer
     *
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function close();

    /**
     * Checks if the file is ended
     *
     * @return bool
     */
    public function isEOF();

    /**
     * Flushes the buffer to the file
     *
     * @return mixed
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function flush();

    /**
     * Writes data to the file
     *
     * @param string $data
     * @param int $length [optional]
     * @return int
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function write($data, $length = null);

    /**
     * Reads data from the file
     *
     * @param int $length
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function read($length);

    /**
     * Returns the next character from the file
     *
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getChar();

    /**
     * Returns the next line from the file
     *
     * @param string $length [optional]
     * @return string
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getLine($length = null);

    /**
     * Locks the file
     *
     * @param int $operation
     * @param int $wouldBlock [optional]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function lock($operation, &$wouldBlock = null);

    /**
     * Returns information about the file
     *
     * @return \axy\fs\ifs\Stat
     */
    public function getStat();

    /**
     * Sets the position of the file read/write pointer
     *
     * @param int $offset
     * @param int $whence [optional]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function setPosition($offset, $whence = self::SEEK_SET);

    /**
     * Returns the current position of the file read/write pointer
     *
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function getPosition();

    /**
     * Rewinds the current position
     *
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function rewindPosition();

    /**
     * Truncates the file to a given length
     *
     * @param int $size [optional]
     * @throws \axy\fs\ifs\errors\FSError
     */
    public function truncate($size = 0);

    /**
     * Returns the meta data of a file stream
     *
     * @return \axy\fs\ifs\MetaData
     */
    public function getMetaData();
}
