<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs\tests\tst;

use axy\fs\ifs\IFS;

class FakeFS implements IFS
{
    /**
     * {@inheritdoc}
     */
    public function open($filename, $mode)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isExists($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isFile($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isDir($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isLink($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isExecutable($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function write($filename, $data, $flags = 0)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function read($filename, $offset = null, $length = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFileLines($filename, $flags = 0)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function copy($source, $destination)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function rename($source, $destination)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function unlink($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function makeDir($dirname, $mode = 0777, $recursive = false)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function removeDir($dirname)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeMode($filename, $mode)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeOwner($filename, $owner)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeGroup($filename, $group)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getMode($filename, $mask = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getOwner($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getGroup($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getType($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getSize($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getModificationTime($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getAccessTime($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getInodeChangeTime($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function touch($filename, $time = null, $accessTime = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeUMask($mask)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getUMask()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getStat($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function clearStatCache($clearRealPath = false, $filename = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getRealPath($filename)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createHardLink($targetName, $linkName)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createSymbolicLink($targetName, $linkName)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkTarget($linkName)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeLinkOwner($linkName, $owner)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeLinkGroup($linkName, $group)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkStat($linkName)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFreeSpace($dirname)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalSpace($dirname)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function createTempFile()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function glob($pattern, $flags = 0)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function changeCurrentDirectory($directory)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentDirectory()
    {
    }
}
