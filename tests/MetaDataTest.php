<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs\tests;

use axy\fs\ifs\MetaData;

/**
 * coversDefaultClass axy\fs\ifs\Stat
 */
class MetaDataTest extends \PHPUnit_Framework_TestCase
{
    public function testMerge()
    {
        $fp = fopen(__FILE__, "rt");
        $data = stream_get_meta_data($fp);
        fclose($fp);
        $meta = new MetaData($data);
        $this->assertSame(__FILE__, $meta->filename);
        $this->assertSame(__FILE__, $meta->uri);
        $this->assertFalse($meta->eof);
    }
}
