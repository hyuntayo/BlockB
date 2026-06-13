<?php
/**
 * Tests for BlockB
 */

use PHPUnit\Framework\TestCase;
use Blockb\Blockb;

class BlockbTest extends TestCase {
    private Blockb $instance;

    protected function setUp(): void {
        $this->instance = new Blockb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
