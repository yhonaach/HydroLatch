<?php
/**
 * Tests for HydroLatch
 */

use PHPUnit\Framework\TestCase;
use Hydrolatch\Hydrolatch;

class HydrolatchTest extends TestCase {
    private Hydrolatch $instance;

    protected function setUp(): void {
        $this->instance = new Hydrolatch(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hydrolatch::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
