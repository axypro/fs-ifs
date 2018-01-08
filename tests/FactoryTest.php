<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs\tests;

use axy\fs\ifs\Factory;
use axy\fs\ifs\tests\tst\FakeFS;

/**
 * coversDefaultClass axy\fs\ifs\Factory
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * covers ::build
     */
    public function testBuild()
    {
        $fake = new FakeFS();
        $this->assertSame($fake, Factory::build($fake));
        $another = Factory::build(get_class($fake));
        $this->assertInstanceOf(get_class($fake), $another);
        $this->assertNotSame($fake, $another);
    }

    /**
     * covers ::build
     * @dataProvider providerBuildErrors
     * @param mixed $params
     * @param string $message
     */
    public function testBuildErrors($params, $message)
    {
        $this->setExpectedException('LogicException', $message);
        Factory::build($params);
    }

    /**
     * @return array
     */
    public function providerBuildErrors()
    {
        $data = [
            [
                $this,
                'does not implement IFS',
            ],
            [
                __CLASS__,
                'does not implement IFS',
            ],
            [
                __NAMESPACE__.'/NotFound',
                'not found',
            ],
        ];
        if (!class_exists('axy\fs\real\FS')) {
            $data[] = [
                null,
                'not installed',
            ];
        }
        return $data;
    }

    /**
     * covers ::getStandard
     */
    public function testGetStandard()
    {
        if (class_exists('axy\fs\real\FS')) {
            $imp = Factory::getStandard();
            $this->assertInstanceOf('axy\fs\real\FS', $imp);
            $this->assertSame($imp, Factory::getStandard());
            return;
        }
        $this->setExpectedException('LogicException', 'not installed');
        Factory::getStandard();
    }
}
