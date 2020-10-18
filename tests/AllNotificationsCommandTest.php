<?php

namespace Jossephus\AllNotifications\Tests;

use Orchestra\Testbench\TestCase;
use Jossephus\AllNotifications\AllNotificationsServiceProvider;

class AllNotificationsCommandTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AllNotificationsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
