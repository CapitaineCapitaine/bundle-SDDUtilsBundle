<?php

namespace SDD\UtilsBundle\Tests;

use PHPUnit\Framework\TestCase;
use SDD\UtilsBundle\StringUtils;

class StringUtilsTest extends TestCase
{

    public function testEndsWith()
    {

    }

    public function testProperCase()
    {

    }

    public function testRemoveAccents()
    {
        self::assertSame('Il etait une fOis', StringUtils::removeAccents("Il était ûne fÔis"));

    }


    public function testStartsWith()
    {

    }




    public function teststripAllSpaces(): void
    {
        self::assertSame('aabbcc', StringUtils::stripAllSpaces("aa bb cc     "));
        self::assertSame('aabbcc', StringUtils::stripAllSpaces("aa bb\tcc     \t"));
        self::assertSame('aabbcc', StringUtils::stripAllSpaces("aabbcc"));
    }

}

