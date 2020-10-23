<?php

namespace NewEra\NameClassificationBundle\Tests\Provider;

use NewEra\NameClassificationBundle\Entity\Person;
use NewEra\NameClassificationBundle\Provider\EmailProvider;
use NewEra\NameClassificationBundle\Provider\NameProvider;
use PHPUnit\Framework\TestCase;
use SDD\UtilsBundle\StringUtils;

class StringUtilsTest extends TestCase
{
    public function testComputeEmailFromFirstLastName_extra_chars(): void
    {
        self::assertSame('aabbcc', StringUtils::stripAllSpaces("aa bb cc     \t"));
    }

}

