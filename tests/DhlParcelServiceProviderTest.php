<?php

namespace MrThito\Laravel\Tests;

use MrThito\DhlParcel\Client;
use MrThito\Laravel\DhlParcelClientAdapter;
use MrThito\Laravel\Facades\DhlParcel as DhlParcelFacade;

class DhlParcelServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_resolve_the_dhl_parcel_client()
    {
        $this->assertInstanceOf(Client::class, app('dhlparcel'));
    }

    /** @test */
    public function it_can_resolve_the_dhl_parcel_client_adapter()
    {
        $this->assertInstanceOf(DhlParcelClientAdapter::class, app('dhlparcel.adapter'));
    }

    /** @test */
    public function it_can_use_the_facade()
    {
        $this->assertNull(DhlParcelFacade::getAccountId());
    }
}
