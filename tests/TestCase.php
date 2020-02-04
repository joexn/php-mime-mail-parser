<?php
namespace Tests\PhpMimeMailParser;

/**
 * Test case of php-mime-mail-parser
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        // Common setup procedures
        $this->assertTrue(extension_loaded('mailparse'), "mailparse not installed");
    }
}