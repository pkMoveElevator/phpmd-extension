<?php

namespace MS\PHPMD\Tests\Unit\Design;

use MS\PHPMD\Tests\Unit\AbstractPhpmdTest;

class ReturnStatementTest extends AbstractPhpmdTest
{
    const DESCRIPTION = 'A return statement line should only contains Variable,MemberPrimaryPrefix,Literal,FunctionPostfix,Array. It increase the reading rate.';

    public function testIsReturnStatementComplex()
    {
        $this->generateRuleViolations('Service/GeneralManager.php', 'design.xml');

        $this->assertTrue($this->hasLineAndDescription(17, self::DESCRIPTION));
        $this->assertTrue($this->hasLineAndDescription(39, self::DESCRIPTION));
        $this->assertTrue($this->hasLineAndDescription(40, self::DESCRIPTION));
        $this->assertTrue($this->hasLineAndDescription(41, self::DESCRIPTION));
        $this->assertTrue($this->hasLineAndDescription(42, self::DESCRIPTION));

        $this->assertFalse($this->hasLineAndDescription(29, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(52, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(53, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(54, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(55, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(56, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(57, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(58, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(59, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(60, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(61, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(62, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(63, self::DESCRIPTION));
        $this->assertFalse($this->hasLineAndDescription(64, self::DESCRIPTION));
    }
}
