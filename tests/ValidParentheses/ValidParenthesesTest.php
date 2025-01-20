<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\ValidParentheses\ValidParentheses;

class ValidParenthesesTest extends TestCase
{
    protected ValidParentheses $validParentheses;
    protected function setUp(): void
    {
        $this->validParentheses = new ValidParentheses();
    }

    public function testvalidParentheses() {
        $this->assertTrue($this->validParentheses->isValid("[]"));
        $this->assertFalse( $this->validParentheses->isValid('["'));
        $this->assertTrue( $this->validParentheses->isValid("[()]"));
    }
    protected function tearDown(): void
    {
        unset($this->validParentheses);
    }
}