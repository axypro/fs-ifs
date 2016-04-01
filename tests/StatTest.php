<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs\tests;

use axy\fs\ifs\Stat;

/**
 * coversDefaultClass axy\fs\ifs\Stat
 */
class StatTest extends \PHPUnit_Framework_TestCase
{
    public function testMerge()
    {
        $data = [
            'dev' => 5,
            'ino' => 6,
        ];
        $stat = new Stat($data);
        $this->assertSame(5, $stat->dev);
        $this->assertSame(6, $stat->ino);
        $this->assertSame(null, $stat->atime);
    }
}
