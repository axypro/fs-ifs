<?php
/**
 * @package axy\fs\ifs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

namespace axy\fs\ifs\errors;

/**
 * Basic error of FS operation
 */
interface FSError extends Error
{
    /**
     * @return string|null
     */
    public function getTargetFileName();
}
