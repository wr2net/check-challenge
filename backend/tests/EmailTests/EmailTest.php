<?php

namespace Tests\EmailTests;

use App\Emails\Models\Email;
use App\Emails\Services\EmailService;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * @var Email
     */
    protected Email $email;

    /**
     * @var EmailService
     */
    protected $emailService;

    public function setUp(): void
    {
        $this->email = new Email();
        $this->emailService = EmailService::class;
    }

    /**
     * @test
     */
    public function verifyContainsInstanceEmail()
    {
        $this->assertInstanceOf(Email::class, $this->email);
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfGetFindAll()
    {
        $this->assertTrue(method_exists($this->emailService, 'findAll'), 'Method not found: findAll()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfGet()
    {
        $this->assertTrue(method_exists($this->emailService, 'find'), 'Method not found: find()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfStore()
    {
        $this->assertTrue(method_exists($this->emailService, 'store'), 'Method not found: store()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfEnable()
    {
        $this->assertTrue(method_exists($this->emailService, 'enable'), 'Method not found: enable()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfDisable()
    {
        $this->assertTrue(method_exists($this->emailService, 'disable'), 'Method not found: disable()');
    }

    /**
     * @test
     */
    public function verifyContainsInstanceOfDestroy()
    {
        $this->assertTrue(method_exists($this->emailService, 'destroy'), 'Method not found: destroy()');
    }
}
