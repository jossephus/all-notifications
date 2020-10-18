<?php

namespace Jossephus\AllNotifications;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jossephus\AllNotifications\Skeleton\SkeletonClass
 */
class AllNotificationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'all-notifications';
    }
}
