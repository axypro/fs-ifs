<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs;

/**
 * Factory of FS-implementation
 */
class Factory
{
    /**
     * @param mixed $params [optional]
     *        (null, string, IFS)
     * @return IFS
     * @throws \LogicException
     */
    public static function build($params = null)
    {
        if ($params === null) {
            return self::getStandard();
        }
        if (is_object($params)) {
            if (!($params instanceof IFS)) {
                throw new \LogicException(get_class($params).' does not implement IFS');
            }
            return $params;
        }
        if (!class_exists($params, true)) {
            throw new \LogicException('FS class '.$params.' not found');
        }
        if (!is_subclass_of($params, self::$interface)) {
            throw new \LogicException($params.' does not implement IFS');
        }
        return new $params();
    }

    /**
     * Returns the standard implementation
     *
     * @return IFS
     * @throws \LogicException
     *         the standard implementation not installed
     */
    public static function getStandard()
    {
        if (self::$standard === null) {
            $cn = self::$standardCN;
            if (!class_exists($cn, true)) {
                throw new \LogicException('The standard FS implementation not installed');
            }
            if (!is_subclass_of($cn, self::$interface)) {
                throw new \LogicException('OMG, standard FS is fake');
            }
            self::$standard = new $cn;
        }
        return self::$standard;
    }

    /**
     * Class name of the standard FS
     *
     * @var string
     */
    private static $standardCN = 'axy\fs\real\FS';

    /**
     * Required interface of FS
     *
     * @var string
     */
    private static $interface = 'axy\fs\ifs\IFS';

    /**
     * Cache of the standard instance
     *
     * @var IFS
     */
    private static $standard;
}
