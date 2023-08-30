<?php

namespace MrThito\Laravel\Tests;

use MrThito\Laravel\DhlParcelClientAdapter;

class HelperTest extends TestCase
{
    /** @test */
    public function it_has_a_helper_function()
    {
        $this->assertTrue(function_exists('dhlparcel'));

        $this->assertInstanceOf(DhlParcelClientAdapter::class, dhlparcel());
    }
}
