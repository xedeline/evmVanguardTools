<?php
/**
 * Tests for evmVanguard
 */

use PHPUnit\Framework\TestCase;
use Evmvanguard\Evmvanguard;

class EvmvanguardTest extends TestCase {
    private Evmvanguard $instance;

    protected function setUp(): void {
        $this->instance = new Evmvanguard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Evmvanguard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
