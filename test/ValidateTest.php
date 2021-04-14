<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidationTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('correo@demiabuela.com');
        $this->assertTrue($email);
        $email = Validate::email('correo@@demiabuela.com');
        $this->assertFalse($email);
    }
    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }
    public function test_password()
    {
        $password = Validate::url('ksdjf');
        $this->assertFalse($password);

        $password = Validate::url('5463546qwdqwd');
        $this->assertTrue($password);
    }
}