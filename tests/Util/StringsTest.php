<?php

namespace Tests\Io\Util;

use Io\Util\Strings;
use PHPUnit\Framework\TestCase;

/**
 * The StringsTest contains test cases for the Strings class.
 */
class StringsTest extends TestCase
{
    /**
     * Tests whether the given characters are prepended to the specified string.
     *
     * @param string $string The string to which the characters will be prepended.
     * @param string $chars The characters to prepend.
     * @param string $expected The expected string after the characters have been prepended.
     * @dataProvider providerTestCharacterIsPrepended
     */
    public function testCharacterIsPrepended(string $string, string $chars, string $expected)
    {
        $result = Strings::addLeading($string, $chars);

        $this->assertEquals($expected, $result);
    }

    /**
     * Provides a collection of strings for a single test.
     *
     * @return string[] A collection of strings to write to a stream.
     */
    public function providerTestCharacterIsPrepended()
    {
        return [
            ['foo', '/', '/foo'],
            ['/bar', '/', '/bar'],
            ['/bar', '*/', '*/bar'],
            ['!@#$%^', '!', '!@#$%^'],
            ['!@#$%^', '#', '#!@#$%^'],
            ['', '*', '*'],
            ['^', '^', '^']
        ];
    }
}