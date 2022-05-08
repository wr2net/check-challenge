<?php

namespace Tests\CakeTests;

use App\Cakes\Models\Cake;
use App\Cakes\Services\CakeService;
use PHPUnit\Framework\TestCase;

class CakeTest extends TestCase
{
    /**
     * @var Cake
     */
    protected Cake $cake;

    /**
     * @var CakeService
     */
    protected $cakeService;

    public function setUp(): void
    {
        $this->cake = new Cake();
        $this->cakeService = CakeService::class;
    }

    /**
     * @test
     */
    public function verifyContainsInstanceCake()
    {
        $this->assertInstanceOf(Cake::class, $this->cake);
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfGetFindAll()
    {
        $this->assertTrue(method_exists($this->cakeService, 'findAll'), 'Method not found: findAll()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfGetById()
    {
        $this->assertTrue(method_exists($this->cakeService, 'findById'), 'Method not found: findById()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfStore()
    {
        $this->assertTrue(method_exists($this->cakeService, 'store'), 'Method not found: store()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfEnable()
    {
        $this->assertTrue(method_exists($this->cakeService, 'enable'), 'Method not found: enable()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfDisable()
    {
        $this->assertTrue(method_exists($this->cakeService, 'disable'), 'Method not found: disable()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfDestroy()
    {
        $this->assertTrue(method_exists($this->cakeService, 'destroy'), 'Method not found: destroy()');
    }
}
