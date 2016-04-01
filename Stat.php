<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs;

/**
 * The file statistic
 */
class Stat
{
    /**
     * Device number
     *
     * @var int
     */
    public $dev;

    /**
     * Inode number
     *
     * @var int
     */
    public $ino;

    /**
     * Inode protection mode
     *
     * @var int
     */
    public $mode;

    /**
     * Number of links
     *
     * @var int
     */
    public $nlink;

    /**
     * UserID of owner
     *
     * @var int
     */
    public $uid;

    /**
     * GroupID of owner
     *
     * @var int
     */
    public $gid;

    /**
     * Device type, if inode device
     *
     * @var int
     */
    public $rdev;

    /**
     * Size in bytes
     *
     * @var int
     */
    public $size;

    /**
     * Time of last access
     *
     * @var int
     */
    public $atime;

    /**
     * time of last modification
     *
     * @var int
     */
    public $mtime;

    /**
     * Time of last inode change
     *
     * @var int
     */
    public $ctime;

    /**
     * Block size of filesystem IO
     *
     * @var int
     */
    public $blksize;

    /**
     * Number of 512-byte blocks allocated
     *
     * @var int
     */
    public $blocks;

    /**
     * The constructor
     *
     * @param array $data [optional]
     */
    public function __construct(array $data = null)
    {
        if ($data !== null) {
            foreach ($this as $k => &$v) {
                if (isset($data[$k])) {
                    $v = $data[$k];
                }
            }
            unset($v);
        }
    }
}
