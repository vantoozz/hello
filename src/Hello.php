<?php declare(strict_types=1);

namespace Vantoozz\Hello;

use Stringable;

/**
 * Class Hello
 * @package Vantoozz\Hello
 */
final class Hello implements Stringable
{
    /**
     * Hello constructor.
     * @param string $name
     */
    public function __construct(
        private string $name
    ) {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Hello, $this->name!";
    }
}
